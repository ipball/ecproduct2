var showAlert = function(type, title, text = '')
{
    swal({
        type: type,
        title: title,
        text: text,
        allowOutsideClick: false,
      })
}

var timeAlert = function(type, title)
{
    swal({
        // position: 'top-end',
        type: type,
        title: title,
        showConfirmButton: false,
        timer: 1500
      })
}