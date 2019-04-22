    <script type="text/javascript">
        $(document).ready(function() 
        {
            $('.btnRemove').click (function(){
                //alert(this.id);
                var ID = this.id;
                //window.location.href="lesson1_lo1_pre.php?NUM="+NoOfItem;
                //showWithCustomIconMessage();
                swal({   
                    title: "Are you sure?",   
                    text: "You cannot undo this action!",   
                    showCancelButton: true,   
                    confirmButtonColor: "#7266BA",   
                    confirmButtonText: "Yes",
                    cancelButtonText: "No",                       
                    closeOnConfirm: false, 
                }, function(){
                    $.ajax
                    ({
                        url:'/admin/offers/delete',
                        type:"POST",
                        cache: false,
                        data:{id :ID},
                        success:function(data)
                            {
                                window.location="/admin/offers";
							},
                        error:function(jqXHR, textStatus, errorThrown){
                            alert(errorThrown+'! Contact your administrator.');
                        }
					});    
                    //swal("Deleted!", "Your imaginary file has been deleted.", "success"); 
                });
            });
            
        });
    </script>
   