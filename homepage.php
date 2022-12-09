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
            <img class="logo" src="<?php the_field('logo');?>" width="auto" height="100px">
            <h3 class="title"><?php the_field('title');?></h3>
            
            <div class="about-text">
                <h1 class="hello"><?php the_field('introduction');?></h1>
                <p class="paragraph"><?php the_field('intro-text');?></p>
                <a href="<?php the_field('resume-button-url');?>" target="_blank"><button class="resume-button" type="button"><?php the_field('resume-button-text');?></button></a>

                <a href="<?php the_field('linkedin-button-url');?>" target="_blank"><button class="linkedin-button" type="button"><?php the_field('linkedin-button-text');?></button></a>
            </div>
        </div>

        <div class="personal-image-containter">
            <img class='personal-image' src='<?php the_field('hero-image');?>'>
        </div>
    </section>
    
    <div class="projects-title-container" id="project-link">
        <h1 class="projects-title"><?php the_field('projects-heading');?></h1>
    </div>

    <section class="projects-page">
     <div class="projects-container">
        <div class="project-text">
            <h2><?php the_field('project-1-name');?></h2>
            <p><?php the_field('project-1-text');?></p>
            <a href="<?php the_field('project-1-button-url');?>" target="_blank"><button class="view-project-button" type="button"><?php the_field('project-1-button-text');?></button></a>
        </div>
    <img class="project-image" src='<?php the_field('project-1-image');?>'>
     </div>

     <div class="projects-container">
        <div class="project-text">
            <h2>Elk Grove Breweries</h2>
            <p>Elk Grove Breweries is my second project. The topic was breweries. I decided to build a website that showcased the breweries in my city.</p>
            <a href="https://danuvong.github.io/Landing-Page-Challenge/" target="_blank"><button class="view-project-button" type="button">View Project</button></a>
        </div>
        <img class="project-image" src='<?php the_field('project-2-image');?>'>
     </div>

     <div class="projects-container">
        <div class="project-text">
            <h2>Space X Clone</h2>
            <p>This project was the first project that I had the opportunity to work collaboratively with a partner. We were assigned a website and tasked to clone the site to further improve our coding skills.</p>
            <a href="https://danuvong.github.io/Space-X-Clone/" target="_blank"><button class="view-project-button" type="button">View Project</button></a>
        </div>
        <img class="project-image" src='<?php the_field('project-3-image');?>'>
     </div>

     <div class="projects-container">
        <div class="project-text">   
            <h2>Electrified</h2>
            <p>In this project our instructor introduced and taught us how to incorporate nesting in our CSS code. My topic for this project was transportation.</p>
            <a href="https://danuvong.github.io/electrified/" target="_blank"><button class="view-project-button" type="button">View Project</button></a>
        </div>
        <img class="project-image" src='<?php the_field('project-4-image');?>'>
     </div>
    </section>

    

    <section class="about-section-container" id="about-page">
        <div class="about-section">
        <iframe width="560" height="315" src="https://www.youtube.com/embed/ra25Qsg7cVY?controls=0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            <!-- <?php if(dynamic_sidebar('spotify-1')) :else:endif;?> -->
            <h6><?php the_field('video-text');?></h6>
            <h1 class="about-me-header"><?php the_field('about-title');?></h1>
            <p class="about-section-text"><?php the_field('about-paragraph');?></p>
            <!-- <button class="resume-button" type="button">Resume</button> -->
        </div>
        <!-- <img class="about-image" src='http://portfolio.local/wp-content/uploads/2022/07/golden-gate-3-scaled.jpg'>  -->
   

    <video autoplay="autoplay" id="coverVideo" loop="loop" muted="muted" playsinline="playsinline" poster="https://static.spotapps.co/web/tearexca--com/custom/video_poster.jpg"><source src="http://danuvong.com/wp-content/uploads/2022/06/IMG_9043.MOV.mov" type="video/mp4"></video>
    </section>
        
    <section class="contact-page" id="contact-page">
        <h1 class="connect"><?php the_field('contact');?></h1>
        <?php echo apply_shortcodes('[contact-form-7 id="27" title="Contact form 1"]');
        
        ?> 
    </section>

</main>
  <!-- Start of back to top button -->
  <div class="topButton">
        <a href="#topBtn"><?php the_field('back-to-top-button-text');?></a>
    </div>
    <!-- End of back to top button -->
<?php get_footer(); ?>