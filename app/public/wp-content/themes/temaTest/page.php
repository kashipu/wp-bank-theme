<?php get_header() ?>
<div class="page__container" style="margin-top:108px">
    <div class="page__hero" style="background-image: url(<?php echo get_the_post_thumbnail_url() ?>)">
        <h1 class="page__title"><?php the_title(); ?></h1>
    </div>

</div>
<div class="page__content">
    <?php the_content(); ?>
</div>

<?php get_footer() ?>