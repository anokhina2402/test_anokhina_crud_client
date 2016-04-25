
$(document).ready(function() {
    $('#addForm').validate({
        ignore: [],
        debug: false,
        rules: {

            fio: {
                required: true,
            },

            email: {
                required: true,
                email: true
            },
            phone: {
                required: true,
            },
            birthday: {
                date: true,
            },

        },
        highlight: function(element) {
            $(element).closest('.control-group').removeClass('success').addClass('error');
        },
    });



});
