//EDIT SCRIPT
$(document).ready(function(){
    $(document).on('click','button[data-role=update]',function(){
        //alert($(this).data('id')); //wyświetla data-id przecisku
        var id = $(this).data('id');
        var name = $('#'+id).children('td[data-target=name]').text();
        var surname = $('#'+id).children('td[data-target=surname]').text();
        var email = $('#'+id).children('td[data-target=email]').text();
        var phonenumber = $('#'+id).children('td[data-target=phonenumber]').text();
        var address = $('#'+id).children('td[data-target=address]').text();
        var address2 = $('#'+id).children('td[data-target=address2]').text();
        var city = $('#'+id).children('td[data-target=city]').text();
        var zipCode = $('#'+id).children('td[data-target=zipCode]').text();
        var voivodeship = $('#'+id).children('td[data-target=voivodeship]').text();

        $('#userId').val(id); //ustawia wartosci w formularzu
        $('#name').val(name);
        $('#surname').val(surname);
        $('#email').val(email);
        $('#phonenumber').val(phonenumber);
        $('#address').val(address);
        $('#address2').val(address2);
        $('#city').val(city);
        $('#zipCode').val(zipCode);
        $('#voivodeship').val(voivodeship);                           
    });
    $('#update').on('click', function() {
        var id = $('#userId').val();
        var name = $('#name').val();
        var surname = $('#surname').val();
        var email = $('#email').val();
        var phonenumber = $('#phonenumber').val();
        var address = $('#address').val();
        var address2 = $('#address2').val();
        var city = $('#city').val();
        var zipCode = $('#zipCode').val();
        var voivodeship = $('#voivodeship').val();
        if(name!="" && surname!="" && email!="" && phonenumber!="" && address!="" && address2!="" && city!="" && zipCode!="" && voivodeship!=""){
            $.ajax({
                url: "scripts/edituser.php",
                type: "POST",
                data: {
                    id: id,
                    name: name,
                    surname: surname,
                    email: email,
                    phonenumber: phonenumber,
                    address: address,
                    address2: address2,
                    city: city,			
                    zipCode: zipCode,
                    voivodeship: voivodeship,
                },
                cache: false,
                success: function(dataResult){
                    var dataResult = JSON.parse(dataResult);
                    if(dataResult.statusCode==200){
                        $(".allGood").css('display', 'block');
                        setTimeout(function() {$(".allGood").css('display', 'none');}, 2000);
                        $("#update").prop('disabled', true);
                        $("#usersData").load(location.href+" #usersData>*","");
                        setTimeout(function() {$('#editUserModal').modal('hide');}, 2000);
                        setTimeout(function() {$("#update").prop('disabled', false);}, 2000);
                        setTimeout(function() {$("#messageEditUser").hide();}, 2000); 
                    }
                    else if(dataResult.statusCode==201){
                        $(".somethingWentWrong").css('display', 'block');
                        setTimeout(function() {$(".somethingWentWrong").css('display', 'none');}, 2000);                    
                    }
                }
            });
        }
        else{
            $(".almostGood").css('display', 'block');
            setTimeout(function() {$(".almostGood").css('display', 'none');}, 2000);
        }
    });
});