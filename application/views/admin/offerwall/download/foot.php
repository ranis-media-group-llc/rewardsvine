    <script type="text/javascript">
        $(document).ready(function() 
        {
            $('#datatable').dataTable({
					
			});
            $('.btnRSO').click (function(){
                //alert(this.id);
                var ID = this.id;
                //window.location.href="lesson1_lo1_pre.php?NUM="+NoOfItem;
                //showWithCustomIconMessage();
                swal({   
                    title: "Get all offers?",   
                    text: "You are about to retrieve and save offers to database!",   
                    showCancelButton: true,   
                    confirmButtonColor: "#7266BA",   
                    confirmButtonText: "Yes",
                    cancelButtonText: "No",                       
                    closeOnConfirm: true 
                }, function(){
                    $.ajax
                    ({
                        url:'/admin/offerwall/retrieve_offers',
                        type:"POST",
                        cache: false,
                        beforeSend: showProcessing,
                        data:{id :ID},
                        success:function(data)
                            {
                                hideProcessing();
                                //alert(data);
							},
                        error:function(jqXHR, textStatus, errorThrown){
                            hideProcessing();
                            alert(errorThrown+'! Contact your administrator.');
                        }
					});    
                    //swal("Deleted!", "Your imaginary file has been deleted.", "success"); 
                });
            });
            function showProcessing() {
                document.getElementById('loading_process').style.display = "block";
                //$('#donateNow').attr('disabled', 'disabled');    
            }
            function hideProcessing() {
                /*$('.donate-process').removeClass('show').attr('aria-expanded', 'false');*/
                document.getElementById('loading_process').style.display = "none";
              }
        });
    </script>
   