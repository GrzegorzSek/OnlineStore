//DELETE USER SCRIPT
$(document).ready(function(){
    var id;
    $(document).on('click','button[data-role=delete]', function(){
        id = $(this).data('id');
        $('#userId').val(id);        
        //alert($(this).data('id'));              
    });
    $('#deleteUser').on('click', function() {			
        $.ajax({
            url: "scripts/deleteuser.php",
            type: "POST",
            data: {
                id: id,
            },
            cache: false,
            success: function(dataResult){
                var msg = "";
                var dataResult = JSON.parse(dataResult);
                if(dataResult.statusCode==200){
                    $("#deleteUser").prop('disabled', true);
                    var msg = "Użytkownik został usunięty!";
                    $("#messageDeleteUser").html(msg);
                    $("#usersData").load(location.href+" #usersData>*","");//odświeża okno z danymi
                    setTimeout(function() {$('#deleteUserModal').modal('hide');}, 1000);
                    setTimeout(function() {$("#deleteUser").prop('disabled', false);}, 1000);
                    setTimeout(function() {$("#messageDeleteUser").hide();}, 1000);
                }
                else if(dataResult.statusCode==201){
                    alert("Error occured!");
                }		
            }
        });					
    });
});