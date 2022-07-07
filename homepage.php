<?php
/**
 * Template Name: Homepage
 *
 * @package dv-portfolio-22
 *
 */
?>
<?php get_header(); ?> 
<!-- Write HTML Here -->
<main class="main-container">

    <section class="about-page">
        <div class="text-container">
            <!-- <h3 class="logo">So So Dev</h3> -->
            <img class="logo" src="http://portfolio.local/wp-content/uploads/2022/07/White-Brown-Minimalist-Signature-Photography-Logo.png" width="auto" height="100px">
            <h3 class="title">Junior Front-End Developer</h3>
            
            <div class="about-text">
                <h1 class="hello">Hello, my name is Danu Vong</h1>
                <p class="paragraph">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Magna fermentum iaculis eu non. Ac tincidunt vitae semper quis lectus nulla at.</p>
                <button class="project-button" type="button">Projects</button>
                <button class="linkedin-button" type="button">Linkedin</button>
            </div>
        </div>

        <div class="personal-image-containter">
            <img class='personal-image' src='http://portfolio.local/wp-content/uploads/2022/06/pallisades-2.jpg'>
        </div>
    </section>
    
    <div class="projects-title-container">
        <h1 class="projects-title">Projects</h1>
    </div>

    <section class="projects-page">
     <div class="projects-container">
        <div class="project-text">
            <h2>W4B Final Project</h2>
            <p>fermentum iaculis eu non diam phasellus vestibulum lorem sed risus ultricies tristique nulla aliquet enim tortor at auctor urna nunc id cursus metus aliquam eleifend</p>
            <button class="view-project-button" type="button">View Project</button>
        </div>
        <img class="project-image" src='http://portfolio.local/wp-content/uploads/2022/06/autism-scaled.jpg'>
     </div>

     <div class="projects-container">
        <div class="project-text">
            <h2>Elk Grove Breweries</h2>
            <p>fermentum iaculis eu non diam phasellus vestibulum lorem sed risus ultricies tristique nulla aliquet enim tortor at auctor urna nunc id cursus metus aliquam eleifend</p>
            <button class="view-project-button" type="button">View Project</button>
        </div>
        <img class="project-image" src='http://portfolio.local/wp-content/uploads/2022/06/craft-beer-scaled.jpg'>
     </div>

     <div class="projects-container">
        <div class="project-text">
            <h2>Space X Clone</h2>
            <p>fermentum iaculis eu non diam phasellus vestibulum lorem sed risus ultricies tristique nulla aliquet enim tortor at auctor urna nunc id cursus metus aliquam eleifend</p>
            <button class="view-project-button" type="button">View Project</button>
        </div>
        <img class="project-image" src='http://portfolio.local/wp-content/uploads/2022/06/rocketship-scaled.jpg'>
     </div>

     <div class="projects-container">
        <div class="project-text">   
            <h2>Electried</h2>
            <p>fermentum iaculis eu non diam phasellus vestibulum lorem sed risus ultricies tristique nulla aliquet enim tortor at auctor urna nunc id cursus metus aliquam eleifend</p>
            <button class="view-project-button" type="button">View Project</button>
        </div>
        <img class="project-image" src='http://portfolio.local/wp-content/uploads/2022/06/nissan-leaf-scaled.jpg'>
     </div>
    </section>

    <section class="about-section-container">
        <div class="about-section">
            <?php if(dynamic_sidebar('spotify-1')) :else:endif;?>
            <h1 class="about-me-header">About me</h1>
            <p class="about-section-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            <button class="resume-button" type="button">Resume</button>
        </div>
        <!-- <img class="about-image" src='http://portfolio.local/wp-content/uploads/2022/07/golden-gate-3-scaled.jpg'>  -->
   

    <video autoplay="autoplay" id="coverVideo" loop="loop" muted="muted" playsinline="playsinline" poster="https://static.spotapps.co/web/tearexca--com/custom/video_poster.jpg"><source src="http://portfolio.local/wp-content/uploads/2022/06/IMG_9043.MOV.mov" type="video/mp4"></video>
    </section>
        
    <section class="contact-page">
        <h1 class="holla">Holla @ me</h1>
        <?php echo apply_shortcodes('[contact-form-7 id="27" title="Contact form 1"]');
        
        ?> 
    </section>

</main>

<?php get_footer(); ?>