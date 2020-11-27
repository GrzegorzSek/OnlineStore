$(document).ready(function(){

    $("#but_submit").click(function(){
        var email = $("#email").val().trim();
        var password = $("#password").val().trim();

        if( email != "" && password != "" ){
            $.ajax({
                url:'scripts/checkuser.php',
                type:'post',
                data:{
                    email: email, 
                    password: password
                },
                success:function(response){
                    if(response == 1){
                        $(".allGood").css('display', 'block');
                        setTimeout(function() {window.location = "dashboard.php";}, 500);
                        setTimeout(function() {$(".allGood").css('display', 'none');}, 500);
                    }else{
                        $(".somethingWentWrong").css('display', 'block');
                        setTimeout(function() {$(".somethingWentWrong").css('display', 'none');}, 2000);
                    }
                }
            });
        }else{
            $(".almostGood").css('display', 'block');
            setTimeout(function() {$(".almostGood").css('display', 'none');}, 2000);
        }
    });

});
