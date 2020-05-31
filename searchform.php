<?php
global $template_dir;
?>
<form role="search" method="get" id="search-form" class="search-form" action="<?= esc_url( home_url( '/' ) );?>">
    <div class="input-group">
        <input class="form-control" placeholder="Zoeken" type="search" value="<?=get_search_query();?>" name="s" id="s" >
        <div class="input-group-append">
            <button id="search-submit" class="btn" type="submit">
                <span class="search-block">
                    <img class="svg" src="<?= $template_dir ?>/img/search.svg" alt="search">
                </span>
            </button>
        </div>
    </div>
</form>