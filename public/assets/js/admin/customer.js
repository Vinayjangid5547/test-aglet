$(document).on('submit', '#add-customer-form', function (e) {
    e.preventDefault();
    var formData = new FormData(this);
    var save_button = $('.save-btn');
    var url = "insert-customer";
    var form_trigger = $('#add-customer-form');
    form_ajax(url, formData, form_trigger, save_button);
})