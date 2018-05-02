$(function(){
    $('body').on('click', '.add-item', function(e){
        e.preventDefault();
        $('#cartOrder').submit();
    });
});