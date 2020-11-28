<?php
    $this->load->view('layout/head');
?>
    <!-- Loader -->
    <div class="dt-loader-container">
        <div class="dt-loader">
            <svg class="circular" viewBox="25 25 50 50">
                <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10"></circle>
            </svg>
        </div>
    </div>
    <!-- /loader -->
    <!-- Root -->
    <div class="dt-root">
        <div class="dt-root__inner">

            <!-- Root Intra -->
            <div class="dt-root__intra">
                <?php
                $this->load->view('layout/header');
                ?>
                <!-- Site Main -->
                <main class="dt-main">
                    <?php
                        $this->load->view('layout/aside');
                    ?>
                    <div class="dt-content-wrapper">
                        <div class="dt-content">
                            <div class="dt-page__header">
                                <h1 class="dt-page__title"></h1>
                            </div>
                            <div class="row">
                                <div class="col-xl-12">
                                    <div class="card">
                                        <div class="card-header card-nav border-bottom-0">
                                            <div class="d-flex align-items-center justify-content-between mb-4">
                                                <h3 class="dt-card__title">Cryptocurrency</h3>
                                            </div>
                                        </div>
                                        <br><br>
                                        <div class="tab-content">
                                            <div class="col-md-12">
                                                <center>
                                                    <img alt="image" style="width: 300px;" class="card-img-top img-fluid" src="/assets/images/bitcoin.png">
                                                </center>
                                                <form method="post" id="form_redeem">
                                                    <div class="form-group">
                                                        <label for="offerwallName">Vendor</label>
                                                        <input type="text" value="Bitcoin" name="redeem_option" class="form-control" readonly>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="offerwallName">Amount</label>
                                                        <select class="form-control" data-style="btn-white" name="redeem_amt">
                                                            <option value="5-1500">$5 = 1500 points - Bitcoin (Coinbase)</option>
                                                            <option value="5-1800">$5 = 1800 points - Bitcoin (Non - coinbase)</option>
                                                            <option value="10-2800">$10 = 2800 points - Bitcoin (Coinbase)</option>
                                                            <option value="10-3000">$10 = 3000 points - Bitcoin (Non - coinbase)</option>
                                                            <option value="25-6500">$25 = 6500 points - Bitcoin (Coinbase)</option>
                                                            <option value="25-7000">$25 = 7000 points - Bitcoin (Non - coinbase)</option>
                                                            <option value="50-13500">$50 = 13500 points - Bitcoin (Coinbase)</option>
                                                            <option value="50-13500">$50 = 13500 points - Bitcoin (Non - coinbase)</option>
                                                        </select>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="offerwallLink">Message <small>(You can state here your account number,etc.)</small></label>
                                                        <textarea type="text" name="redeem_message" class="form-control"></textarea>
                                                    </div>
                                                    <button type="submit" class="btn btn-secondary btn-xs text-uppercase">Send</button>
                                                    <br><br><br>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <!-- /grid -->
                        </div>

                        <!-- Footer -->
                        <footer class="dt-footer">
                            Copyright.RewardsVine © 2020
                        </footer>
                        <!-- /footer -->
                    </div>
                    <!-- /site content wrapper -->

                </main>
            </div>

        </div>
    </div>
    <!-- /root -->

<?php
$this->load->view('layout/foot');
?>

<script>
    $("#form_redeem").submit(function(e) {
        //alert("asf");
        e.preventDefault(); // avoid to execute the actual submit of the form.
        var form = $(this);
        //var url = form.attr('action');
        $.ajax({
            type: "POST",
            url: "/gifts/redeem",
            data: form.serialize(), // serializes the form's elements.
            success: function(data)
            {
                console.log(data);
                if(data === "points_error"){
                    alert_display('Your points is not enough!',1,'warning','Warning');
                }else if(data === "user_error"){
                    alert_display('Error occur,contact Administrator!',0,'error','Error');
                }else if(data === "success"){
                    alert_display('Redeeem message has been sent to admin successfully !',1,'success','Congrats');
                }else if(data === "password_error"){
                    alert_display('Password, is not correct!',0,'error','Error');
                }else{
                    alert_display('Error occur,contact Administrator!',0,'error','Error');
                }
                // if(data === "Success"){
                //     //window.location.reload();
                //     sucess_add('Furnisher Added Successfully!',1);
                // }else {
                //     warning('There is an error adding Creditor/Furnisher. Contact Administrator!');
                //
                // }
            }
        });
    });

    function alert_display(information,is_reload,icon,title){
        Swal.fire({
            title: title,
            text: information,
            icon: icon,
            showCancelButton: false,
            confirmButtonColor: '#32243d',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Ok'
        }).then((result) => {
            if(is_reload === 1){
                if(icon === 'success'){
                    window.location.href="/gifts";
                }else{
                    if (result.value) {
                        window.location.reload();
                    }
                }
            }
        });
    }

</script>
