<?php
	include("config.php");
?>
<?php
    if(!isset($_SESSION['userid'])){
        header('Location: index.php');
    }
?>
<!doctype html>
<html lang="pl">
	<head>
		<?php include 'head.php';?>
        <script>
            $(document).ready(function() {
                $('#sendMail').on('click', function() {
                    var usernameContact = $('#usernameContact').val();
                    var emailContact = $('#emailContact').val();
                    var subjectContact = $('#subjectContact').val();
                    var messageContact = $('#messageContact').val();
                    if(usernameContact!="" && emailContact!="" && subjectContact!="" && messageContact!=""){
                        $("#sendMail").prop('disabled', true);
                        $.ajax({
                            url: "scripts/sendcontact.php",
                            type: "POST",
                            data: {
                                usernameContact: usernameContact,
                                emailContact: emailContact,
                                subjectContact: subjectContact,
                                messageContact: messageContact,
                            },
                            cache: false,
                            success:function(data){
                                alert("Mail został wysłany");
                                $("#sendMail").prop('disabled', false);
                            },
                            error:function (){
                                alert("error");
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
			<div class="break"></div>
			<div class="container">
                <div class="row justify-content-center">
                    <div class="col-9 mb-5">
                    <p class="text-justify">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque dolor turpis, cursus at metus a, luctus iaculis ante. Integer rutrum orci non turpis rhoncus condimentum. Nulla eget purus augue. Etiam tellus lorem, placerat in quam nec, fermentum posuere risus. Duis consequat diam eget mi ultrices volutpat. Maecenas nec imperdiet justo, ac rutrum felis. Nunc tincidunt magna ac nisl vehicula egestas. Fusce faucibus euismod ante, ac iaculis felis venenatis a. Aenean bibendum massa pellentesque sapien convallis, a porttitor odio viverra. Aliquam imperdiet ex purus, id placerat tortor vestibulum quis. Sed tempus ultricies ultricies. Donec leo lorem, volutpat ac est vitae, tristique viverra sem. Maecenas tempor dapibus ex nec maximus.
                    </p>
                    </div>
                    <div class="col-sm-6">
                        <form>
                            <div class="row">
                                <div class="form-group col-md-6">
                                    <label for="username">Imię i nazwisko</label>
                                    <input type="text" class="form-control" id="usernameContact" placeholder="Jan Kowalski" required>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="emailAdress">Email</label>
                                    <input type="email" class="form-control" id="emailContact" placeholder="kowalski@mail.com" required>
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-12">
                                    <label for="subject">Temat</label>
                                    <input type="text" class="form-control" id="subjectContact" placeholder="Temat wiadomości" required>
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-12">
                                    <label for="message">Wiadomość</label>
                                    <textarea class="form-control" id="messageContact" rows="5" placeholder="Treść wiadomości..." required></textarea>
                                </div>
                            </div>
                            <button type="button" class="btn btn-success float-right" id="sendMail">Wyślij</button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="break"></div>
		</section>
	</main>		
  </body>
  <footer class="page-footer pt-4">
	<?php include 'foot.php';?>
  </footer>
</html>

<?php include 'modals/loginform.php';?>
<?php include 'modals/signupform.php';?>

