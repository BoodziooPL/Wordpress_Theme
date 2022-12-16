<?php

// pobieramy informacje o wyszukiwanym zapytaniu
$search_query = get_search_query();

// ustawiamy szablon nagłówka
get_header();

// sprawdzamy, czy zostały znalezione jakieś wyniki wyszukiwania
if ( have_posts() ) : ?>

<h1>Wyniki wyszukiwania dla: <?php echo $search_query; ?></h1>
  
<div class="single">
  <?php
  // wyświetlamy listę artykułów

  
while ( have_posts() ) : the_post(); ?>

    <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
    <?php the_excerpt(); ?>
    
  <?php endwhile;




else :
  // wyświetlamy komunikat, jeśli nie znaleziono żadnych wyników wyszukiwania

  echo '<p>Niestety, nie znaleziono żadnych wyników wyszukiwania dla: ' . $search_query . '</p>';

endif;

// ustawiamy szablon stopki
get_footer();

