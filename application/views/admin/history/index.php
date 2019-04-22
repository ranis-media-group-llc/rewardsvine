    <div class="content">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <h4 class="page-title">Activity History</h4>
                </div>
            </div><br>
                <div class="row">
                    <div class="col-sm-12">
                        <div class="card-box">
                           <table id="datatable" class="table table-striped table-bordered">
                                <thead>
                                    <tr>
                                        <th>User ID</th>
                                        <th>Type</th>
                                        <th>Provider</th>
                                        <th>Offer ID</th>
                                        <th>Offer Name</th>
                                        <th>Points Earn</th>
                                        <th>Datetime</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach($history as $histories) { ?>
                                    <tr>
                                        <td><?php echo $histories->user_id; ?></td>
                                        <td><?php echo $histories->type; ?></td>
                                        <td><?php echo $histories->provider; ?></td>
                                        <td><?php echo $histories->offer_id; ?></td>
                                        <td><?php echo $histories->text; ?></td>
                                        <td><?php echo $histories->points; ?></td>
                                        <td><?php echo $histories->datetime; ?></td>
                                        
                                    </tr>
                                    <?php } ?>
                                </tbody>
                            </table>
                        </div>
                   </div>
                </div> 
         </div>
    </div>
