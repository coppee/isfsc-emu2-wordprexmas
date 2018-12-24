<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="F#cking Santa">
    <link rel="icon" href="<?php bloginfo('template_directory') ;?>/favicon.ico">

    <title>WordpreXmas</title>

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" integrity="sha384-gfdkjb5BdAXd+lj+gudLWI+BXq4IuLW5IT+brZEZsLFm++aCMlF1V92rMkPaX4PP" crossorigin="anonymous">

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <!-- Custom styles for this template -->
    <link href="<?php bloginfo('template_directory') ;?>/css/app.css" rel="stylesheet">

    <?php wp_head(); ?>
  </head>

  <body>

    <header class="Header">
      <div class="Header__top collapse bg-dark" id="navbarHeader">
        <div class="container">
          <div class="row">
            <div class="col-sm-8 col-md-7 py-4">
	            <?php
              // On récupère la "page" ayant "a-propos-de-nous" comme slug.
              // Docs: https://developer.wordpress.org/reference/classes/wp_query/
	            $params = array('pagename' => 'a-propos-de-nous');
	            $the_query = new WP_Query($params);

	            if ( $the_query->have_posts() ) :
		            while ( $the_query->have_posts() ) :
			            $the_query->the_post(); ?>

              <h4>
                <a href="<?php the_permalink() ?>" class="text-white"><?php the_title() ?></a>
              </h4>
              <div class="text-muted">
                  <?php the_excerpt() ?>
              </div>

                <?php
                endwhile;
	            endif; ?>
            </div>
            <div class="col-sm-4 offset-md-1 py-4">
              <h4 class="text-white">Contact</h4>
	            <?php
              // On génère le "menu" ayant "top" comme "location" (emplacement en fr).
              // Docs : https://developer.wordpress.org/reference/functions/wp_nav_menu/

              // Pour rappel : les emplacements des menus sont définis dans le
              // fichier functions.php et assignés au(x) menu(s) dans le backoffice
              // de WP (Apparence/Menu).
	            wp_nav_menu(array(
		            'theme_location' => 'top',

                // Le(s) param(s) ci-dessous demande à WP d'ajouter certaines
                // classes/id aux balises générées afin de correspondre au mieux à
                // votre squelette HTML/CSS.
		            'menu_class' => 'list-unstyled text-white',
	            ));
	            ?>
            </div>
          </div>
        </div>
      </div>

      <div class="Header__main navbar navbar-dark bg-dark shadow-sm">
        <div class="container d-flex justify-content-between">
          <a href="<?php echo get_home_url(); ?>" class="navbar-brand d-flex align-items-center Head__logo">
            <i class="fas fa-sleigh"></i>
            <strong>
                <?php
                // On récupère le titre de votre site que vous avez donné à
                // l'installation de WP et que vous pouvez modifier dans le
                // backoffice (Réglages/General)
                // Docs : https://developer.wordpress.org/reference/functions/bloginfo/
                bloginfo('name') ;?>
            </strong>
          </a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarHeader" aria-controls="navbarHeader" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
        </div>
      </div>

      <nav class="Header__main-navigation navbar navbar-expand-lg navbar-light bg-light">
          <div class="container">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            
            <?php
            // On génère le "menu" ayant "primary" comme "location" (emplacement en fr).
            // Docs : https://developer.wordpress.org/reference/functions/wp_nav_menu/

            // Pour rappel : les emplacements des menus sont définis dans le
            // fichier functions.php et assignés au(x) menu(s) dans le backoffice
            // de WP (Apparence/Menu).
            wp_nav_menu(array(
              'theme_location' => 'primary',

              // Le(s) param(s) ci-dessous demande à WP d'ajouter certaines
              // classes/id aux balises générées afin de correspondre au mieux à
              // votre squelette HTML/CSS.
              'container_class' => 'collapse navbar-collapse',
              'container_id' => 'navbarNav',
              'menu_class' => 'navbar-nav',
            )); 
            ?>  

          </div>
      </nav>
    </header>