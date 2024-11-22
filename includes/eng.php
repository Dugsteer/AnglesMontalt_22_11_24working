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
             <li id="whose" onclick="whoIs();" class="underline">About Me</li>
             <li id="contact" onclick="inTouch();" class="underline contact-large">Contact</li>


             <li class="underline"> <a class="nav-link" style="text-decoration: none" href="#cards">Classes</a>
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
                 <p>Dugald Steer, a qualified English Teacher with a passion for language.</p>
             </div>
             <div class="intro-text">
                 <h1>Anglès Montalt</h1>
                 <h2>Experienced English Teacher in Sant Vicenç de Montalt</h2>
                 <p>I have 16 years of experience at all levels.
                     If you are a complete beginner, use English at
                     work, need help with your schoolwork or have to pass an exam, I can offer you a tailor-made
                     program
                     that will
                     guarantee you the best possible results and a great experience.
                 </p>
             </div>
             <div class="extra-image" data-tooltip="T">
                 <img src="/img/OlogySeries.jpg" alt="Ology Books including Dragonology written by Dugald Steer">
             </div>
         </div>







         <div id="top1" class="top1" name="top1">

             <div class="left1">
                 <p>Contact Form</p>

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

                 <form id="form-id" class="form-class" method="post" action="includes/submit-form.php">

                     <div class="form-group">
                         <label for="name" class="label">name</label>
                         <div class="input-group">
                             <input type="text" id="name" name="name" class="form-control" required>
                         </div>
                     </div>

                     <div class="form-group">
                         <label for="email" class="label">e-mail</label>
                         <div class="input-group">
                             <input type="email" id="email" name="email" class="form-control" required>
                         </div>
                     </div>

                     <div class="form-group">
                         <label for="message" class="label">message</label>
                         <div class="input-group">
                             <textarea type="message" id="message" name="message" class="form-control" rows="6"
                                 maxlength="3000" required></textarea>
                         </div>
                     </div>

                     <div class="form-group">
                         <button type="submit" id="button" class="btn btn-primary btn-lg btn-block">Send
                             Message</button>
                     </div>
                 </form>


             </div>
             <div class="contact" id="contact">
                 <p class="details">Get in touch using the contact form or sending a Whatsapp to 666068734 and I'll
                     get
                     back
                     to you as soon as possible. The first trial class is free. My address is:<br><br>Dugald Steer
                     <br>
                     Carrer Costa Daurada 5, <br> Sant Vicenç de Montalt, <br>
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
                     <h2>Kids</h2>
                     <i class="fas fa-child"></i>
                     <ul class="list">
                         <li class="list-item">Small Groups</li>
                         <li class="list-item">Curriculum Backup</li>
                         <li class="list-item">Games and Activities</li>
                         <li class="list-item">Videos and Songs</li>
                         <li class="list-item">Online Games</li>
                         <li class="list-item">and speaking a lot!</li>
                     </ul>
                 </div>
                 <div class="card-back">
                     <ul class="list">
                         <li class="list-item">Small Groups</li>
                         <li class="list-item">Curriculum Backup</li>
                         <li class="list-item">Games and Activities</li>
                         <li class="list-item">Videos and Songs</li>
                         <li class="list-item">Online Games</li>
                         <li class="list-item">and speaking a lot!</li>
                     </ul>
                     <div class="img-holder">
                         <div class="img-container-back">
                             <img src="/img/girl-min.jpg" alt="a girl learning English" class="nens2">
                         </div>
                         <a data-tooltip="More Info" href="#contact" onclick="inTouch()" class="span1"><i
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
                         <li class="list-item">Timetables to Suit</li>
                         <li class="list-item">1-1 classes or groups</li>
                         <li class="list-item">Games and Activities</li>
                         <li class="list-item">At Your Pace</li>
                         <li class="list-item">Economic Packs</li>
                         <li class="list-item">and speaking a lot!</li>
                     </ul>
                 </div>
                 <div class="card-back">
                     <ul class="list">
                         <li class="list-item">Timetables to Suit</li>
                         <li class="list-item">1-1 classes or groups</li>
                         <li class="list-item">Games and Activities</li>
                         <li class="list-item">At Your Pace</li>
                         <li class="list-item">Economic Packs</li>
                         <li class="list-item">and speaking a lot!</li>
                     </ul>
                     <div class="img-holder">
                         <div class="img-container-back">
                             <img src="/img/online-min.jpg" alt="A mother and son doing a video class" class="nens2">
                         </div>
                         <a data-tooltip="More Info" href="#contact" onclick="inTouch()" class="span1"><i
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
                     <h2>Business</h2>
                     <i class="fas fa-chart-bar"></i>
                     <ul class="list">
                         <li class="list-item">Small and Large Groups</li>
                         <li class="list-item">Teacher has Business Experience</li>
                         <li class="list-item">For Meetings</li>
                         <li class="list-item">For Business Calls</li>
                         <li class="list-item">For Emails and Letters</li>
                         <li class="list-item">and speaking a lot!</li>
                     </ul>
                 </div>
                 <div class="card-back">
                     <ul class="list">
                         <li class="list-item">Small and Large Groups</li>
                         <li class="list-item">Teacher has Business Experience</li>
                         <li class="list-item">For Meetings</li>
                         <li class="list-item">For Business Calls</li>
                         <li class="list-item">For Emails and Letters</li>
                         <li class="list-item">and speaking a lot!</li>
                     </ul>
                     <div class="img-holder">
                         <div class="img-container-back">
                             <img src="/img/business-min.jpg" alt="A business English class" class="nens2">
                         </div>
                         <a data-tooltip="More Info" href="#contact" onclick="inTouch()" class="span1"><i
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
                         <li class="list-item">Small Groups</li>
                         <li class="list-item">Private Lessons</li>
                         <li class="list-item">Cambridge/IELTS exams</li>
                         <li class="list-item">Interview Preparation</li>
                         <li class="list-item">Rapid Progress</li>
                         <li class="list-item">and speaking a lot!</li>
                     </ul>
                 </div>
                 <div class="card-back">
                     <ul class="list">
                         <li class="list-item">Small Groups</li>
                         <li class="list-item">Private Lessons</li>
                         <li class="list-item">Cambridge/IELTS exams</li>
                         <li class="list-item">Interview Preparation</li>
                         <li class="list-item">Rapid Progress</li>
                         <li class="list-item">and speaking a lot!</li>
                     </ul>
                     <div class="img-holder">
                         <div class="img-container-back">
                             <img src="/img/adults-min.jpg" alt="A man and a woman learning English" class="nens2">
                         </div>
                         <a data-tooltip="More Info" href="#contact" onclick="inTouch()" class="span1"><i
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
