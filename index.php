
<!-- z szablonu HTML wyciecie header i footer, wrzucenie zawartosci do 2 plikow, nastepnie import za pomoca php GET -->


<?php 
get_header();
?>
<!-- Categories Section -->
<section class="categories">
    <div class="container">
        <div class="flex category">
            <?php get_template_part('templates/temp/categories','content')?>
        </div>
    </div>
</section>
<!-- End Categories Section -->
<!-- Post Area -->
<section class="post-area">
    <div class="wrapper">
        <div class="articles">
            <?php
            // Wczytywanie artykulow na stronę
            get_template_part('templates/temp/post','content');
            ?>
           
        </div>
    </div>
</section>
<!-- End Post Area -->

<!-- About Us Area -->
<section class="about-area">
    <div class="wrapper">
        <div class="about-us">
            <!-- w h2 odwolanie sie do zapisu funkcji title w customizer.php sluzy do dynamicznej modyfikacji zawartosci -->
            <h2 class="title-text"><?php echo get_theme_mod('title') ?></h2>
            <!-- w p odwolanie sie do zapisu funkcji description w customizer.php sluzy do dynamicznej modyfikacji zawartosci -->
            <p class="para ml-0"><?php echo get_theme_mod('description') ?></p>
            </div>
            <div class="people-area"> 
            <div class="flex about-photo">
                <!-- odwolanie sie do Human Img1 z funkcji w customizer.php -->
                 <img src="<?php echo get_theme_mod('Human Img1') ?>" alt="Human photo" class="about-img">
                <span class="title-text"><?php echo get_theme_mod('Human Name1') ?></span>
            </div>
            <div class="flex about-photo">
                <!-- odwolanie sie do Human Img2 z funkcji w customizer.php -->
                 <img src="<?php echo get_theme_mod('Human Img2') ?>" alt="Human photo" class="about-img">
                <span class="title-text"><?php echo get_theme_mod('Human Name2') ?></span>
            </div>
            <div class="flex about-photo">
                <!-- odwolanie sie do Human Img3 z funkcji w customizer.php -->
                 <img src="<?php echo get_theme_mod('Human Img3') ?>" alt="Human photo" class="about-img">
                <span class="title-text"><?php echo get_theme_mod('Human Name3') ?></span>
            </div>

        </div>
           
    </div>
</section>
<!-- End About Us Area -->



<!-- Footer Area -->
<?php 
get_footer();
?>