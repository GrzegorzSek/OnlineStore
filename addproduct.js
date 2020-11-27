//Upload image oraz dane ADD PRODUCT
$(document).ready(function(){

    $("#addProductForm").on("submit", function(e){
        $("#addProductButton").prop('disabled', true);
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
                $(".allGood").css('display', 'block');
                //$("#error").html(response); //wyświetla błędy ze skryptu PHP
                $('#productCategory').prop('selectedIndex',0);
                $('#productSubcategory').prop('selectedIndex',0);
                $('#addProductForm input[type="text"]').val('');
                $('#addProductForm input[type="file"]').val('');
                $('#addProductForm input[type="number"]').val('');
                setTimeout(function() {$(".allGood").css('display', 'none');}, 2000);
                setTimeout(function() {$("#addProductButton").prop('disabled', false);}, 2000);
                $("#products").load(location.href+" #products>*","");//odświeża okno z danymi
            }
        });
    });
});