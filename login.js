$(document).ready(function(){

    $("#but_submit").click(function(){
        var email = $("#email").val().trim();
        var password = $("#password").val().trim();

        if( email != "" && password != "" ){
            $.ajax({
                url:'scripts/checkuser.php',
                type:'post',
                data:{email:email, password:password},
                success:function(response){
                    var msg = "";
                    if(response == 1){
                        window.location = "dashboard.php";
                    }else{
                        msg = "Błędny email lub hasło!";
                    }
                    $("#message").html(msg);
                }
            });
        }
    });

});
