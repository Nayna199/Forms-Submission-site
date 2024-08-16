document.addEventListener('DOMContentLoaded', function () {
    const questionnaireForm = document.getElementById('questionnaire-form');

    questionnaireForm.addEventListener('submit', function (event) {
        if (!validateForm()) {
            event.preventDefault();
        }
    });

    function validateForm() {
        // Your form validation logic here
        // Return true if form is valid, false otherwise
    }
});
