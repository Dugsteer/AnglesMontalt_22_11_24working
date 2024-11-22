<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Your Google reCAPTCHA secret key
    $secret = '6Lfrd28qAAAAAPhETCEDfQZvnt-QuyyPMSmqyIA0';

    // Recaptcha response from the form
    $recaptcha_response = $_POST['g-recaptcha-response'];

    // Make and send the POST request to Google reCAPTCHA server
    $url = "https://www.google.com/recaptcha/api/siteverify";
    $data = array(
        'secret' => $secret,
        'response' => $recaptcha_response,
        'remoteip' => $_SERVER['REMOTE_ADDR'] // Optional but adds security
    );

    $options = array(
        'http' => array (
          'method' => 'POST',
          'header' => "Content-Type: application/x-www-form-urlencoded\r\n",
          'content' => http_build_query($data)
        )
    );

    $context = stream_context_create($options);
    $verify = file_get_contents($url, false, $context);
    $captcha_success = json_decode($verify);

    // Check if the reCAPTCHA is successful
    if ($captcha_success->success) {
        // reCAPTCHA passed - proceed with form processing

        // Retrieve other form data, e.g., name, message, etc.
        $name = $_POST['name']; // Adjust this based on your form fields
        $message = $_POST['message']; // Adjust this based on your form fields

  if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Collect and sanitize the form data
        $name = filter_var($_POST['name'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
        $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
        $message = filter_var($_POST['message'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);

        // Email details
        $to = "anglesmontalt@gmail.com";
        $subject = "Contact Form Submission from $name";
        $body = "You have received a new message from $name.\n\n".
                "Here is the message:\n$message";

        // Headers
        $headers = "From: $email";

        // Send email
        if (mail($to, $subject, $body, $headers)) {
            echo "<p style='color: green;'>Message successfully sent.</p>";
        } else {
            echo "<p style='color: red;'>Message sending failed. Please try again.</p>";
        }
    }


        echo "Form successfully submitted!";

    } else {
        // reCAPTCHA failed
        echo "reCAPTCHA verification failed. Please try again.";
    }
}
?>
