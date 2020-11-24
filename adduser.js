//ADD USER SCRIPT
$(document).ready(function() {
    $('#butsave').on('click', function() {
        var name = $('#addName').val();
        var surname = $('#addSurname').val();
        var email = $('#addEmail').val();
        var password = $('#addPassword').val();
        var phonenumber = $('#addPhonenumber').val();
        var address = $('#addAddress').val();
        var address2 = $('#addAddress2').val();
        var city = $('#addCity').val();
        var zipCode = $('#addZipCode').val();
        var voivodeship = $('#addVoivodeship').val();
        if(name!="" && surname!="" && email!="" && password!="" && phonenumber!="" && address!="" && address2!="" && city!="" && zipCode!=""){
            $.ajax({
                url: "scripts/registersave.php",
                type: "POST",
                data: {
                    name: name,
                    surname: surname,
                    email: email,
                    password: password,
                    phonenumber: phonenumber,
                    address: address,
                    address2: address2,
                    city: city,			
                    zipCode: zipCode,
                    voivodeship: voivodeship,
                },
                cache: false,
                success: function(dataResult){
                    var msg = "";
                    var dataResult = JSON.parse(dataResult);
                    if(dataResult.statusCode==200){
                        $("#butsave").prop('disabled', true);
                        var msg = "Użytkownik został dodany!";
                        $("#messageAddUser").html(msg);
                        $("#usersData").load(location.href+" #usersData>*","");
                        setTimeout(function() {$('#addUserModal').modal('hide');}, 1000);
                        setTimeout(function() {$("#butsave").prop('disabled', false);}, 1000);  
                        setTimeout(function() {$("#messageAddUser").hide();}, 1000);          
                    }
                    else if(dataResult.statusCode==201){
                        alert("Error occured!");
                    }
                    
                }
            });
        }
        else{
            alert('Uzupełnij wszystkie POLAPOLA!');
        }
    });
});
