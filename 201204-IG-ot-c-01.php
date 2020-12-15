<?php
/*
Template Name: Infografik 
*/
?>




<?php get_header(); ?>

<section class="infographic infographic-main">

    <div class="h1-container modul" style="left: 1vw;top: 2vw;">
        <h1 class="text-green">Lernfelder Module <span class="big text-grey">Mediengestalter</span></h1>
        <p>Bei ITW-Institut Berlin</p>
    </div>

    <?php wp_nav_menu( array( 'theme_location' => 'infografik-menu' ) ); ?>


    <div class="modul gold" style="left: 5vw; top:55vw;">
        <h3>Von A bis F
        </h3>
        <h3>Kategorisierte 27 Module</h3>

    </div>


    <div class="modul gray" style="left: 5vw; top:61vw;">

        <h3>Unkategorisierte 25 Module</h3>
    </div>










    <figure>
        <img src="<?php echo get_template_directory_uri(); ?>/img/Style-01-IG-ot.svg" width="100%">
    </figure>





</section>


<?php get_footer(); ?>
