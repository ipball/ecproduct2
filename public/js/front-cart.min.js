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

    $('body').on('click', '.update-item', function(e){
        e.preventDefault();
        console.log('click');
        $(this).addClass('disabled');
        var qtyEmpty = false;
        $('.input-qty').each(function(){
            if($(this).val() < 1 || $(this).val() == ''){
                qtyEmpty = true;
            }
        });

        if(qtyEmpty){
            showAlert('error', 'โปรดระบุจำนวน');
            return false;
        }

        $('#cartUpdate').submit();
    });
});