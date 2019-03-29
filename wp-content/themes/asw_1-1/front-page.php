<?php get_header(); ?>

<!-- FRONT-PAGE.PHP ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->


<?php
    $post_content = get_the_content(); 
    $post_image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail', false, '' ); 
?>

<main>
    <div class="homepage-content page-width">
        <?php if ( have_posts() ) : ?>
            <?php while ( have_posts() ) : the_post(); ?>
                <?php the_content(); ?>
            <?php endwhile; ?>
        <?php endif; ?>
    </div>
</main>

<?php get_footer(); ?>