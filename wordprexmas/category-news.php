<?php

// Ce template va lister TOUS les articles liés à la catégorie dont le slug est "news".

?>

<?php get_header(); ?>

<main role="main">

	<section class="py-5 bg-light">
		<div class="px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
      <h1 class="display-4">News</h1>
      <h3>(category-news.php : template dédié aux articles liés à la catégorie "News")</h3>
		</div>
		<div class="container">
			<div class="row">

				<?php
				if( have_posts() ):
					while( have_posts() ):

						the_post();
						?>
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

</main>


<?php get_footer(); ?>