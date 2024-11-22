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
             <li id="whose" onclick="whoIs();" class="underline">¡Hola!</li>
             <li class="underline"> <a class="nav-link" style="text-decoration: none" href="#cards">Aprender Inglés</a>

             <li id="contact" onclick="inTouch();" class="underline contact-large">Más Información</li>


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
                 <p>Dugald Steer, profesor de inglés titulado y apasionado por los idiomas.</p>
             </div>

             <div class="intro-text">
                 <h1>Anglès Montalt</h1>
                 <h2>Profesor de Inglés con experiencia en Sant Vicenç de Montalt</h2>
                 <p>Tengo 15 años de experiencia con todos los
                     niveles.Tanto si eres principiante, utiliza el inglés en el trabajo, necesitas refuerzo escolar
                     o
                     tienes un examen,te ofrezco un programa a medida que garantiza los mejores resultados y una
                     experiencia encantadora.
                 </p>
             </div>
             <div class="extra-image" data-tooltip="T">
                 <img src="/img/OlogySeries.jpg" alt="Ology Books including Dragonology written by Dugald Steer">
             </div>
         </div>


         <div id="top1" class="top1" name="top1">

             <div class="left1">
                 <p>¡Quiero Saber Más!</p>

                 <?php
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
    ?>

                 <form id="form-id" class="form-class" method="post" action="">

                     <div class="form-group">
                         <label for="Name" class="label">nombre</label>
                         <div class="input-group">
                             <input type="text" id="name" name="name" class="form-control" required>
                         </div>
                     </div>

                     <div class="form-group">
                         <label for="Email" class="label">correo electrónico</label>
                         <div class="input-group">
                             <input type="email" id="email" name="email" class="form-control" required>
                         </div>
                     </div>

                     <div class="form-group">
                         <label for="Message" class="label">mensaje</label>
                         <div class="input-group">
                             <textarea type="message" id="message" name="message" class="form-control" rows="6"
                                 maxlength="3000" required></textarea>
                         </div>
                     </div>

                     <div class="form-group">
                         <button type="submit" id="button" class="btn btn-primary btn-lg btn-block">Envia</button>
                     </div>
                 </form>


             </div>
             <div class="contact" id="contact">
                 <p class="details">Pónte en contacto conmigo mediante este formulario o enviando un whatsapp a
                     666068734 y le contestaré lo antes posible. La primera clase de prueba es gratis. Mi dirección
                     es:<br><br>Dugald Steer <br> Carrer Costa Daurada 5, <br> Sant Vicenç de Montalt, <br>
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
                     <h2>Niños</h2>
                     <i class="fas fa-child"></i>
                     <ul class="list">
                         <li class="list-item">Grupos Pequeños</li>
                         <li class="list-item">Refuerzo del Libro Escolar</li>
                         <li class="list-item">Juegos y Actividades</li>
                         <li class="list-item">Videos y Canciones</li>
                         <li class="list-item">Juegos En linea </li>
                         <li class="list-item">y Hablar un Monton!</li>
                     </ul>
                 </div>
                 <div class="card-back">
                     <ul class="list">
                         <li class="list-item">Grupos Pequeños</li>
                         <li class="list-item">Refuerzo del Libro Escolar</li>
                         <li class="list-item">Juegos y Actividades</li>
                         <li class="list-item">Videos y Canciones</li>
                         <li class="list-item">Juegos En linea </li>
                         <li class="list-item">y Hablar un Monton!</li>
                     </ul>
                     <div class="img-holder">
                         <div class="img-container-back">
                             <img src="/img/girl-min.jpg" alt="a girl learning English" class="nens2">
                         </div>
                         <a data-tooltip="Más Info" href="#contact" onclick="inTouch()" class="span1"><i
                                 class="fas fa-eye"></i></a>
                     </div>
                 </div>
             </div>
         </div>


         <div class="card">
             <div class="card-inner">
                 <div class="card-front">
                     <div class="img-container">
                         <img src="/img/online.jpg" alt="A mother and son doing an onlline English class" class="nens">
                     </div>
                     <h2>Zoom</h2>
                     <i class="fas fa-laptop"></i>
                     <ul class="list">
                         <li class="list-item">Clases Quando Quieras</li>
                         <li class="list-item">1-1 o Grupos</li>
                         <li class="list-item">Juegos y Actividades</li>
                         <li class="list-item">A Tu Ritmo</li>
                         <li class="list-item">Packs Economicos</li>
                         <li class="list-item">y Hablar un Monton!</li>
                     </ul>
                 </div>
                 <div class="card-back">
                     <ul class="list">
                         <li class="list-item">Clases Quando Quieras</li>
                         <li class="list-item">1-1 o Grupos</li>
                         <li class="list-item">Juegos y Actividades</li>
                         <li class="list-item">A Tu Ritmo</li>
                         <li class="list-item">Packs Economicos</li>
                         <li class="list-item">y Hablar un Monton!</li>
                     </ul>
                     <div class="img-holder">
                         <div class="img-container-back">
                             <img src="/img/online-min.jpg" alt="A mother and son doing a video class" class="nens2">
                         </div>
                         <a data-tooltip="Más Info" href="#contact" onclick="inTouch()" class="span1"><i
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
                     <h2>Negocios</h2>
                     <i class="fas fa-chart-bar"></i>
                     <ul class="list">
                         <li class="list-item">1-1 o Grupos</li>
                         <li class="list-item">Experiencia en 'Business'</li>
                         <li class="list-item">Para Reuniones</li>
                         <li class="list-item">Para Llamadas</li>
                         <li class="list-item">Para Email, Cartas etc</li>
                         <li class="list-item">y Hablar un Monton!</li>
                     </ul>
                 </div>
                 <div class="card-back">
                     <ul class="list">
                         <li class="list-item">1-1 o Grupos</li>
                         <li class="list-item">Experiencia en 'Business'</li>
                         <li class="list-item">Para Reuniones</li>
                         <li class="list-item">Para Llamadas</li>
                         <li class="list-item">Para Email, Cartas etc</li>
                         <li class="list-item">y Hablar un Monton!</li>
                     </ul>
                     <div class="img-holder">
                         <div class="img-container-back">
                             <img src="/img/business-min.jpg" alt="A business English class" class="nens2">
                         </div>
                         <a data-tooltip="Más Info" href="#contact" onclick="inTouch()" class="span1"><i
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
                     <h2>Adultos</h2>
                     <i class="fas fa-user"></i>
                     <ul class="list">
                         <li class="list-item">Grupos Pequeños</li>
                         <li class="list-item">Clases Particulares</li>
                         <li class="list-item">Examens de Cambridge</li>
                         <li class="list-item">Preparación para Entrevistas</li>
                         <li class="list-item">Progreso Rápido</li>
                         <li class="list-item">y Hablar un Monton!</li>
                     </ul>
                 </div>
                 <div class="card-back">
                     <ul class="list">
                         <li class="list-item">Grupos Pequeños</li>
                         <li class="list-item">Clases Particulares</li>
                         <li class="list-item">Examens de Cambridge</li>
                         <li class="list-item">Preparación para Entrevistas</li>
                         <li class="list-item">Progreso Rápido</li>
                         <li class="list-item">y Hablar un Monton!</li>
                     </ul>
                     <div class="img-holder">
                         <div class="img-container-back">
                             <img src="/img/adults-min.jpg" alt="A man and a woman learning English" class="nens2">
                         </div>
                         <a data-tooltip="Más Info" href="#contact" onclick="inTouch()" class="span1"><i
                                 class="fas fa-eye"></i></a>
                     </div>
                 </div>
             </div>
         </div>
     </div>
     <div class="footer">Website by D.A.Steer/Anglès Montalt © <?php echo date('Y') ?>
     </div>
