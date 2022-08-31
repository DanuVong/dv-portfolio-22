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
<div id="topBtn"></div>
<main class="main-container">

    <section class="about-page">
        <div class="text-container">
            <img class="logo" src="http://portfolio.local/wp-content/uploads/2022/07/White-Brown-Minimalist-Signature-Photography-Logo.png" width="auto" height="100px">
            <h3 class="title">Junior Front-End Developer</h3>
            
            <div class="about-text">
                <h1 class="hello">Hello, my name is Danu Vong!</h1>
                <p class="paragraph">I am an Arizona State University graduate working with Alphaworks and Bitwise Industries as a Wordpress apprentice.  Through this apprenticeship, my goal is to apply my knowledge from Organizational Leadership and Sustainability coursework, which enhances my hands-on experience from all angles and levels.  This opportunity strengthens and builds upon my existing communication, cross-team collaboration, teamwork, and organizational skills. These qualifications will become assets and expand my scalability to work at an extraordinary organization that values employees and its work atmosphere.</p>
                <button class="resume-button" type="button">Resume</button>
                <a href="https://www.linkedin.com/signup/cold-join?session_redirect=https%3A%2F%2Fwww%2Elinkedin%2Ecom%2Ffeed%2F&trk=login_reg_redirect" target="_blank"><button class="linkedin-button" type="button">Linkedin</button></a>
            </div>
        </div>

        <div class="personal-image-containter">
            <img class='personal-image' src='http://portfolio.local/wp-content/uploads/2022/06/pallisades-2.jpg'>
        </div>
    </section>
    
    <div class="projects-title-container" id="project-link">
        <h1 class="projects-title">Projects</h1>
    </div>

    <section class="projects-page">
     <div class="projects-container">
        <div class="project-text">
            <h2>W4B Final Project</h2>
            <p>Website for Beginners is my first project ever in the tech. My final project is about raising a child with autism. </p>
            <a href="https://danuvong.github.io/finalproject/" target="_blank"><button class="view-project-button" type="button">View Project</button></a>
        </div>
    <img class="project-image" src='http://portfolio.local/wp-content/uploads/2022/06/autism-scaled.jpg'>
     </div>

     <div class="projects-container">
        <div class="project-text">
            <h2>Elk Grove Breweries</h2>
            <p>Elk Grove Breweries is my second project. The topic was breweries. I decided to build a website that showcased the breweries in my city.</p>
            <a href="https://danuvong.github.io/Landing-Page-Challenge/" target="_blank"><button class="view-project-button" type="button">View Project</button></a>
        </div>
        <img class="project-image" src='http://portfolio.local/wp-content/uploads/2022/06/craft-beer-scaled.jpg'>
     </div>

     <div class="projects-container">
        <div class="project-text">
            <h2>Space X Clone</h2>
            <p>This project was the first project that I had the opportunity to work collaboratively with a partner. We were assigned a website and tasked to clone the site to further improve our coding skills.</p>
            <a href="https://danuvong.github.io/Space-X-Clone/" target="_blank"><button class="view-project-button" type="button">View Project</button></a>
        </div>
        <img class="project-image" src='http://portfolio.local/wp-content/uploads/2022/06/rocketship-scaled.jpg'>
     </div>

     <div class="projects-container">
        <div class="project-text">   
            <h2>Electried</h2>
            <p>In this project our instructor introduced and taught us how to incorporate nesting in our CSS code. My topic for this project was transportation.</p>
            <a href="https://danuvong.github.io/electrified/" target="_blank"><button class="view-project-button" type="button">View Project</button></a>
        </div>
        <img class="project-image" src='http://portfolio.local/wp-content/uploads/2022/06/nissan-leaf-scaled.jpg'>
     </div>
    </section>

    

    <section class="about-section-container" id="about-page">
        <div class="about-section">
        <iframe width="560" height="315" src="https://www.youtube.com/embed/ra25Qsg7cVY?controls=0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            <!-- <?php if(dynamic_sidebar('spotify-1')) :else:endif;?> -->
            <h6>Press play to watch with video</h6>
            <h1 class="about-me-header">About me</h1>
            <p class="about-section-text">I can describe myself as a collective collaborator who enjoys and appreciates doing work that highlights my skillset.  
My skills and confidence lie within 
the areas of being social, enterprising, and realistic.  
This is probably why I relate myself to snowboarding.  I enjoy being part of a
social sport where community and teamwork make it a collaborative effort 
in enhancing my experience and for others.  Also, the realism behind the bodywork
and backdrops accentuates the tactile piece of the work. Lastly, the enterprising part of me constantly 
reminds me that snowboarding is an inexpensive sport
that holds a lot of value for its experience.  This sums up
everything that speaks to my work values and what I want for my career.  They are a great workplace (i.e.moutains),
security (i.e.reliable equipment), and co-workers (i.e.snowboarder community).  Above all, something that I am passionate about and enjoy whole-heartedly.</p>
            <!-- <button class="resume-button" type="button">Resume</button> -->
        </div>
        <!-- <img class="about-image" src='http://portfolio.local/wp-content/uploads/2022/07/golden-gate-3-scaled.jpg'>  -->
   

    <video autoplay="autoplay" id="coverVideo" loop="loop" muted="muted" playsinline="playsinline" poster="https://static.spotapps.co/web/tearexca--com/custom/video_poster.jpg"><source src="http://portfolio.local/wp-content/uploads/2022/06/IMG_9043.MOV.mov" type="video/mp4"></video>
    </section>
        
    <section class="contact-page" id="contact-page">
        <h1 class="connect">Holla @ me</h1>
        <?php echo apply_shortcodes('[contact-form-7 id="27" title="Contact form 1"]');
        
        ?> 
    </section>

</main>
  <!-- Start of back to top button -->
  <div class="topButton">
        <a href="#topBtn">Back to top.</a>
    </div>
    <!-- End of back to top button -->
<?php get_footer(); ?>