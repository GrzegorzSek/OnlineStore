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
                var dataResult = JSON.parse(dataResult);
                if(dataResult.statusCode==200){
                    $(".allGood").css('display', 'block');
                    setTimeout(function() {$(".allGood").css('display', 'none');}, 2000);
                    $("#deleteUser").prop('disabled', true);
                    $("#usersData").load(location.href+" #usersData>*","");//odświeża okno z danymi
                    setTimeout(function() {$('#deleteUserModal').modal('hide');}, 1000);
                    setTimeout(function() {$("#deleteUser").prop('disabled', false);}, 1000);
                    setTimeout(function() {$("#messageDeleteUser").hide();}, 1000);
                }
                else if(dataResult.statusCode==201){
                    $(".somethingWentWrong").css('display', 'block');
                    setTimeout(function() {$(".somethingWentWrong").css('display', 'none');}, 2000);
                }		
            }
        });					
    });
});