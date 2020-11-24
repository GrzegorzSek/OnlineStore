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
                var msg = "";
                var dataResult = JSON.parse(dataResult);
                if(dataResult.statusCode==200){
                    $("#deleteProduct").prop('disabled', true);
                    var msg = "Użytkownik został usunięty!";
                    $("#deleteProductMessage").html(msg);
                    $("#products").load(location.href+" #products>*","");//odświeża okno z danymi
                    setTimeout(function() {$('#deleteProduct').modal('hide');}, 1000);
                    setTimeout(function() {$("#deleteProduct").prop('disabled', false);}, 1000);
                    setTimeout(function() {$("#deleteProductMessage").hide();}, 1000);
                }
                else if(dataResult.statusCode==201){
                    alert("Error occured!");
                }		
            }
        });					
    });
});