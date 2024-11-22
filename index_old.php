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

    <title>Anglès Montalt | English Classes in Sant Vicenç de Montalt | Qualified English Teacher</title>
    <link rel="icon" type="image/png" href="img/favicon.png" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css"
        integrity="sha256-h20CPZ0QyXlBuAw7A+KluUYx/3pK+c7lYEpqLTlxjYQ=" crossorigin="anonymous" />
    <link rel="stylesheet" href="newstyles.css" />
</head>

<body>
    <div class="wrapper">
        <?php

$allowed_languages = ['cat.php', 'esp.php', 'eng.php'];

// Check if the 'language' parameter is valid
if (isset($_GET['language']) && in_array($_GET['language'], $allowed_languages)) {
    $source = $_GET['language'];
} else {
    $source = 'cat.php'; // Default language
}

// Switch case to include the correct language file
switch ($source) {
    case 'cat.php':
        include "includes/cat.php";
        break;

    case 'esp.php':
        include "includes/esp.php";
        break;

    case 'eng.php':
        include "includes/eng.php";
        break;

    default:
        include "includes/cat.php"; // Default fallback
}

?>
    </div>


    <script>
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
