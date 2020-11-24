//Skrypt do edycji zamówienia w modal'u
$(document).ready(function(){
    var OrderID;
    $(document).on('click','button[data-role=updateOrder]', function(){
        orderID = $(this).data('id');       
        //alert($(this).data('id'));       
        $.ajax({
            url: "scripts/fetchadminorderdata.php",
            type: "POST",
            data: {
                orderID: orderID
            },
            success : function(data){
            $('.orderData').html(data);//wyświetla dane pobrane z BD
            }
        });				       
    });	
    $(document).on('click','button[data-role=saveUpdatedOrderData]', function(){  
        var shippingMethod = $('#orderShippingMethod').val();
        var amountToPay = $('#orderAmountToPay').val();
        var phoneNumber = $('#orderPhoneNumber').val();
        var address = $('#orderAddress').val();
        var address2 = $('#orderAddress2').val();
        var city = $('#orderCity').val();
        var zipCode = $('#orderZipCode').val();
        var voivodeship = $('#orderVoivodeship').val(); 
        var orderStatus = $('#orderStatus').val();
        if(shippingMethod!="" && amountToPay!="" && phoneNumber!="" && address!="" && address2!="" && city!="" && zipCode!="" && voivodeship!="" && orderStatus!=""){
            $.ajax({
                url: "scripts/saveadminorderdata.php",
                type: "POST",
                data: {
                    orderID: orderID,
                    shippingMethod: shippingMethod,
                    phoneNumber: phoneNumber,
                    address: address,
                    address2: address2,
                    city: city,
                    zipCode: zipCode,
                    voivodeship: voivodeship,
                    amountToPay: amountToPay,
                    orderStatus: orderStatus
                },
                success: function(dataResult){
                    var dataResult = JSON.parse(dataResult);
                    if(dataResult.statusCode==200){
                        $("#saveUpdatedOrderData").prop('disabled', true);
                        setTimeout(function() {$('#updateOrder').modal('hide');}, 1000);
                        setTimeout(function() {$("#saveUpdatedOrderData").prop('disabled', false);}, 1000);
                        $("#orders").load(location.href+" #orders>*","");
                    }
                    else if(dataResult.statusCode==201){
                        alert("Error occured!");
                    }		
                }	
            });	
        }else{
            alert("Uzupełnij wszystkie zamówienie!");
        }			       
    });
});