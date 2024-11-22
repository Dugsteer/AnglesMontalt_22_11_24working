<?php
// Replace with your actual secret key from Google reCAPTCHA v3
$secretKey = '6Lfrd28qAAAAAP73jjHCEbbGLsndOF0JKdRHnmnF';
$responseMessage = '';

// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Verify reCAPTCHA response
    if (isset($_POST['g-recaptcha-response'])) {
        $recaptchaResponse = $_POST['g-recaptcha-response'];

        // Make a request to the Google reCAPTCHA API
        $response = file_get_contents(
            "https://www.google.com/recaptcha/api/siteverify?secret={$secretKey}&response={$recaptchaResponse}&remoteip=" . $_SERVER['REMOTE_ADDR']
        );

        // Decode JSON response
        $responseKeys = json_decode($response, true);

        // Check if reCAPTCHA is successful and score is acceptable
        if ($responseKeys['success'] && $responseKeys['score'] >= 0.5) {
            $responseMessage = 'reCAPTCHA verification successful. Form is submitted.';
        } else {
            $responseMessage = 'reCAPTCHA verification failed. Please try again.';
        }
    } else {
        $responseMessage = 'reCAPTCHA response is missing.';
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>reCAPTCHA v3 Test</title>
    <!-- Include reCAPTCHA v3 JavaScript API -->
    <script src="https://www.google.com/recaptcha/api.js?render=6Lfrd28qAAAAAP73jjHCEbbGLsndOF0JKdRHnmnF"></script>
</head>

<body>
    <h1>Test Google reCAPTCHA v3</h1>

    <?php if ($responseMessage): ?>
    <p><?php echo htmlspecialchars($responseMessage); ?></p>
    <?php endif; ?>

    <form id="demo-form" method="POST" action="recaptcha_test_v3.php">
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" id="name" name="name" required>
        </div>

        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" id="email" name="email" required>
        </div>

        <!-- Hidden field to store the reCAPTCHA token -->
        <input type="hidden" id="g-recaptcha-response" name="g-recaptcha-response">

        <button type="submit">Submit</button>
    </form>

    <script>
    // Execute reCAPTCHA v3 and set the token
    grecaptcha.ready(function() {
        grecaptcha.execute('6Lfrd28qAAAAAP73jjHCEbbGLsndOF0JKdRHnmnF', { // Correct site key
            action: 'submit'
        }).then(function(token) {
            // Insert the token into the hidden input field
            document.getElementById('g-recaptcha-response').value = token;
        });
    });
    </script>
</body>

</html>
