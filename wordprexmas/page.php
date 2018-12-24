<?php get_header(); ?>

<main role="main">
  <section class="jumbotron text-center">
    <div class="container">

      <?php
      if( have_posts() ):
        while( have_posts() ):

          the_post();
      ?>

        <h1 class="jumbotron-heading"><?php the_title(); ?></h1>
        <h3>(page.php : template page détail)</h3>
        <?php the_content(); ?>

        <?php
        // Si la page à une image "mise en avant", on l'affiche.
        if(get_the_post_thumbnail_url()): ?>
          <img class="card-img-top" src="<?php the_post_thumbnail_url() ?>" alt="Card image cap">
        <?php endif; ?>

      <?php
        endwhile;
      endif;
      ?>
    </div>
  </section>
</main>

<?php get_footer(); ?> 