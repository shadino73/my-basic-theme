<?php
/*
Template Name: Modul 
*/
?>




<?php get_header(); ?>

    <section class="infographic infographic-modul">

        <nav class="modul-navigation">

            <div class="icon-wrapper">
                <span class="icon">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/201214-icon-ihk-a-01.svg" width="100%">
                </span>
                <p>Lernfeld</p>
            </div>

            <div class="icon-wrapper">
                <span class="icon">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/201214-icon-bewertung-a-01.svg" width="100%">
                </span>
                <p>Bewertung</p>
            </div>

            <div class="icon-wrapper">
                <span class="icon">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/201214-icon-dozent-a-01.svg" width="100%">
                </span>
                <p>Dozent</p>
            </div>

            <div class="icon-wrapper">
                <span class="icon">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/201214-icon-modulbezeichnung-a-01.svg" width="100%">
                </span>
                <p> Modulbezeichnung</p>
            </div>

            <div class="icon-wrapper">
                <span class="icon">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/201214-icon-dauer-a-01.svg" width="100%">
                </span>
                <p>Dauer</p>
            </div>

            <div class="icon-wrapper">
                <span class="icon">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/201214-icon-home-a-01.svg" width="100%">
                </span>
                <p>Home</p>
            </div>
           

        </nav>






        <article>

            <div class="article-heading-wrapper">
                <div class="icon-wrapper">
                    <span class="icon">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/201214-icon-modul-a-01.svg" width="100%">
                    </span>
                    <p>Modul</p>
                </div>
                    <?php while( have_posts() ) : the_post(); ?>
    <h2><?php the_title(); ?></h2>
            </div>
    <?php the_content(); ?>

    <?php endwhile; ?>



        </article>
        
        <div class="background-square background-square-big"></div>
        
                <div class="background-square background-square-small"></div>

        <figure>

<img src="<?php echo get_template_directory_uri(); ?>/img/Shape.svg" width="100%">
        </figure>










    </section>


<?php get_footer(); ?>
