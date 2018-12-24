<footer class="Footer text-muted">
      <div class="container">
        <p class="float-right">
          <a href="#">Back to top</a>
        </p>
        <p><?php bloginfo('name') ;?> &copy; <?php echo date('Y'); ?></p>

	      <?php
	      // On génère le "menu" ayant "footer" comme "location" (emplacement en fr).
	      // Docs : https://developer.wordpress.org/reference/functions/wp_nav_menu/

	      // Pour rappel : les emplacements des menus sont définis dans le
	      // fichier functions.php et assignés au(x) menu(s) dans le backoffice
	      // (Apparence/Menu).
	      wp_nav_menu(array(
		      'theme_location' => 'footer',

		      // Le(s) param(s) ci-dessous demande à WP d'ajouter certaines
		      // classes/id aux balises générées afin de correspondre au mieux à
          // votre squelette HTML/CSS.
		      'menu_class' => 'list-unstyled Footer__menu',
	      ));
	      ?>
      </div>
    </footer>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>


    <script src="<?php bloginfo('template_directory') ;?>/js/app.js"></script>

    <?php wp_footer(); ?>
  </body>
</html>