
<script>
 $(document).ready(function() 
     {
            $('.viewOfferwall').click(function(){
                //var ID=$(this).attr('id');
                var ID = this.id;
                //alert(ID);
                 // $.ajax({url:"/members/offerwall/details.php?ID="+ID,cache:false,success:function(result){
                     // $(".modal-content").html(result);
                // }});
                $.ajax
                    ({
                        url:'/members/offerwall/details',
                        type:"POST",
                        cache: false,
                        data:{id :ID},
                        success:function(data)
                            {
                                $(".modal-contents").html(data);
							},
                        error:function(jqXHR, textStatus, errorThrown){
                            alert(errorThrown+'! Contact your administrator.');
                        }
					});   
            });
    });
</script>