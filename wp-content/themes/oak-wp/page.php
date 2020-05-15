<?php get_header(); ?>

<main>
    <?php if (have_posts()): the_post(); ?>
        <div>
            <h1><?php the_title(); ?></h1>
            <p><?php the_post_thumbnail(); ?></p>
            <p><?php the_content(); ?></p>
        </div>
    <?php endif; ?>
</main>

<?php get_footer(); ?>