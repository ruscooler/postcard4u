<?php
/**
 * Single Product tabs
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/single-product/tabs/tabs.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see 	https://docs.woocommerce.com/document/template-structure/
 * @author  WooThemes
 * @package WooCommerce/Templates
 * @version 2.4.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Filter tabs and allow third parties to add their own.
 *
 * Each tab is an array containing title, callback and priority.
 * @see woocommerce_default_product_tabs()
 */
$tabs = apply_filters( 'woocommerce_product_tabs', array() );

if ( ! empty( $tabs ) ) : ?>

	<div class="woocommerce-tabs wc-tabs-wrapper" id="scroll-here">
		<ul class="tabs wc-tabs" role="tablist">
<!--			--><?php //foreach ( $tabs as $key => $tab ) : ?>
<!--				<li class="--><?php //echo esc_attr( $key ); ?><!--_tab" id="tab-title---><?php //echo esc_attr( $key ); ?><!--" role="tab" aria-controls="tab---><?php //echo esc_attr( $key ); ?><!--">-->
<!--					<a href="#tab---><?php //echo esc_attr( $key ); ?><!--">--><?php //echo apply_filters( 'woocommerce_product_' . $key . '_tab_title', esc_html( $tab['title'] ), $key ); ?><!--</a>-->
<!--				</li>-->
<!--			--><?php //endforeach; ?>
            <li class="description_tab active" id="tab-title-description" role="tab" aria-controls="tab-description">
                <a href="#tab-description">Редактирование открытки</a>
            </li>
		</ul>
<!--		--><?php //foreach ( $tabs as $key => $tab ) : ?>
<!--			<div class="woocommerce-Tabs-panel woocommerce-Tabs-panel----><?php //echo esc_attr( $key ); ?><!-- panel entry-content wc-tab" id="tab---><?php //echo esc_attr( $key ); ?><!--" role="tabpanel" aria-labelledby="tab-title---><?php //echo esc_attr( $key ); ?><!--">-->
<!--				--><?php //call_user_func( $tab['callback'], $key, $tab ); ?>
<!--			</div>-->
<!--		--><?php //endforeach; ?>
        <?php
        $url = $_SERVER['REQUEST_URI'];
        $tokens = explode('/', $url);
        $productId = $tokens[sizeof($tokens)-2]; ?>
        <div class="woocommerce-Tabs-panel woocommerce-Tabs-panel--description panel entry-content wc-tab" id="tab-description" role="tabpanel" aria-labelledby="tab-title-description" style="display: none;">
            <iframe src="http://edit.theprintingbox.com/postcard-edit?productId=<?php echo $productId;  ?>" width="1008" height="500" frameborder="0" scrolling="no">
            </iframe>
        </div>
	</div>

<?php endif; ?>
