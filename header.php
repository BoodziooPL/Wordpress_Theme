<!DOCTYPE html>
<html <?php language_attributes(); ?>
<head>
    <meta charset="<?php bloginfo('charset');?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <?php wp_head();?>
</head>
<body>


<!-- Header Area     -->
<header class="header-area">
<div class="container">
    <nav class="nav">
        <div>   <a href="#" class="link nav-brand text-light">

        <!-- ponizej kod dodajacy mozliwosc ustawienia loga, if/else dla ustawienia nazwy strony gdy brak wgranego logo -->
            <?php if(function_exists('the_custom_logo')){
                the_custom_logo();
            }else{
            bloginfo('name');} ?>
        </a>
    </div>
     
        
        
        
        <div class="nav-items">
            <!-- toggle menu -->
            <button class="toggle-button">
                <img src="<?php bloginfo('template_url')?> /assets/img/hamburger.png" alt="hamburger menu icon">
            </button>
            <!-- navigation items -->
            <div class="collapse" id="toggle-collapse">
            <ul class="navbar-nav mr-auto">
                <li class="nav-link">
                    <a href="#" class="link text-light">Home</a>
                </li>
                <li class="nav-link">
                    <a href="#" class="link text-light">People</a>
                </li>
                <li class="nav-link">
                    <a href="#" class="link text-light">About Us</a>
                </li>
                <li class="nav-link">
                    <a href="#" class="link text-light">Contact</a>
                </li>
            </ul>
            <!-- search bar -->
            <div class="search">
                <form class="form-group">
                    <input type="search" class="input-control mr-sm-2" placeholder="Search">
                    <button class="btn btn-submit" type="submit"><img src="<?php echo get_bloginfo('template_url') ?>/assets/img/search.png"/></button>
                </form>
            </div>
        </div>
    </nav>
</div>
</div>
<div class="move-mouse">
    <img src="<?php echo get_bloginfo('template_url') ?> /assets/img/mouse-cursor.png" alt="mouseIcon" class="mouse-icon">
</div>
        
</header>
<!-- End Header Area -->
<main>