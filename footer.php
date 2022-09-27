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
            <?php if( have_rows('add_social_icon', 'options') ): ?>
            <ul class="social">
                <?php while( have_rows('add_social_icon', 'options') ): the_row();
			        $icon = get_sub_field('label', 'options');
			        $link = get_sub_field('link_page', 'options');
			        $popup = get_sub_field('add_popup_type', 'options');
			        $icon_tag = '<i class="fab fa-'.$icon.'></i>';
			    ?>
                <?php// var_dump($popup); ?>
                <li class="stay-tuned-item <?php echo $icon; ?>">
                    <?php echo do_shortcode( '[popup_trigger id="'.$popup->ID.'" tag="a" classes="stay-tuned-link" do_default]'.$icon_tag.'[/popup_trigger]' ) ?>

                </li>
                <?php endwhile; ?>
            </ul>
            <?php endif; ?>


            <?php if( have_rows('logo_partners', 'options') ): ?>
            <ul class="area-logo">
                <?php while( have_rows('logo_partners', 'options') ): the_row();
					$logo_footer = get_sub_field('add_logo', 'options');
					$logo_link = get_sub_field('add_logo_link', 'options');
					$imag_tag = '<img src="'.$logo_footer['sizes']['large'].'" alt="footer-logo">';
				?>
                <li>
                    <?php echo do_shortcode( '[popup_trigger id="'.$logo_link->ID.'" tag="a" classes="stay-tuned-link" do_default]'.$imag_tag.'[/popup_trigger]' ) ?>
                </li>
                <?php endwhile; ?>
            </ul>
            <?php endif; ?>

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