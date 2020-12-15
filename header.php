<!DOCTYPE html>
<html>

<head>
    <title><?php bloginfo('title'); ?></title>
    <?php wp_head() ?>
        <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=PT+Sans:ital,wght@0,400;0,700;1,400;1,700&family=Roboto:ital,wght@1,300&display=swap" rel="stylesheet">


</head>



<body>
    
    <header>
    <nav class="main-nav">
    

    <?php wp_nav_menu( array( 'theme_location' => 'header-menu' ) ); ?>
    
    
    </nav>
    

        
        

    <h1>
        <?php bloginfo('title'); ?>
    </h1>
        </header>