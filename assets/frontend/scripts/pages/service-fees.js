jQuery('.fee-checkbox').click(function() {
    var id = jQuery(this).attr('id');
    var checked = jQuery(this).prop('checked');    
    var value = jQuery('#price-' + id).html();
    var totalPrice = jQuery('#total_Price').html();

    value = value.replaceAll("$", "");
    var prices = value.split('/');
    var service_fee = prices[prices.length - 1];
    

    if (checked == true)
        totalPrice = Number(totalPrice) + Number(service_fee);
    else
        totalPrice = Number(totalPrice) - Number(service_fee);

    jQuery('#total_Price').html(totalPrice);    
});