$(function(){
    $('body').on('click', '.add-item', function(e){
        e.preventDefault();
        var product_id = $(this).attr('data-url');
        $.ajaxSetup({
            headers: {
              'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $.ajax({
            type: 'post',
            url: APP_URL + '/cart/add',
            data: {
                product_id: product_id,
                quantity: 1            
            },
            success: function() {
                window.location.href = APP_URL + '/cart';
            }
          });
          return false;
    });
});