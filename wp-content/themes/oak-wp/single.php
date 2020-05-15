<?php get_header(); ?>

<main>
    <?php if (have_posts()): the_post(); ?>
        <div>
            <h1><?php the_title(); ?></h1>
            <small><?php the_time('M d, Y'); ?></small>
            <p><?php the_post_thumbnail(); ?></p>
            <p><?php the_content(); ?></p>
        </div>
    <?php endif; ?>
</main>

<?php get_footer(); ?>