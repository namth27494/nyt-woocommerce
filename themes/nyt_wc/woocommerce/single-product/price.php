<?php
/**
 * Single Product Price, including microdata for SEO
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/single-product/price.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @author  WooThemes
 * @package WooCommerce/Templates
 * @version 2.4.9
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

global $product;

$regular_price = (float) $product->regular_price;
$price = (float) $product->price;

?>
<figcaption class="item-price-container">
	<?php if ( $regular_price != $price ) : ?>
	<span class="old-price"><?php echo get_woocommerce_currency_symbol(get_woocommerce_currency()) . number_format($regular_price, 2) ?></span>
	<?php endif; ?>
	<span class="item-price"><?php echo get_woocommerce_currency_symbol(get_woocommerce_currency()) . number_format($price, 2) ?></span>
</figcaption>
