<?php
/**
 * Footer
 */
?>

<!-- BEGIN of footer -->
<div class="before-footer-area">
    <div class="row row-custom">
        <div class="large-3 medium-6 columns">
            <?php get_sidebar( 'footer-left' ); ?>
        </div>

        <div class="large-3 medium-6 columns">
            <?php get_sidebar( 'footer-center' ); ?>
        </div>

        <div class="large-3 medium-6 columns">
            <?php get_sidebar( 'footer-right' ); ?>
        </div>

        <div class="large-3 columns footer-logo-area">

            <ul class="social">
                <li class="stay-tuned-item instagram">
                    <a class="pum-trigger popmake-259 stay-tuned-link" data-do-default="1" style="cursor: pointer;">
                        <i class="fab fa-instagram"></i>
                    </a>
                </li>

                <li class="stay-tuned-item facebook-f">
                    <a class="pum-trigger popmake-831 stay-tuned-link" data-do-default="1" style="cursor: pointer;">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                </li>

                <li class="stay-tuned-item twitter">
                    <a class="pum-trigger popmake-835 stay-tuned-link" data-do-default="1" style="cursor: pointer;">
                        <i class="fab fa-twitter"></i>
                    </a>
                </li>
            </ul>

            <ul class=" area-logo">
                <li>
                    <a class="pum-trigger popmake-558 stay-tuned-link" data-do-default="1" style="cursor: pointer;">
                        <img src="https://ccgcfcu.com/wp-content/uploads/2019/01/ncua-logo.png" alt="footer-logo">
                    </a>
                </li>
            </ul>
        </div>
    </div>
</div>
<footer class="footer">
    <div class="row row-custom">
        <div class="large-12 columns">
            <?php
			if (has_nav_menu('footer-menu')) {
				wp_nav_menu( array(
					'theme_location' => 'footer-menu',
					'menu_class' =>  'footer-menu',
					'depth'      =>  1,
				)
			);
			}
			?>
        </div>
        <div class="columns copy-area">
            <?php if($copyright = get_field('copyright', 'options')): ?>
            <p>
                <span><?php _e('Copyright', 'Gulf Coast') ?></span> <?= date('Y') ; ?> <?php echo $copyright ; ?>
            </p>
            <?php endif ; ?>
        </div>
        <?php if($policy = get_field('policy', 'options')): ?>
        <div class="columns policy-area">
            <?php echo $policy ; ?>
        </div>
        <?php endif ; ?>
    </div>
</footer>
<!-- END of footer -->

<?php wp_footer(); ?>
</body>

</html>