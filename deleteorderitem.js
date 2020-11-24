//Skrypt do zamówienia w modal'u
$(document).ready(function(){
    var OrderID;
    $(document).on('click','button[data-role=adminOrderContent]', function(){
        orderID = $(this).data('id');       
        //alert($(this).data('id'));       
        $.ajax({
            url: "scripts/fetchadminordercontent.php",
            type: "POST",
            data: {
                orderID: orderID
            },
            success : function(data){
            $('.fetchedOrderData').html(data);//wyświetla dane pobrane z BD
            }
        });				       
    });
    $(document).on('click','button[data-role=deleteOrderItem]', function(){
        var itemID = $(this).data('id');       
        // alert(itemID); 
        // alert(orderID);     
        $.ajax({
            url: "scripts/admindeleteorderitem.php",
            type: "POST",
            data: {
                orderID: orderID,
                itemID: itemID
            },
            success : function(data){
                $("#orders").load(location.href+" #orders>*","");
                $(".tr"+itemID).hide();
                alert("POSZŁO");
            }
        });					       
    }); 	
});