<?php
/**
 * Created by PhpStorm.
 * User: veraksoff
 * Date: 23.09.2019
 * Time: 23:32
 */
?>


<form role="search" method="get" id="searchform" action="<?php echo home_url( '/' ) ?>" >
    <div class="search-widget">
        <div class="input-group mb-3">
                <input type="text" class="form-control" placeholder="Search..." value="<?php echo get_search_query() ?>" name="s" id="s" />
                <div class="input-group-append">
                    <button class="btn btn-search" type="submit" id="searchsubmit"><i class="fas fa-search"></i></button>
                </div>
        </div>
    </div>
</form>