<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Messages extends MY_Controller {

    public function __construct ()
    {
        parent::__construct();
        //$this->auths->check(array("Admin","SuperAdmin"));
        $this->load->model('General_model', 'general');
        $this->load->model('Messages_model', 'messages');
    }

    public function index()
    {
        $this->data['title'] = "Admin -  Messages";
        $this->data['messages'] = $this->messages->get_messages_with_user();
        //Returns User's name
        $this->load->view('admin/messages/index', $this->data);
    }

    public function add(){
        $this->data['title'] = "Admin -  Add Message";

        $input = $this->input->post();
        if ($input) {
            $send_to = $input['send_to'];
            $users_lists = $input['users_lists'];
            unset($input['send_to']);
            unset($input['users_lists']);
            $input['datetime'] = date("d-m-Y h:i A");
            $input['user_id'] = $_SESSION['user']->id;

            $message_id = $this->general->add_return_id($input,"rv_messages");
            if($message_id != NULL){
                if($send_to == 'all'){
                    $get_active_members = array(
                        'where' => array(
                            'status' => 2,
                            'role' => 'Member',
                        )
                    );
                    $members = $this->general->get_all_with_keys($get_active_members,'rv_users');
                    foreach ($members as $member){
                        $message_send = array();
                        $message_send['message_id'] = $message_id;
                        $message_send['user_id'] = $member->user_id;
                        $message_send['sent'] = $input['status'];
                        $message_send['view'] = 0;

                        if($this->general->add($message_send,"rv_messages_send")){
                            unset($message_send);
                        }
                    }
                    redirect(base_url('admin/messages/'));
                }
            }
        }
        $this->load->view('admin/messages/add', $this->data);
    }

    public function redeem_status()
    {
        $input = array();
        $id = $_POST['id'];
        $stat = $_POST['stat'];

        if($stat == 'accept'){
            $input['status'] = 1;
        }else if($stat == 'reject'){
            $input['status'] = 2;
        }else if($stat == 'complete'){
            $input['status'] = 3;
        }else{
            $input['status'] = 0;
        }
        if ($this->general->update($input,$id,'rv_redeem')) {
            echo  "success";
        }
    }

}
