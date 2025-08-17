$('.toggle-password').on('click', function () {
    // console.log('sdkfuh');
    var passwordInput = $('#password');
    var icon = $('#togglePasswordIcon');
    var isPassword = passwordInput.attr('type') === 'password';

    passwordInput.attr('type', isPassword ? 'text' : 'password');
    icon.toggleClass('fa-eye fa-eye-slash');
});

function form_ajax(url, formData, form_trigger, save_button, form_type = 'post', button_text = 'Submit') {
    var before_button_text = 'Submiting...'
    if(button_text == 'Login'){
        before_button_text = 'Please Wait...'
    } else if(button_text == 'Update'){
        before_button_text = 'Updating...'
    }

    $.ajax({
        url: url,
        type: form_type,
        data: formData,
        dataType: 'json',
        processData: false,
        contentType: false,
        beforeSend: function () {
            save_button.prop('disabled', true).html(before_button_text);
        },
        success: (response) => {
            $('html, body').animate({ scrollTop: 0 }, 150);
            save_button.prop('disabled', false).html(button_text);
            if (response.status == true) {
                form_trigger.trigger('reset');
            }

            $('.alert').removeClass('alert-primary alert-danger');
            $('.alert').addClass(response.msg_class).removeAttr('style');
            $('.alert').find('.alert-msg').html(response.message);
            $('.alert').delay(2000).fadeOut(200, function () {
                $(this).removeClass('alert-primary alert-danger');
            });
            if(response.redirect_url){
                window.location.href = response.redirect_url;
            }
        },
        error: (json) => {
            console.log(json);
        }
    });
}