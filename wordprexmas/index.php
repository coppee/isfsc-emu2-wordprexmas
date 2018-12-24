<?php

// Ce template est le template par défaut. C'est à dire que si aucun autre template
// n'est dédié à un contenu "demandé" c'est ce template-ci qui affichera ce contenu.

// Pour rappel :
// home.php est le template dédié à l'affichage de la homepage
// page.php est le template dédié à l'affichage du détail d'un contenu "page"
// single.php est le template dédié à l'affichage du détail d'un contenu "article"
// category-news.php est le template dédié à l'affichage de la liste de tous les articles liés à la catégorie dont le slug est "news".
// category.php est le template dédié à l'affichage de la liste de tous les articles liés à une catégorie donnée.

?>

<?php get_header(); ?>

<main role="main">

  <div class="album py-5 bg-light">
    <div class="container">
      <div class="row">

      	<?php
      	if( have_posts() ):
      		while( have_posts() ): 

      			the_post();
      	?>

          <h2><?php the_title() ; ?></h2>
          <h3> (index.php : template par défaut) </h3>

    	<?php 
    		endwhile;
    	endif;
    	?>

      
      </div>
    </div>
  </div>

</main>


<?php get_footer(); ?> 