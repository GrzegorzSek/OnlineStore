$(document).ready(function(){
    $("#sendMailPass").click(function(){
        $("#sendMailPass").prop('disabled', true);
        var email = $("#remindEmail").val().trim();
        if( email != ""){
            $.ajax({
                url:'scripts/sendpass.php',
                type:'post',
                data:{email:email},
                success:function(dataResult){
                    var dataResult = JSON.parse(dataResult);
                    if(dataResult.statusCode==200){
                        $(".allGood").css('display', 'block');
                        setTimeout(function() {window.location = "index.php";}, 2000);
                        setTimeout(function() {$(".allGood").css('display', 'none');}, 2000);
                        setTimeout(function() {$("#sendMailPass").prop('disabled', false);}, 2000);
                    }else if(dataResult.statusCode==201){
                        $(".somethingWentWrong").css('display', 'block');
                        setTimeout(function() {$(".somethingWentWrong").css('display', 'none');}, 2000);
                    }
                }
            });
        }else{
            $(".almostGood").css('display', 'block');
            setTimeout(function() {$(".almostGood").css('display', 'none');}, 2000);
            $("#sendMailPass").prop('disabled', false);
        }
    });

});