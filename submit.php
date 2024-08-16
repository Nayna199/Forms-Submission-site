// Your form processing logic here

if ($form_submission_is_successful) {
    header("Location: thankyou.html");
    exit;
} else {
    echo "ERROR: Form submission failed.";
}
