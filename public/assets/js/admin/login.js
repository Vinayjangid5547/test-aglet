$(document).on('submit', '#login-form', function (e) {
    e.preventDefault();
    var formData = new FormData(this);
    var save_button = $('.btn-primary');
    var url = "admin/login-validate";
    var form_trigger = $('#login-form');
    var response = form_ajax(url, formData, form_trigger, save_button, 'post', 'Login');
})