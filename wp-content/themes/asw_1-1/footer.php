<!-- FOOTER.PHP ++++++++++++++++++++++ -->


<?php if ( have_posts() ) : ?>
    <?php while ( have_posts() ) : the_post(); 
    $post_image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail', false, '' ); ?>
        <?php if( $post_image != '' ) { ?>
            <div class="footer-image page-width" style="background-image: url('<?php echo $post_image[0]; ?>');">
                <img src="<?php echo $post_image[0]; ?>" />
            </div>
        <?php } ?>
    <?php endwhile; ?>
<?php endif; ?>


<div class="footer-wrapper">
    <footer class="page-width">
        <div class="footer-contact">
            <div>
                <a href="mailto:<?php echo get_option('email'); ?>">
                    <i class="fas fa-envelope-square"></i>
                </a>
                <a href="<?php echo get_option('facebook'); ?>" target="_blank">
                    <i class="fab fa-facebook-square"></i>
                </a>
            </div>
            <div class="address"><span>291 Mill Street,</span> <span>Poughkeepsie, NY 12601</span></div>
            <div class="phone"><a href="tel:<?php echo get_option('phone'); ?>"><?php echo get_option('phone'); ?></a></div>
        </div>
        <div class="copyright">
            <div>&copy; <?php echo date('Y'); ?> Single Purpose Sober Club</div>
            <div class="credit"><a href="https://asubtleweb.com" target="_blank">A subtle website.</a></div>
        </div>
    </footer>
</div>


<?php /* Include this so the admin bar is visible. */ wp_footer(); ?>

</body>
</html>