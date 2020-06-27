<?php
/**
 * Header file for the Twenty Twenty WordPress default theme.
 *
 *
 * @package WordPress
 * @subpackage Tech
 */

?><!DOCTYPE html>

<html class="no-js" <?php language_attributes(); ?>>

	<head>

		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1.0" >

		<link rel="profile" href="https://gmpg.org/xfn/11">

		<?php wp_head(); ?>

	</head>

	<body <?php body_class(); ?>>

		<?php
		wp_body_open();
		?>

		<header id="header" class="">
		<nav>
			<div>
				<h1>T-shirts</h1>
			</div>
			<ul>
				<li>
					<a href="<?php echo esc_url( '/' ); ?>" title="">
						Home
					</a>
				</li>
				<li>
					<a href="<?php echo esc_url( '/shop' ); ?>" title="">
						Shop
					</a>
				</li>
				<li>
					<a href="<?php echo esc_url( '/cart' ); ?>" title="">
						Cart
					</a>
				</li>
				<?php 
				if(class_exists('woocommerce')){

					if(is_user_logged_in()){
				?>
						<li>
							<a href="<?php echo esc_url( '/my-account' ); ?>" title="">
								Account
							</a>
						</li>
					<?php } else { ?>
						<li>
							<a href="<?php echo esc_url(wp_login_url()); ?>" title="">
								Login
							</a>
						</li>
						<li>
							<a href="<?php echo esc_url(wp_registration_url()); ?>" title="">
								Register
							</a>
						</li>

					<?php }  ?>

				<?php } ?>
			</ul>
		</nav>
	</header>
