<form class="form-group" action="<?php echo home_url('/')?>" method="get">
  <input type="search" class="input-control mr-sm-2" placeholder="Search" value='<?php echo get_search_query(); ?>' name="s">
  <button class="btn btn-submit" type="submit"><img src="<?php echo get_template_directory_uri() ?>/assets/img/search.png"/></button>
</form>