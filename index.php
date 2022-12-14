
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
            <h2 class="title-text">We are a passionate of nature:</h2>
            <p class="para ml-0">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quod eaque totam nihil quasi eligendi provident perspiciatis aliquid quia consequatur, illum labore excepturi exercitationem dolor possimus? Optio quam voluptatum placeat autem, aspernatur quisquam doloribus. Ad veniam cumque odit, expedita temporibus laborum.</p>
            </div>
            <div class="people-area"> 
                <div class="flex about-photo">
                <img src="<?php echo $image_url; ?>" alt="Human photo" class="about-img">
                <span class="title-text">Peter Wool</span>
            </div>
            <div class="flex about-photo">
                <img src="<?php echo $image_url; ?>" alt="Human photo" class="about-img">
                <span class="title-text">Peter Wool</span>
            </div>
            <div class="flex about-photo">
                <img src="<?php echo $image_url; ?>" alt="Human photo" class="about-img">
                <span class="title-text">Peter Wool</span>
            </div>
        </div>
           
    </div>
</section>
<!-- End About Us Area -->



<!-- Footer Area -->
<?php 
get_footer();
?>