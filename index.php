<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <header class="header">
        <nav class="navbar">
            <a href="#" class="nav-logo">Portfolio</a>
            <ul class="nav-menu">
                <li class="nav-item">
                    <a href="#home" class="nav-link">Home</a>
                </li>
                <li class="nav-item">
                    <a href="#about" class="nav-link">About</a>
                </li>
                <li class="nav-item">
                    <a href="#projects" class="nav-link">Projects</a>
                </li>
                <li class="nav-item">
                    <a href="#contact" class="nav-link">Contact</a>
                </li>
            </ul>
            <div class="hamburger">
                <span class="bar"></span>
                <span class="bar"></span>
                <span class="bar"></span>
            </div>
        </nav>
</header>

    <!-- Presentation, cta and image  -->
    <section class="wrap-hero-section" id="home">
        <article class="presentation">
            <div class="wrap-title-presentation">
                <div class="wrap-all-title-presentation">
                    <div class="wrap-name-presentation">
                        <h1>
                            Uriel Milgron
                        </h1>
                        <p>Frontend Developer</p>
                    </div>
                    <a href="#contact" class="cta-a">Contact me</a>
                </div>


                <div class="wrap-social-logos">
                    <a href="#" class="social-logo"><img src="./assets/images/Facebook-logo.png"
                            alt="Facebook logo"></a>
                    <a href="#" class="social-logo"><img src="./assets/images/Instagram-logo.png"
                            alt="Instagram logo"></a>
                    <a href="#" class="social-logo"><img src="./assets/images/Linkedin-logo.png"
                            alt="Linkedin logo"></a>
                    <a href="#" class="social-logo"><img src="./assets/images/Github-social.png" alt="Github logo"></a>
                </div>
            </div>
        </article>
        <article class="presentation">
            <img src="./assets/images/Profile-image2.png" class="profile-image" alt="Profile image">
        </article>
    </section>

    <!-- About -->
    <section class="about_logos-section" id="about">
        <article class="about">
            <h2>
                About
            </h2>
            <p>
                I am a fullstack web programmer and mobile application developer. I love design, problem solving,
                working in
                a team, I'm a fast learner and I love challenges. I have knowledge in Figma, HTML, CSS, Bootsrap, Sass,
                Javascript, React, React-Native, GIT, firebase and MongoDB.
            </p>
        </article>

        <article class="logos-section">
            <img src="./assets/images/HTML-Logo.png" alt="" class="logo-brand">
            <img src="./assets/images/CSS-Logo.png" alt="" class="logo-brand">
            <img src="./assets/images/Boostrap-logo.png" alt="" class="logo-brand">
            <img src="./assets/images/sass-logo.png" alt="" class="logo-brand">
            <img src="./assets/images/Javascript-logo.png" alt="" class="logo-brand">
            <img src="./assets/images/React-logo.png" alt="" class="logo-brand">
            <img src="./assets/images/GIT-Logo.png" alt="" class="logo-brand">
            <img src="./assets/images/Firebase-logo.png" alt="" class="logo-brand">
            <img src="./assets/images/Mongo-db.png" alt="" class="logo-brand">
        </article>
    </section>

    <section class="projects-section" id="projects">
        <div class="wrap-title-section">
            <h2 >
                Projects
            </h2>
        </div>

        <div class="wrap-projects-section">
            <article class="item-projects-section">
                <div class="item-image-container">
                    <img src="assets/images/Match home 1.png" alt="Match Home App">
                </div>
                <div class="item-button-container">
                    <a target="_blank" href="https://drive.google.com/file/d/1d4F7kPPX0refcHQ8BNBHsezvfJN-5aWw/view?usp=sharing" class="button-view-project">View Project</a>
                </div>
            </article>
            <article class="item-projects-section">
                <div class="item-image-container">
                    <img src="assets/images/ruleta- 1.png" alt="Roulette">
                </div>
                <div class="item-button-container">
                    <a target="_blank" href="https://github.com/urielmilgron/programa-mentoring-santander.git" class="button-view-project">View Project</a>
                </div>
            </article>
            <article class="item-projects-section">
                <div class="item-image-container">
                    <img src="assets/images/sym-caleta 1.png" alt="Ecommerce">
                </div>
                <div class="item-button-container">
                    <a target="_blank" href="https://github.com/urielmilgron/ecommercemilgron.git" class="button-view-project">View Project</a>
                </div>
            </article>
            <article class="item-projects-section">
                <div class="item-image-container">
                    <img src="assets/images/proyect_socialapp.jpg" alt="Social App">
                </div>
                <div class="item-button-container">
                    <a target="_blank" href="https://github.com/urielmilgron/SocialApp" class="button-view-project">View Project</a>
                </div>
            </article>

        </div>
    </section>

    <!-- Contact me -->
    <section class="contact-section" id="contact">
        <div class="wrap-title-contact-section">
            <h2>Contact me</h2>
        </div>

        <div class="wrap-form-contact-section">
            <form action="contact.php" method="post" class="form-contact">
                <div class="wrap-two-inputs">
                    <input type="text" name="nombre" id="nombre" required placeholder="Full name">
                    <input type="email" name="email" id="email" required placeholder="Email address">
                </div>
                <div class="wrap-input">

                    <input type="text" id="asunto" name="subject" required placeholder="Subject">
                </div>
                <textarea name="message" id="" cols="40" rows="5" placeholder="Message"></textarea>
               <div class="wrap-submit">
                   <input type="submit" value="Send message" class="cta-a submit-cta">
               </div>
                
            </form>
      
        </div>
    </section>

    <footer>
        <div class="wrap-social-logos social-logos-footer">
            <a href="#" class="social-logo"><img src="./assets/images/Facebook-logo.png" alt="Facebook logo"></a>
            <a href="#" class="social-logo"><img src="./assets/images/Instagram-logo.png" alt="Instagram logo"></a>
            <a href="#" class="social-logo"><img src="./assets/images/Linkedin-logo.png" alt="Linkedin logo"></a>
            <a href="#" class="social-logo"><img src="./assets/images/Github-social.png" alt="Github logo"></a>
        </div>
        <div class="footer-creds">
            <p>
                © 2023 Uriel Milgron - All Rights reserved
            </p>
        </div>
    </footer>
</body>
<script src="script.js"></script>
</html>