<form class="navbar-form navbar-left" id="search" method="get" action="<?php bloginfo('url'); ?>">
  <div class="form-group col-xs-9">
    <input type="text" name="s" class="form-control" placeholder="Search">
  </div>
  <button type="submit" class="btn btn-default" value="<?php the_search_query(); ?>"><span class="glyphicon glyphicon-search"></span></button>
</form>