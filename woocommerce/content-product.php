<?php   global $product;  ?>
<article <?php post_class('universal_mas_item'); ?>>

        <div class="shop-item">
            <div class="badge pricing"><?php woocommerce_template_loop_price(); ?></div>
            <div class="badge pricing sale"><?php esc_html_e( 'Sale', 'universal-wp' )?></div>
            <div class="badge pricing featured"><?php esc_html_e( 'Trend', 'universal-wp' )?></div>
            <?php woocommerce_template_loop_add_to_cart() ?>
            <a href="<?php echo get_the_permalink() ?>">
                <?php the_post_thumbnail('universal_shop_main'); ?>
            </a>
        </div>
        <a href="<?php echo get_the_permalink() ?>">
              <h5><?php echo get_the_title() ?></h5>
        </a>

</article>