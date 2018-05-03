$(function(){
    $('body').on('click', '.add-item', function(e){
        e.preventDefault();
        var quantity = $('input[name=quantity]');
        if(quantity.val() < 1 || quantity.val() == ''){
            showAlert('error', 'โปรดระบุจำนวน');
            return false;
        }
        $('#cartOrder').submit();
    });
});