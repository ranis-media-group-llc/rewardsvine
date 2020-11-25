<?php
    $this->load->view('layout/head');
?>
<link rel="stylesheet" href="//cdn.datatables.net/1.10.22/css/jquery.dataTables.min.css">
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
                                                <h3 class="dt-card__title">Gift Cards</h3>
                                            </div>
                                        </div>
                                        <br><br>
                                        <div class="tab-content">
                                            <div class="col-md-12">
                                                <div class="social-box">
                                                        <div class="row">
                                                            <div class="col-md-12"><div id="status_sorting"  class=""></div>
                                                            <table class="table" id="gift_cards_table">
                                                                <thead>
                                                                <tr>
                                                                    <td class="d-"></td>
                                                                </tr>
                                                                </thead>
                                                                <tbody>
                                                                <?php
                                                                    $giftcards = gift_cards();
                                                                    for($x=0;$x<count($giftcards);$x++){ ?>
                                                                    <tr>
                                                                        <td>
                                                                            <div class="col-lg-3 col-xs-12 text-center gift_box">
                                                                                <div class="box">
                                                                                    <img alt="<?= $giftcards[$x]['name']; ?>" class="card-img-top img-fluid" src="<?= $giftcards[$x]['image_path']; ?>">
                                                                                    <i class="fa fa-behance fa-3x" aria-hidden="true"></i>
                                                                                    <br><br>
                                                                                    <div class="box-title">
                                                                                        <h4><?= $giftcards[$x]['name']; ?></h4>
                                                                                        <small><?= $giftcards[$x]['points']; ?></small>
                                                                                        <p style="display:none;">popular</p>
                                                                                    </div>
                                                                                    <div class="box-text">
                                                                                        <span></span>
                                                                                    </div>
                                                                                    <br>
                                                                                    <a href="<?= base_url('gifts/view/'.$giftcards[$x]['slug'] ); ?>" style="width: 110px;" class="btn btn-secondary btn-xs text-uppercase">
                                                                                        REDEEM
                                                                                    </a>
                                                                                    <br><br>
                                                                                </div>
                                                                            </div>
                                                                        </td>
                                                                    </tr>
                                                                <?php } ?>
                                                                </tbody>
                                                            </table>
                                                            </div>
                                                        </div>

                                                </div>
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
    $(document).ready( function () {
        $('#gift_cards_table').DataTable({
            "lengthChange": false,
             "responsive" : true,
            "drawCallback": function( settings ) {
                $("#gift_cards_table thead").remove(); } ,
            "pageLength": 50,
            "info": false,
            "paging": false,
            initComplete: function () {
                this.api().columns().every( function () {
                    var column = this;
                    var select = $('<select class="input_select" style="padding: 5px;display: inline-block !important;">' +
                        '<option value="">All</option>' +
                        '<option value="popular">Most Popular</option>' +
                        '</select>').appendTo($(".dataTables_filter"))
                        .on( 'change', function () {
                            var val = $.fn.dataTable.util.escapeRegex($(this).val());
                            column.search( val ? val : '', false, true ).draw();
                            console.log($(this).val());
                            $(this).val();
                        } );
                    // column.data().unique().sort().each( function ( d, j ) {
                    //     //var val = $('<div/>').html(d).text();
                    //     //select.append( '<option value="' + val + '">' + val + '</option>' );
                    //     select.append( '<option value="'+d+'">'+d+'</option>' )
                    //     //console.log(val);
                    // });
                } );
            }

        });
    } );
</script>

<style>
    @import url('https://fonts.googleapis.com/css?family=Poppins&display=swap');

    table.dataTable.no-footer {
        border-bottom: 1px solid #fff !important;
    }

    @media (min-width: 320px) and (max-width: 768px) {
        .dataTables_filter {
            margin-right: 0 !important;
        }
    }

    .img-fluid{
        width: auto;
        border-radius: 2px;
        border: 1px solid #f0eacb !important;
    }

    #gift_cards_table {
        width: 100% !important;
    }
    tbody tr{
        display: inline-block !important;
        width : 250px;
    }

    tr:hover{
        transform: scale(1.02);
    }
    .box-btn {
        background-color:#4385f8;
        width: auto;
        height: 40px;
        border-radius: 2px;
        color: #fff !important;
        background-size: 100% 100%;
        box-shadow: 0 0 0 7px #4385f8 inset;
        margin-top: 15px;
        cursor: pointer;
    }

    .gift_box{
        backface-visibility: hidden;
        background: #faf9f8;
        border-radius: 10px;
        padding: 0 ;
        box-shadow: 0 0 6px #4183D7;
        height: 100px;
        display: inherit;
        transition: transform .5s; /* Animation */
        margin: 0 auto;
        cursor: pointer;
        /* background-image: url('/assets/images/xmas3.jpg') !important;
    }


    .box-title{
     color : #ffffff !important;
}
    /*
    h4{
        color : #ffffff !important;
        text-transform: uppercase;
    } */

    .card-img-top {
        background-color: #f2f2f2;
    }


    .social-box .box:hover{
        box-shadow: 0 0 6px #00d7c6;
    }
    .gift_card_redeem_btn{
        text-decoration: none;
        color: #fff;
        font-size: 16px;
    }
    .box-btn-redeem{
        top: 10px !important;
    }
</style>
