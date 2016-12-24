<?php
/*
Template Name: tags
*/
?>
<?php get_header() ?>
<div class="main block-center clearfix">
<?php get_sidebar(); ?>
    <div class="container">
        <div class="tags fadeInDownS animated" style="text-align: center;">
            <h1><?php the_title() ?></h1>
            <?php wp_tag_cloud(); ?>
        </div>
    </div>
</div>
</div>
<div id="backTop" class="hide">
    <i class="fa fa-arrow-up"></i>
</div>
<?php get_footer() ?>
