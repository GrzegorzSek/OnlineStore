<?php
include "config.php";

// Check user login or not
if(!isset($_SESSION['userid'])){
    header('Location: index.php');
}

?>
<!doctype html>
<html lang="pl">
<head>
    <?php include 'head.php';?>
    <!--<script>
    //SPRAWDZA PUSTE POLA
    (function() {
    'use strict';
    window.addEventListener('load', function() {
        // Fetch all the forms we want to apply custom Bootstrap validation styles to
        var forms = document.getElementsByClassName('needs-validation');
        // Loop over them and prevent submission
        var validation = Array.prototype.filter.call(forms, function(form) {
        form.addEventListener('butsave', function(event) {
            if (form.checkValidity() === false) {
            event.preventDefault();
            event.stopPropagation();
            }
            form.classList.add('was-validated');
        }, false);
        });
    }, false);
    })();
    </script>-->

    <script>
        //LOGIN SCRIPT
        $(document).ready(function(){

            $("#but_submit").click(function(){
                var email = $("#email").val().trim();
                var password = $("#password").val().trim();

                if( email != "" && password != "" ){
                    $.ajax({
                        url:'checkuser.php',
                        type:'post',
                        data:{email:email,password:password},
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
    </script>

    <script>
        //REGISTER SCRIPT
        $(document).ready(function() {
            $('#butsave').on('click', function() {
                var name = $('#name').val();
                var surname = $('#surname').val();
                var emailSignUp = $('#emailSignUp').val();
                var password = $('#password').val();
                var phonenumber = $('#phonenumber').val();
                var address = $('#address').val();
                var address2 = $('#address2').val();
                var city = $('#city').val();
                var zipCode = $('#zipCode').val();
                var inputVoivodeship = $('#inputVoivodeship').val();
                if(name!="" && surname!="" && emailSignUp!="" && password!="" && phonenumber!="" && address!="" && address2!="" && city!="" && zipCode!=""){
                    $.ajax({
                        url: "registersave.php",
                        type: "POST",
                        data: {
                            name: name,
                            surname: surname,
                            email: emailSignUp,
                            password: password,
                            phonenumber: phonenumber,
                            address: address,
                            address2: address2,
                            city: city,			
                            zipCode: zipCode,
                            voivodeship: inputVoivodeship,
                        },
                        cache: false,
                        success: function(dataResult){
                            var msg = "";
                            var dataResult = JSON.parse(dataResult);
                            if(dataResult.statusCode==200){
                                var msg = "Udało Ci się zarejestrować!";
                                $("#messageSignUp").html(msg);
                                setTimeout(function() {$('#signUp').modal('hide');}, 2000);
                            }
                            else if(dataResult.statusCode==201){
                            alert("Error occured!");
                            }
                            
                        }
                    });
                }
                else{
                    alert('Uzupełnij wszystkie pola!');
                }
            });
        });
    </script>
</head>
<body>
    <header>
        <?php include "header.php" ?>
    </header>
<main>
    <section class="homePage">
        <?php include 'carousel.php';?>
        <div class="break"></div>
        <div class="container"> 
            <div class="row">
                <!-- Here photos-->					
                <div class="col-sm-6 col-md-4">
                    <figure> 
                        <a href="productdetails.php"><img src="img/marynarka.jpg" alt="dress2"></a>
                    </figure>
                </div>
                <div class="col-sm-6 col-md-4">
                    <figure>
                        <a href="#"><img src="img/marynarka.jpg" alt="dress3"></a>
                    </figure>
                </div>
                <div class="col-sm-6 col-md-4">
                    <figure>
                        <a href="#"><img src="img/marynarka.jpg" alt="dress4"></a>
                    </figure>
                </div>	
                <div class="col-sm-6 col-md-4">
                    <figure>
                        <a href="#"><img src="img/marynarka.jpg" alt="dress2"></a>
                    </figure>
                </div>
                <div class="col-sm-6 col-md-4">
                    <figure>
                        <a href="#"><img src="img/marynarka.jpg" alt="dress3"></a>
                    </figure>
                </div>
                <div class="col-sm-6 col-md-4">
                    <figure>
                        <a href="#"><img src="img/marynarka.jpg" alt="dress4"></a>
                    </figure>
                </div>
                <div class="col-sm-6 col-md-4">
                    <figure>
                        <a href="#"><img src="img/marynarka.jpg" alt="dress2"></a>
                    </figure>
                </div>
                <div class="col-sm-6 col-md-4">
                    <figure>
                        <a href="#"><img src="img/marynarka.jpg" alt="dress3"></a>
                    </figure>
                </div>
                <div class="col-sm-6 col-md-4">
                    <figure>
                        <a href="#"><img src="img/marynarka.jpg" alt="dress4"></a>
                    </figure>
                </div>				
            </div>
        </div>
    </section>
</main>		
</body>
<footer class="page-footer pt-4">
<?php include 'foot.php';?>
</footer>
</html>

<?php include 'loginform.php';?>
<?php include 'signupform.php';?>

