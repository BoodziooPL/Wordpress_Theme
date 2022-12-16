</main>
<footer>
    <section class="footer-area">
        <div class="container">
            <div class="info-area">
                <span class="title-text">Wordpress Theme:001</span> 
            </div>
            <div>
                <span class="title-text">Links:</span>
                <?php
                //rejestracja navigacji menu
                if(has_nav_menu('footer-menu')){
                    wp_nav_menu( array(
                        'theme_location' => 'footer-menu',
                        'container' => '',
                        'items_wrap' => '<ul>%3$s</ul>'
                    ));
                    // kod wywoluje menu glowne o nazwie footer-menu nie "owija" w zaden kontener (container) i itemy printuje w tagu <ul>
                }
                ?>
                

        </div>
        <div>
            <span>&copy All Rights Reserved</span>
            <a href="https://github.com/BoodziooPL" class="link">Created By Boguslaw M.</a>
        </div>
    </div>
        
    </section>
</footer>
<!-- End Footer Area -->

</body>
</html>