<?php get_header(); ?>

<main>
    <?php if (have_posts()): ?>
        <?php previous_posts_link('&laquo; Previous Entries'); ?>
        <?php next_posts_link('Next Entries &raquo;',''); ?>

        <?php while (have_posts()): the_post(); ?>
            <section>
                <h2>
                    <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                </h2>
                <small><?php the_time('M d, Y'); ?></small>
                <p><?php the_post_thumbnail('thumbnail'); ?></p>
                <p><?php the_excerpt(); ?></p>

                <div class="like_button_container" data-commentid="<?php the_ID(); ?>"></div>
<!--                <div class="like_button_container"></div>-->
                <h2></h2>
                <hr/>
            </section>
        <?php endwhile; ?>

        <h2></h2>
        <?php previous_posts_link('&laquo; Previous Entries'); ?>
        <?php next_posts_link('Next Entries &raquo;',''); ?>
    <?php endif; ?>
</main>

<?php get_footer(); ?>
