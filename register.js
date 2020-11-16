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
                url: "scripts/registersave.php",
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
                        alert("Error!");
                    }
                    
                }
            });
        }
        else{
            alert('Uzupełnij wszystkie pola!');
        }
    });
});
