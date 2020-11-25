//Skrypt do edycji zamówienia w modal'u
$(document).ready(function(){
    var productID;
    $(document).on('click','button[data-role=updateProduct]', function(){
        productID = $(this).data('id');       
        //alert($(this).data('id'));       
        $.ajax({
            url: "scripts/fetchadminproductdata.php",
            type: "POST",
            data: {
                productID: productID
            },
            success : function(data){
            $('.productData').html(data);//wyświetla dane pobrane z BD
            }
        });				       
    });	
    $("#updateProductForm").on("submit", function(e){
        e.preventDefault(); //anuluje SUBMIT
        var formData = new FormData(this); //pobiera dane z formularza id=""
        $.ajax({
        url  : "scripts/updateproduct.php",
        type : "POST",
        cache:false,
        data :formData,
        contentType : false,
        processData: false,
        success:function(response){
            $("#updateProductButton").prop('disabled', true);
            $("#error").html(response); //wyświetla błędy ze skryptu PHP
            $("#products").load(location.href+" #products>*","");//odświeża okno z danymi
            setTimeout(function() {$('#updateProductForm').modal('hide');}, 1000);
            setTimeout(function() {$("#updateProductButton").prop('disabled', false);}, 1000);
        }
        });
    });
});