document.addEventListener('DOMContentLoaded', function () {
    const signupForm = document.getElementById('signup-form');
    const fnameError = document.getElementById('fname-error');
    const fullnameError = document.getElementById('fullname-error');
    const femailError = document.getElementById('femail-error');
    const fphoneError = document.getElementById('fphone-error');
    const fpassError = document.getElementById('fpass-error');
    const fcpassError = document.getElementById('fcpass-error');

    signupForm.addEventListener('submit', function (event) {
        if (!validateForm()) {
            event.preventDefault();
        }
    });

    function validateForm() {
        let isValid = true;

        // Clear previous errors
        fnameError.textContent = '';
        fullnameError.textContent = '';
        femailError.textContent = '';
        fphoneError.textContent = '';
        fpassError.textContent = '';
        fcpassError.textContent = '';

        const fname = signupForm.elements.fname.value.trim();
        const fullname = signupForm.elements.fullname.value.trim();
        const femail = signupForm.elements.femail.value.trim();
        const fphone = signupForm.elements.fphone.value.trim();
        const fpass = signupForm.elements.fpass.value;
        const fcpass = signupForm.elements.fcpass.value;

        if (!fname) {
            fnameError.textContent = 'Name is required';
            isValid = false;
        }

        if (!fullname) {
            fullnameError.textContent = 'Full Name is required';
            isValid = false;
        }

        if (!femail) {
            femailError.textContent = 'Email is required';
            isValid = false;
        } else if (!isValidEmail(femail)) {
            femailError.textContent = 'Please enter a valid email address';
            isValid = false;
        }

        if (!fphone) {
            fphoneError.textContent = 'Phone number is required';
            isValid = false;
        }

        if (!fpass) {
            fpassError.textContent = 'Password is required';
            isValid = false;
        }

        if (fpass !== fcpass) {
            fcpassError.textContent = 'Passwords do not match';
            isValid = false;
        }

        return isValid;
    }

    function isValidEmail(email) {
        const emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        return emailPattern.test(email);
    }
});
