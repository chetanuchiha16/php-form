$(document).ready(function() {
    $('#registrationForm').on('submit', function(e) {
        let isValid = true;

        // Clear previous errors
        $('.error-msg').text('');
        $('input, select, textarea').removeClass('error');

        // Validation Logic
        function validateField(selector, message) {
            const field = $(selector);
            const value = field.val();
            if (!value || value.trim() === '') {
                field.addClass('error');
                field.next('.error-msg').text(message);
                isValid = false;
            }
        }

        validateField('#fullname', 'Full Name is required');
        validateField('#email', 'Email is required');
        validateField('#phone', 'Phone number is required');
        validateField('#dob', 'Date of Birth is required');
        validateField('#gender', 'Please select a gender');
        validateField('#address', 'Address is required');
        validateField('#course', 'Please select a position');

        // Email Format Validation
        const email = $('#email').val();
        const emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        if (email && !emailPattern.test(email)) {
             $('#email').addClass('error');
             $('#email').next('.error-msg').text('Invalid email format');
             isValid = false;
        }

        // Phone Format Validation (Simple)
        const phone = $('#phone').val();
        // Allow digits, spaces, plus, dashes
        const phonePattern = /^[+0-9\s-]{8,}$/;
        if (phone && !phonePattern.test(phone)) {
             $('#phone').addClass('error');
             $('#phone').next('.error-msg').text('Invalid phone number');
             isValid = false;
        }

        if (!isValid) {
            e.preventDefault(); // Stop submission if invalid
            // Shake animation for the button
            $('.submit-btn').addClass('shake');
            setTimeout(function() {
                $('.submit-btn').removeClass('shake');
            }, 500);
        }
    });

    // Remove error on input
    $('input, select, textarea').on('input change', function() {
        if ($(this).val().trim() !== '') {
            $(this).removeClass('error');
            $(this).next('.error-msg').text('');
        }
    });
});
