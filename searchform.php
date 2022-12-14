<form class="form-group" action="<?php echo home_url('/')?>">
                    <input type="search" class="input-control mr-sm-2" placeholder="Search" value='<?php echo get_search_query(); ?>' name="s">
                    <!-- podanie sciezki do pliku png za pomoca bloginfo templateURL -->
                    <button class="btn btn-submit" type="submit"><img src="<?php echo get_template_directory_uri() ?>/assets/img/search.png"/></button>
                </form> 