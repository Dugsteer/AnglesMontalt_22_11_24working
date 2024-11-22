     <div class="whatsapp-icon">
         <a
             href="https://api.whatsapp.com/send?phone=34666068734&text=M%27agradaria%20saber%20m%C3%A9s%20sobre%20els%20classes%20d%27Angl%C3%A8s%21">
             <i class="fab fa-whatsapp"></i>
         </a>
     </div>

     <div class="flag-div">
         <div class="flag-div-inner">
             <a href="/en/">
                 <img src="/img/UnionFlag.png" alt="British flag used to change language" id="flag" />
             </a>
         </div>
         <div class="flag-div-inner">
             <a href="/es/">
                 <img src="/img/spain-flag.png" alt="Spanish flag used to change language" id="flag" />
             </a>
         </div>
         <div class="flag-div-inner">
             <a href="/ca/">
                 <img src="/img/catalan-flag.png" alt="Catalan flag used to change language" id="flag" />
             </a>
         </div>

     </div>

     <div class="header">
         <div class="header-left">
             <p>AM</p>
         </div>
         <div class="header-right">
             <p>Anglès Montalt</p>
         </div>
     </div>

     <div class="navcontent" id="navcontent">
         <ul>
             <li id="whose" onclick="whoIs();" class="underline">Hola!</li>
             <li class="underline"> <a class="nav-link" style="text-decoration: none" href="#cards">Aprendre Anglès</a>

             <li id="contact" onclick="inTouch();" class="underline contact-large">Més Informació</li>


             </li>


             <a href="https://anglesmontalt.com/dugaldsteer/indexnew.php">
                 <li class="underline">Dugaldsteer.com</li>
             </a>
         </ul>
         <!-- <span class="booky2text" id="web"
          >Un lloc web gratuït que estic programant per ajudar a professors i
          estudiants</span
        > -->
     </div>

     <div class="topsdiv">


         <div id="top2" class="top2" name="top2">
             <div class="piccy">
                 <img src="/img/DugWebpic.jpg" alt="Portrait of Dugald Steer, Qualified English Teacher">
             </div>

             <div class="intro-text-first">
                 <p>Dugald Steer, professor llicenciat en anglès molt appasionat a la llengua anglèsa.</p>
             </div>

             <div class="intro-text">
                 <h1>Anglès Montalt</h1>
                 <h2>Professor d'anglès amb experiència a Sant Vicenç de Montalt</h2>
                 <p>Tinc 16 anys d'experiencia amb tots els nivels. Tant si ets principiant, fes servir l'anglès a la
                     feina, necesites reforç escolar o tens un examen, t'ofereixo
                     un programa a mida que et garanteix els millors resultats i una experiencia encantadora.
                 </p>
             </div>
             <div class="extra-image" data-tooltip="T">
                 <img src="/img/OlogySeries.jpg" alt="Ology Books including Dragonology written by Dugald Steer">
             </div>
         </div>







         <div id="top1" class="top1" name="top1">

             <div class="left1">
                 <p>Vull Saber Més!</p>
                 <!-- <?php
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
    ?> -->
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
        // echo "reCAPTCHA verification failed. Please try again."; 
       echo "";

    }
}
?>

                 <form id="form-id" class="form-class" method="post" action="">

                     <div class="form-group">

                         <label for="Name" class="label">Nom</label>
                         <div class="input-group">
                             <input type="text" id="name" name="name" class="form-control" required>
                         </div>
                     </div>

                     <div class="form-group">
                         <label for="Email" class="label">Correu Electrònic</label>
                         <div class="input-group">
                             <input type="email" id="email" name="email" class="form-control" required>
                         </div>
                     </div>

                     <div class="form-group">
                         <label for="Message" class="label">Missatge</label>
                         <div class="input-group">
                             <textarea type="message" id="message" name="message" class="form-control" rows="6"
                                 maxlength="3000" required></textarea>
                         </div>
                     </div>

                     <div class="form-group">
                         <button type="submit" id="button" class="btn btn-primary btn-lg btn-block">Envia</button>
                     </div>
                 </form>

                 <blockquote>
                     <div class="first-quote">
                         "Parlar una altra llengua és tenir una segona ànima"—Carlemany
                     </div>
                     <div class="second-quote">
                         "Avoir une seconde langue, c'est avoir une seconde âme"—Charlemagne
                     </div>
                 </blockquote>

             </div>
             <div class="contact" id="contact">
                 <p class="details">Poseu-vos en contacte amb mi mitjançcant aquest formulari o enviant un whatsapp a
                     666068734 i us respondré el més aviat possible. La primera classe de prova és gratis. La meva
                     adreça és:<br><br>Dugald Steer <br> Carrer Costa Daurada 5, <br> Sant Vicenç de Montalt, <br>
                     08394 Barcelona
                 </p>
             </div>
             <div class="map-image">
                 <iframe
                     src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1492.5603196920222!2d2.515591200798547!3d41.566633567011884!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x525adaf767e02e5d!2sAngl%C3%A8s%20Montalt!5e0!3m2!1sen!2ses!4v1602058352261!5m2!1sen!2ses"
                     frameborder="0" style="border:1x solid black;" allowfullscreen="" aria-hidden="false"
                     tabindex="0"></iframe>
             </div>

         </div>
     </div>


     <div class="extra-image-small-screens">
         <img src="/img/OlogySeries.jpg" alt="Ology Books including Dragonology written by Dugald Steer">
     </div>


     <div class="map-image-small-screens">
         <iframe
             src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1492.5603196920222!2d2.515591200798547!3d41.566633567011884!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x525adaf767e02e5d!2sAngl%C3%A8s%20Montalt!5e0!3m2!1sen!2ses!4v1602058352261!5m2!1sen!2ses"
             frameborder="0" style="border:1x solid black;" allowfullscreen="" aria-hidden="false"
             tabindex="0"></iframe>
     </div>


     <div class="content" id="cards">

         <div class="card">
             <div class="card-inner">
                 <div class="card-front">
                     <div class="img-container">
                         <img src="/img/girl.jpg" alt="a girl learning English" class="nens">
                     </div>
                     <h2>Nens</h2>
                     <i class="fas fa-child"></i>
                     <ul class="list">
                         <li class="list-item">Grups Petits</li>
                         <li class="list-item">Reforç del Llibre Escolar</li>
                         <li class="list-item">Jocs i Activitats</li>
                         <li class="list-item">Videos i Cançons</li>
                         <li class="list-item">Jocs Online</li>
                         <li class="list-item">i Parlar Moltissim!</li>
                     </ul>
                 </div>
                 <div class="card-back">
                     <ul class="list">
                         <li class="list-item">Grups Petits</li>
                         <li class="list-item">Reforç del Llibre Escolar</li>
                         <li class="list-item">Jocs i Activitats</li>
                         <li class="list-item">Videos i Cançons</li>
                         <li class="list-item">Jocs Online</li>
                         <li class="list-item">i Parlar Moltissim!</li>
                     </ul>
                     <div class="img-holder">
                         <div class="img-container-back">
                             <img src="/img/girl-min.jpg" alt="a girl learning English" class="nens2">
                         </div>
                         <a data-tooltip="Més Info" href="#contact" onclick="inTouch()" class="span1"><i
                                 class="fas fa-eye"></i></a>
                     </div>
                 </div>
             </div>
         </div>


         <div class="card">
             <div class="card-inner">
                 <div class="card-front">
                     <div class="img-container">
                         <img src="/img/online.jpg" alt="A mother and son doing a video class" class="nens">
                     </div>
                     <h2>Zoom</h2>
                     <i class="fas fa-laptop"></i>
                     <ul class="list">
                         <li class="list-item">Classes cuan vulguis</li>
                         <li class="list-item">Classes 1-1 o grups</li>
                         <li class="list-item">Jocs i Activitats</li>
                         <li class="list-item">A Teu Ritme</li>
                         <li class="list-item">Packs Economics</li>
                         <li class="list-item">i Parlar Moltissim!</li>
                     </ul>
                 </div>
                 <div class="card-back">
                     <ul class="list">
                         <li class="list-item">Classes cuan vulguis</li>
                         <li class="list-item">Classes 1-1 o grups</li>
                         <li class="list-item">Jocs i Activitats</li>
                         <li class="list-item">A Teu Ritme</li>
                         <li class="list-item">Packs Economics</li>
                         <li class="list-item">i Parlar Moltissim!</li>
                     </ul>
                     <div class="img-holder">
                         <div class="img-container-back">
                             <img src="/img/online-min.jpg" alt="A mother and son doing a video class" class="nens2">
                         </div>
                         <a data-tooltip="Més Info" href="#contact" onclick="inTouch()" class="span1"><i
                                 class="fas fa-eye"></i></a>
                     </div>
                 </div>
             </div>
         </div>

         <div class="card">
             <div class="card-inner">
                 <div class="card-front">
                     <div class="img-container">
                         <img src="/img/business.jpg" alt="A business English class" class="nens">
                     </div>
                     <h2>Negocis</h2>
                     <i class="fas fa-chart-bar"></i>
                     <ul class="list">
                         <li class="list-item">Grups Petits i Grans</li>
                         <li class="list-item">Experiencia en 'Business'</li>
                         <li class="list-item">Per a Meetings</li>
                         <li class="list-item">Per Trucades</li>
                         <li class="list-item">Per Escriure al Maxim</li>
                         <li class="list-item">i Parlar Moltissim!</li>
                     </ul>
                 </div>
                 <div class="card-back">
                     <ul class="list">
                         <li class="list-item">Grups Petits i Grans</li>
                         <li class="list-item">Experiencia en 'Business'</li>
                         <li class="list-item">Per a Reunions</li>
                         <li class="list-item">Per Trucades</li>
                         <li class="list-item">Per Emails i Cartes </li>
                         <li class="list-item">i Parlar Moltissim!</li>
                     </ul>
                     <div class="img-holder">
                         <div class="img-container-back">
                             <img src="/img/business-min.jpg" alt="A business English class" class="nens2">
                         </div>
                         <a data-tooltip="Més Info" href="#contact" onclick="inTouch()" class="span1"><i
                                 class="fas fa-eye"></i></a>
                     </div>
                 </div>
             </div>
         </div>

         <div class="card">
             <div class="card-inner">
                 <div class="card-front">
                     <div class="img-container">
                         <img src="/img/adults.jpg" alt="A man and a woman learning English" class="nens">
                     </div>
                     <h2>Adults</h2>
                     <i class="fas fa-user"></i>
                     <ul class="list">
                         <li class="list-item">Grups Petits</li>
                         <li class="list-item">Clases Particulars</li>
                         <li class="list-item">Examens de Cambridge</li>
                         <li class="list-item">Preparaciò Entrevistes</li>
                         <li class="list-item">Progres Ràpid</li>
                         <li class="list-item">i Parlar Moltissim!</li>
                     </ul>
                 </div>
                 <div class="card-back">
                     <ul class="list">
                         <li class="list-item">Grups Petits</li>
                         <li class="list-item">Clases Particulars</li>
                         <li class="list-item">Examens de Cambridge</li>
                         <li class="list-item">Preparaciò Entrevistes</li>
                         <li class="list-item">Progres Ràpid</li>
                         <li class="list-item">i Parlar Moltissim!</li>
                     </ul>
                     <div class="img-holder">
                         <div class="img-container-back">
                             <img src="/img/adults-min.jpg" alt="A man and a woman learning English" class="nens2">
                         </div>
                         <a data-tooltip="Més Info" href="#contact" onclick="inTouch()" class="span1"><i
                                 class="fas fa-eye"></i></a>
                     </div>
                 </div>
             </div>
         </div>
     </div>
     <div class="footer">Website by D.A.Steer/Anglès Montalt © <?php echo date('Y') ?>
     </div>
     <script src="https://www.google.com/recaptcha/api.js?render=6Lfrd28qAAAAAPhETCEDfQZvnt-QuyyPMSmqyIA0" async defer>
     </script>
     <script>
grecaptcha.ready(function() {
    grecaptcha.execute('6Lfrd28qAAAAAPhETCEDfQZvnt-QuyyPMSmqyIA0', {
        action: 'submit'
    }).then(function(token) {
        // Add token to form
        var recaptchaResponse = document.createElement('input');
        recaptchaResponse.setAttribute('type', 'hidden');
        recaptchaResponse.setAttribute('name', 'g-recaptcha-response');
        recaptchaResponse.setAttribute('value', token);
        document.getElementById('form-id').appendChild(recaptchaResponse);
    });
});
     </script>
