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
                    var msg = "";
                    var dataResult = JSON.parse(dataResult);
                    if(dataResult.statusCode==200){
                        alert("Wiadomość została wysłana.");
                        setTimeout(function() {window.location = "index.php";}, 1000);
                    }else if(dataResult.statusCode==201){
                        $("#sendMailPass").prop('disabled', false);
                        alert("Wystąpił błąd");
                    }
                }
            });
        }
    });

});