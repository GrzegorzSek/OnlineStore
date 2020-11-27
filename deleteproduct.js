$(document).ready(function(){
    var productID;
    $(document).on('click','button[data-role=deleteProduct]', function(){
        productID = $(this).data('id');
    });
    $('#deleteProduct').on('click', function() {			
        $.ajax({
            url: "scripts/deleteproduct.php",
            type: "POST",
            data: {
                productID: productID
            },
            cache: false,
            success: function(dataResult){
                var dataResult = JSON.parse(dataResult);
                if(dataResult.statusCode==200){
                    $(".allGood").css('display', 'block');
                    setTimeout(function() {$(".allGood").css('display', 'none');}, 1000);
                    $("#deleteProduct").prop('disabled', true);
                    $("#products").load(location.href+" #products>*","");//odświeża okno z danymi
                    setTimeout(function() {$('#deleteProductModal').modal('hide');}, 1000);
                    setTimeout(function() {$("#deleteProduct").prop('disabled', false);}, 1000);
                    setTimeout(function() {$("#deleteProductMessage").hide();}, 1000);
                }
                else if(dataResult.statusCode==201){
                    $(".somethingWentWrong").css('display', 'block');
                    setTimeout(function() {$(".somethingWentWrong").css('display', 'none');}, 1000);                
                }		
            }
        });					
    });
});