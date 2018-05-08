$(function () {
    /* handle event page */
    $('body').on('click', '.order-save', function (e) {
        e.preventDefault();                

        $('#orderSave').submit();
    });

    /* handle validate */
    $('#orderSave').validate({
        submitHandler: function (form) {
            form.submit();
        },
        rules: {
            name: {
                required: true                
            },
            tel: {
                required: true
            },
            email: {
                required: true,
                email: true
            },
            address: {
                required: true
            },
            district: {
                required: true
            },
            province: {
                required: true
            },
            postcode: {
                required: true
            }
        },
        messages: {
        },
        errorElement: 'span',
        errorPlacement: function (error, element) {
            error.addClass("error-block");
            error.addClass("invalid-feedback");
            if (element.prop("type") === "checkbox") {
                error.insertAfter(element.parent("label"));
            } else if (element.parent('.input-group').length) {
                error.insertAfter(element.parent()); /* radio checkbox? */
            } else if (element.hasClass('select2')) {
                error.insertAfter(element.next('span')); /* select2 */
            } else {
                error.insertAfter(element);
            }
        },
        highlight: function (element, errorClass, validClass) {
            $(element).parents('.form-group').addClass('has-error').removeClass('has-success');
            $(element).addClass('is-invalid').removeClass('is-valid');
        },
        unhighlight: function (element, errorClass, validClass) {
            $(element).parents('.form-group').addClass('has-success').removeClass('has-error');
            $(element).addClass('is-valid').removeClass('is-invalid');
        }
    });
});