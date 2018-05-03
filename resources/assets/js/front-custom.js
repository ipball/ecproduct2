var showAlert = function(type, title, text = '')
{
    swal({
        type: type,
        title: title,
        text: text,
        allowOutsideClick: false,
      })
}