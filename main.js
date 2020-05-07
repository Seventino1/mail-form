jQuery(document).ready(function($) {
    var form = $('#contactForm');
    var action = form.attr('action');

    form.on('submit', function(event) {

    var formData = {
        name: $('#name').val(),
        phone: $('#phone').val()
    };
    $.ajax({
        url: action,
        type: 'POST',
        data: formData,
        error: function (request, txtstatus, errorThrown) {
            console.log(request);
            console.log(txtstatus);
            console.log(errorThrown);
        },
        success: function () {
            form.html("Ваша заявка отправлена.");
        }
    });
        event.preventDefault();
    });

});
