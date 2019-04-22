    <div class="content">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <h4 class="page-title">Offers</h4>
                </div>
            </div><br>
                <div class="row">
                    <div class="col-sm-12">
                        <div class="card-box">
                            <table id="datatable" class="table table-striped table-bordered">
                                <thead>
                                    <tr>
                                        <th>Offer Name</th>
                                        <th>Offer ID</th>
                                        <th>Amount</th>
                                        <th>Is Active</th>
                                        <th>Order</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    
                                    <?php foreach($offers as $offer) { ?>
                                        <tr>
                                            <td><?php echo $offer->offer_id; ?></td>
                                            <td>
                                                <a href="/admin/offers/edit/<?php echo $offer->id; ?>/">
                                                    <?php echo $offer->name; ?>
                                                </a>
                                            </td>
                                            <td><?php echo '$'. $offer->payout; ?></td>
                                            <td><?php echo $offer->is_active; ?></td>
                                            <td><?php echo $offer->ordering; ?></td>
                                            <td>
                                               <button id="<?php echo $offer->id; ?>" class="btnRemove btn btn-icon waves-effect waves-light btn-danger"> 
                                                    <i class="fa fa-trash"></i> 
                                                </button>
                                            </td>
                                        </tr>
                                        <?php 
                                    } 
                                    ?>
                                </tbody>
                            </table>
                        </div>
                   </div>
                </div> 
         </div>
    </div>
