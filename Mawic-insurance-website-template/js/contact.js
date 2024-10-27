$(document).ready(function () {
    $('#contactForm').on('submit', function (e) {
        e.preventDefault(); // Prevent default form submission

        // Collect form data
        var formData = $(this).serialize();

        // Send form data via AJAX
        $.ajax({
            type: 'POST',
            url: '/contact.php', // The PHP file to process the form data
            data: formData,
            success: function (response) {
                $('#formMessages').html('<p>' + response + '</p>'); // Display response message
            },
            error: function () {
                $('#formMessages').html('<p>There was an error sending your message. Please try again later.</p>');
            }
        });
    });
});
