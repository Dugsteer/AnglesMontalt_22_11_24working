<?php
// Start output buffering to prevent any output before header redirection
ob_start();

// Get the REQUEST_URI and sanitize it
if (isset($_SERVER['REQUEST_URI'])) {
    $uri = $_SERVER['REQUEST_URI'];
    // Remove query strings if any (like ?key=value)
    $uri = strtok($uri, '?');
} else {
    die('REQUEST_URI is not set.');
}

// Parse the URL to get the language subdirectory
$uri_parts = explode('/', trim($uri, '/'));

// Define allowed languages
$allowed_languages = ['ca', 'es', 'en'];

// If the first part of the URI is not a valid language, redirect to /ca/
if (!empty($uri_parts[0]) && !in_array($uri_parts[0], $allowed_languages)) {
    // Redirect to /ca/
    header("Location: /ca/");
    exit();
}

// Default language (fallback to Catalan)
$language = 'ca';

// If the first part of the URI matches one of the allowed languages, use it
if (!empty($uri_parts[0]) && in_array($uri_parts[0], $allowed_languages)) {
    $language = $uri_parts[0];
}

// End buffering and send the headers
ob_end_flush();

// HTML structure begins here
?>
<?php

include "db_worksheets.php";

global $connection;

// Fetch the current view count
$query = "SELECT * FROM count";
$select_count = mysqli_query($connection, $query);

while ($row = mysqli_fetch_assoc($select_count)) {
    $views = $row['views'];
}

// Update the view count
$newquery = "UPDATE count SET views = " . ($views + 1);
$update_posts = mysqli_query($connection, $newquery);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description"
        content="Anglès Montalt offers personalized English classes in Sant Vicenç de Montalt. Learn English with a qualified teacher with 15 years of experience.">
    <meta name="google-site-verification" content="h_wy23u9876YIf0GGBA0mJ83MCD3_PTZRG-ypgUd4yY" />
    <script src="https://www.google.com/recaptcha/enterprise.js?render=6Lfrd28qAAAAAPhETCEDfQZvnt-QuyyPMSmqyIA0">
    </script>

    <meta property="og:title" content="Anglès Montalt | English Classes in Sant Vicenç de Montalt" />
    <meta property="og:description" content="Learn English with a qualified teacher offering personalized classes." />
    <meta property="og:image" content="https://anglesmontalt.com/img/Santvi_Platja.jpg" />
    <meta property="og:url" content="https://anglesmontalt.com/en/" />

    <title>Anglès Montalt | English Classes in Sant Vicenç de Montalt | Qualified English Teacher</title>

    <?php
        // Detect the language (adjust logic based on your URL structure)
        $lang = 'ca'; // Default to Catalan
        if (strpos($_SERVER['REQUEST_URI'], '/en/') !== false) {
            $lang = 'en';
        } elseif (strpos($_SERVER['REQUEST_URI'], '/es/') !== false) {
            $lang = 'es';
        }

        // Set the canonical URL based on detected language
        echo '<link rel="canonical" href="https://anglesmontalt.com/' . $lang . '/" />';
    ?>

    <link rel="alternate" href="https://anglesmontalt.com/en/" hreflang="en" />
    <link rel="alternate" href="https://anglesmontalt.com/es/" hreflang="es" />
    <link rel="alternate" href="https://anglesmontalt.com/ca/" hreflang="ca" />
    <link rel="icon" type="image/png" href="/img/favicon.png" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css"
        integrity="sha256-h20CPZ0QyXlBuAw7A+KluUYx/3pK+c7lYEpqLTlxjYQ=" crossorigin="anonymous" />
    <link rel="stylesheet" href="/newstyles.css" />
</head>

<body>
    <div class="wrapper">

        <?php

// Include the corresponding language file
switch ($language) {
    case 'ca':
        include "includes/cat.php";
        break;

    case 'es':
        include "includes/esp.php";
        break;

    case 'en':
        include "includes/eng.php";
        break;

    default:
        include "includes/cat.php"; // Default fallback
        break;
}
?>





    </div>


    <script>
    var img = new Image();
    img.src = "/img/Santvi_Platja.jpg"; // Path to your background image

    const top1 = document.getElementById("top1"),
        top2 = document.getElementById("top2");

    function whoIs() {
        top2.classList.remove("left"),
            top2.classList.remove("right"),
            top2.classList.add("middle"),
            top1.classList.add("right");
    }

    function inTouch() {
        top1.classList.remove("left"),
            top1.classList.remove("right"),
            top1.classList.add("middle"),
            top2.classList.add("right");
    }
    </script>
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "EducationalOrganization",
        "name": "Anglès Montalt",
        "description": "Personalized English classes in Sant Vicenç de Montalt with a qualified teacher.",
        "url": "https://example.com/",
        "logo": "https://example.com/img/logo.png",
        "address": {
            "@type": "PostalAddress",
            "streetAddress": "Carrer Costa Daurada 5",
            "addressLocality": "Sant Vicenç de Montalt",
            "addressRegion": "Barcelona",
            "postalCode": "08394",
            "addressCountry": "ES"
        },
        "telephone": "+34666068734"
    }
    </script>

</body>

</html>
