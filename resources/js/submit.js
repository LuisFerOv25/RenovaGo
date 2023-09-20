$(document).ready(function() {
    $('.submit-prevent-form').on('submit', function() {
        $(this).find('input[type="submit"]').prop('disabled', true);
    });
});
