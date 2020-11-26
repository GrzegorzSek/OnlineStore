//Upload image oraz dane ADD PRODUCT
$(document).ready(function(){
    
    $("#addProductForm").on("submit", function(e){
        e.preventDefault(); //anuluje SUBMIT
        var formData = new FormData(this); //pobiera dane z formularza id=""
        $.ajax({
            url  : "scripts/addproduct.php",
            type : "POST",
            cache:false,
            data :formData,
            contentType : false,
            processData: false,
            success:function(){
                $("#addProductButton").prop('disabled', true);
                //$("#error").html(response); //wyświetla błędy ze skryptu PHP
                setTimeout(function() {$('#addProductModal').modal('hide');}, 1000);
                setTimeout(function() {$("#addProductButton").prop('disabled', false);}, 1000);
                $("#products").load(location.href+" #products>*","");//odświeża okno z danymi
            }
        });
    });
});