<?php

if (!function_exists('gift_cards')) {
    function gift_cards($slug='')
    {
        $gift_cards = array(
            array(
                'name' => 'iTunes',
                'slug' => 'itunes',
                'points' => '$5 - 1800 points',
                'image_path' => '/assets/images/gift_cards/itunes.png',
                'all_points' => '5-1800,10-2800,15-4300,25-7000',
            ),
            array(
                'name' => 'Steam',
                'slug' => 'steam',
                'points' => '$5 - 1800 points',
                'image_path' => '/assets/images/gift_cards/steam.jpg',
                'all_points' => '5-1800,10-2800',
            ),
            array(
                'name' => 'Amazon',
                'slug' => 'amazon',
                'points' => '$5 - 1500 points',
                'image_path' => '/assets/images/gift_cards/amazon.png',
                'all_points' => '5-1500,10-2800',
            ),
            array(
                'name' => 'Google Play',
                'slug' => 'googleplay',
                'points' => '$10 - 3000 points',
                'image_path' => '/assets/images/gift_cards/google-pay.png',
                'all_points' => '10-3000',
            ),
            array(
                'name' => 'Best Buy',
                'slug' => 'bestbuy',
                'points' => '$5 - 1500 points',
                'image_path' => '/assets/images/gift_cards/bestbuy.png',
                'all_points' => '5-1500',
            ),
            array(
                'name' => 'Sony Playstation',
                'slug' => 'sony',
                'points' => '$10 - 2800 points',
                'image_path' => '/assets/images/gift_cards/sony.png',
                'all_points' => '10-2800,20-5500',
            ),
            array(
                'name' => 'Rixty Gift Card',
                'slug' => 'rixty',
                'points' => '$10 - 2800 points',
                'image_path' => '/assets/images/gift_cards/rixty.jpg',
                'all_points' => '10-2800',
            ),
            array(
                'name' => 'Trion Defiance ',
                'slug' => 'trion',
                'points' => '$15 - 4300 points',
                'image_path' => '/assets/images/gift_cards/defiance.png',
                'all_points' => '15-4300',
            ),
            array(
                'name' => 'Xbox Digital Gift Card',
                'slug' => 'xbox',
                'points' => '$15 - 4300 points',
                'image_path' => '/assets/images/gift_cards/xbox.png',
                'all_points' => '15-4300',
            ),
            array(
                'name' => 'eBay Gift Card',
                'slug' => 'ebay',
                'points' => '$5 - 1500 points',
                'image_path' => '/assets/images/gift_cards/ebay.png',
                'all_points' => '5-1500',
            ),
            array(
                'name' => 'Applebees Gift Card',
                'slug' => 'applebees',
                'points' => '$5 - 1500 points',
                'image_path' => '/assets/images/gift_cards/applebess.png',
                'all_points' => '5-1500',
            ),
            array(
                'name' => 'Columbia Sports Gift Card',
                'slug' => 'columbia',
                'points' => '$5 - 1500 points',
                'image_path' => '/assets/images/gift_cards/columbia.png',
                'all_points' => '5-1500',
            ),
            array(
                'name' => 'Walmart eGift Card',
                'slug' => 'walmart',
                'points' => '$5 - 1500 points',
                'image_path' => '/assets/images/gift_cards/walmart.png',
                'all_points' => '5-1500',
            ),
            array(
                'name' => 'Target eGift Card',
                'slug' => 'target',
                'points' => '$5 - 1500 points',
                'image_path' => '/assets/images/gift_cards/target.png',
                'all_points' => '5-1500',
            ),
            array(
                'name' => 'Groupon Gift Card',
                'slug' => 'groupon',
                'points' => '$10 - 2800 points',
                'image_path' => '/assets/images/gift_cards/group_on.png',
                'all_points' => '10-2800',
            ),
            array(
                'name' => 'Visa eGift Card',
                'slug' => 'visa',
                'points' => '$5 - 1500 points',
                'image_path' => '/assets/images/gift_cards/visa.png',
                'all_points' => '5-1500,10-2800,25-6500',
            ),
            array(
                'name' => 'MC eGift Card',
                'slug' => 'minecraft',
                'points' => '$5 - 1500 points',
                'image_path' => '/assets/images/gift_cards/minecraft.png',
                'all_points' => '5-1500,10-2800,25-6500',
            ),
        );

        if(isset($slug)){
            for($x=0;$x<count($gift_cards);$x++){
                if($gift_cards[$x]['slug'] == $slug){
                    return $gift_cards[$x];
                }
            }
        }
        return $gift_cards;
    }

    if (!function_exists('hash_code')) {
        function hash_code()
        {
            $pwd_reset_hash = hash('sha256', md5(time() . 12202021 . 'rewardsVine'));
            return $pwd_reset_hash;
        }
    }

    if (!function_exists('mail_send')) {
        function mail_send($post_data)
        {
            $ch = curl_init('https://mail.rewardsvine.com//includes/create/rewardsvine_email.php');
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($ch, CURLOPT_POSTFIELDS, $post_data);

            // execute!
            $response = curl_exec($ch);

            // close the connection, release resources used
            curl_close($ch);

            return $response;
        }
    }

    if (!function_exists('email_checker')) {
        function email_checker($api_key,$email)
        {
            $url2 = 'https://api-v4.bulkemailchecker.com/?key='.$api_key.'&email='.$email;
            $ch = curl_init($url2);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 15);
            curl_setopt($ch, CURLOPT_TIMEOUT, 15);
            $response = curl_exec($ch);
            curl_close($ch);

            // decode the json response
            $json = json_decode($response, true);
            return $json;
        }
    }

    function get_user_ip_address(){
        if(!empty($_SERVER['HTTP_CLIENT_IP'])){
            //ip from share internet
            $ip = $_SERVER['HTTP_CLIENT_IP'];
        }else if(!empty($_SERVER['HTTP_X_FORWARDED_FOR'])){
            //ip pass from proxy
            $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
        }else{
            $ip = $_SERVER['REMOTE_ADDR'];
        }
        return $ip;
    }
}