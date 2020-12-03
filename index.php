<!DOCTYPE html>
<html>

<head>
    <title><?php bloginfo('title'); ?></title>
    <?php wp_head() ?>


</head>



<body>
    
    <nav>
    

    <?php wp_nav_menu( array( 'theme_location' => 'header-menu' ) ); ?>
    
    
    </nav>
    
    <main>
        
        

    <h1>
        <?php bloginfo('title'); ?>
    </h1>

    <?php while( have_posts() ) : the_post(); ?>
    <h3><?php the_title(); ?></h3>
    <?php the_content(); ?>

    <?php endwhile; ?>



    </main>
    <footer>
        <p>
            &copy; 2020 Shadi Al Hassan
        </p>
    </footer>







</body>







</html>
