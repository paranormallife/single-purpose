<?php get_header(); ?>

<!-- FRONT-PAGE.PHP ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->


<?php
    $post_content = get_the_content(); 
    $post_image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail', false, '' ); 
?>

<main>
    <div class="homepage-content">
        <?php if ( have_posts() ) : ?>
            <?php while ( have_posts() ) : the_post(); ?>
                <?php the_content(); ?>
            <?php endwhile; ?>
        <?php endif; ?>
    </div>
    <div class="homepage-blurb">
        <?php echo get_option('homepage-blurb'); ?>
    </div>
    <div class="homepage-news content">
        <div class="news-title">News</div>
    <?php
        $the_query = new WP_Query( array( 'post_type' => 'post', 'order' => 'DESC', 'posts_per_page' => 1 ) );
        while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
            <div class="latest-post">
                <span class="timestamp"><?php the_time('F j, Y'); ?></span>
                <span class="excerpt">
                    <h2><?php the_title(); ?></h2>
                    <div><?php the_excerpt(); ?></div>
                </span>
            </div>
        <?php endwhile; wp_reset_postdata(); ?>
        <div class="news-button">
            <a href="<?php echo get_bloginfo('wpurl'); ?>/news">Read More</a>
        </div>
    </div>
</main>

<?php get_footer(); ?>