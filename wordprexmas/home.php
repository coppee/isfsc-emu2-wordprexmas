<?php get_header(); ?> 

<main role="main">

  <section class="Homepage__slider" id="slider">
    <div id="js-carousel" class="carousel slide" data-ride="carousel">
      <div class="carousel-inner">
		  <?php
	    // On récupère les 4 derniers "articles" ayant "slider" comme catégorie.
	    // Docs: https://developer.wordpress.org/reference/classes/wp_query/
		  $params = array('category_name' => 'slider','posts_per_page' => 4);
		  $the_query = new WP_Query($params);

		  if ( $the_query->have_posts() ) :
			  while ( $the_query->have_posts() ) :
				  $the_query->the_post(); ?>
                <div class="carousel-item <?php if($the_query->current_post == 0){ echo 'active'; } ?>">
                  <img class="d-block w-100" src="<?php the_post_thumbnail_url() ?>" alt="First slide">
                  <div class="carousel-caption d-none d-md-block">
                    <h5><?php the_title() ?></h5>
					          <?php the_excerpt() ?>
                  </div>
                </div>
			  <?php
			  endwhile;
		  endif; ?>
      </div>
      <a class="carousel-control-prev" href="#js-carousel" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#js-carousel" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
  </section>

  <section class="jumbotron text-center" id="jumbotron">
    <div class="container">
	    <?php
      // On récupère la "page" ayant "homepage" comme slug.
      // Docs: https://developer.wordpress.org/reference/classes/wp_query/
	    $params = array('pagename' => 'homepage');
	    $the_query = new WP_Query($params);

	    if ( $the_query->have_posts() ) :
		    while ( $the_query->have_posts() ) :
			    $the_query->the_post(); ?>

          <h1 class="jumbotron-heading"><?php the_title() ?></h1>
          <div class="lead text-muted"><?php the_content() ?></div>

		    <?php
		    endwhile;
	    endif; ?>
    </div>
  </section>

  <section class="py-5 bg-light" id="agenda">
    <div class="px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
      <h1 class="display-4">Agenda</h1>
    </div>
    <div class="container">
      <div class="row">

	      <?php
        // On récupère les 3 derniers "articles" ayant "agenda" comme catégorie.
        // Docs: https://developer.wordpress.org/reference/classes/wp_query/
	      $params = array('category_name' => 'agenda','posts_per_page' => 3);
	      $the_query = new WP_Query($params);

	      if ( $the_query->have_posts() ) :
		      while ( $the_query->have_posts() ) :
			      $the_query->the_post(); ?>

        <div class="col-md-4">
          <div class="card mb-4 shadow-sm">

	          <?php
	          // Si l'article à une image "mise en avant", on l'affiche.
	          if(get_the_post_thumbnail_url()): ?>
              <a href="<?php the_permalink(); ?>">
                <img class="card-img-top" src="<?php the_post_thumbnail_url() ?>" alt="Card image cap">
              </a>
	          <?php endif; ?>

            <div class="card-body">
              <p class="card-text">
                <a href="<?php the_permalink() ; ?>">
                  <?php the_title() ; ?>
                </a>
              </p>
              <p class="card-text">
                <?php the_excerpt() ; ?>
              </p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <a href="<?php the_permalink() ; ?>" class="btn btn-sm btn-outline-secondary">View</a>
                </div>
                <small class="text-muted"><?php the_date() ; ?></small>
              </div>
            </div>
          </div>
        </div>

    	<?php 
    		endwhile;
    	endif;
    	?>
      </div>
    </div>
  </section>

  <section class="py-5" id="faq">
    <div class="px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
      <h1 class="display-4">FAQ</h1>
    </div>
    <div class="container">
      <div class="accordion" id="accordion">

        <?php
        // On récupère TOUS les "articles" ayant "faq" comme catégorie
        // Docs: https://developer.wordpress.org/reference/classes/wp_query/
        $params = array('category_name' => 'faq');
        $the_query = new WP_Query($params);

        if ( $the_query->have_posts() ) :
        while ( $the_query->have_posts() ) :
        $the_query->the_post(); ?>

        <div class="card">
          <div class="card-header" id="heading<?php echo $the_query->current_post ?>">
            <h5 class="mb-0">
              <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapse<?php echo $the_query->current_post ?>">
                <?php the_title() ; ?>
              </button>
            </h5>
          </div>
          <div id="collapse<?php echo $the_query->current_post ?>" class="collapse" data-parent="#accordion">
            <div class="card-body">
              <?php the_content() ; ?>
            </div>
          </div>
        </div>

        <?php
        endwhile;
        endif;
        ?>

      </div>
    </div>
  </section>

</main>

<?php get_footer(); ?> 