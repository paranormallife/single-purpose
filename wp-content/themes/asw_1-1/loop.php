<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

    <article>
        <h2><span class="timestamp"><?php the_time('F j, Y'); ?>: </span><?php the_title(); ?></h2>
        <?php the_content(); ?>
    </article>

<?php endwhile; else: ?>
<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
<?php endif; ?>