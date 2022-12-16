
<!-- z szablonu HTML wyciecie header i footer, wrzucenie zawartosci do 2 plikow, nastepnie import za pomoca php GET -->


<?php 
get_header();
?>
<!-- Categories Section -->
<section class="single-posts">
    <div class="container-single">
        <div class="single"> <?php

// pobieramy informacje o aktualnym poście
global $post;

// ustawiamy szablon nagłówka


// pobieramy treść pojedynczego artykułu
while ( have_posts() ) : the_post();

  // wyświetlamy tytuł artykułu
  the_title( '<h1>', '</h1>' );

  // wyświetlamy treść artykułu
  the_content('<p>', '</p>');

  // wyswietlamy obrazy artykulu
  the_post_thumbnail();

endwhile;

// ustawiamy szablon stopki

?></div>
   

           
</div>
</section>
<!-- End About Us Area -->



<!-- Footer Area -->
<?php 
get_footer();
?>