<?php

// Pobieramy wszystkie posty z WordPress
$posts = get_posts( array(
    'numberposts' => -1 // -1 oznacza pobranie wszystkich postów
) );

// Jeśli pobraliśmy jakieś posty, to je wyświetlamy
if ( $posts ) {
    foreach ( $posts as $post ) {
  
        ?>
        <article class="blog-post">
            <div class="post-thumbnail">
                <img src="<?php echo get_the_post_thumbnail_url( $post->ID ); ?>" alt="" class="post-img">
            </div>
            <div class="post-info">
                <div class="post-author">
                    <a href="<?php echo get_author_posts_url(get_the_author_meta('ID'))?>"><span class="author-text"><?php echo get_the_author( $post->ID ); ?> <?php echo get_the_date( '', $post->ID ); ?></span></a>
                </div>
                <div class="post-title">
                    <a href="<?php the_permalink(); ?>"><span class="title-text"><?php echo get_the_title( $post->ID ); ?></span></a>
                </div>
                <div class="post-content">
                    <p class="para"><?php echo get_the_excerpt( $post->ID ); ?></p>
                </div>
            </div>
        </article>
    <?php }
}

?>