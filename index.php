<?php

/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package coolmat
 */

get_header();
?>

<main id="primary" class="site-main">
	<section class="hero">
		<div class="hero-inner container">
			<h1 class="hero-text">
				<span class="hero-sitename ">
					<?php bloginfo('name')  ?>
				</span>
				fried seaweed roll
			</h1>

			<p class="hero-description">
				<span class="magenta">
					<?php bloginfo('name')  ?></span> is a restaurant that creates future flavor nostalgia of street food.
			</p>
		</div>
	</section>

	<section class="intro" id="home">
		<div class="intro-inner container">
			<h2 class="intro-title ">Introducing Cool Mat </h2>
			<p class="intro-description">
				street food that was born in tough times.
				street food that everybody loves.<br>
				<span class="yellow"> <?php bloginfo('name') ?></span> is on a mission to provide future
				flavor nostalgia of street food for men,
				women, children, grandpas and grandmas.
				we only use the best ingredients.
			</p>
		</div>
	</section>

	<section class="menu-list" id='menu'>
		<h2 class="menu-list-title">Menu</h2>
		<div class="menu-list-grid">
			<?php
			if (have_posts()) :

				if (is_home() && !is_front_page()) :
			?>
					<header>
						<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
					</header>
			<?php
				endif;
				$item_number = 1;
				/* Start the Loop */
				while (have_posts()) :
					the_post();
					get_template_part('template-parts/content', get_post_type());
					$item_number++;

				endwhile;

				the_posts_navigation();

			else :

				get_template_part('template-parts/content', 'none');

			endif;
			?>

		</div>
	</section>

	<section class='direction' id="direction">
		<div class="container">
			<h2 class="direction-title">Directions to cool mat</h2>
			<div class="locations">
				<div class="map">
					<div class="map-inner ">
						<iframe class="embedded-map" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12651.813545248733!2d126.864375!3d37.556162!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x357c9c03c38738ad%3A0x1eff909f2c04315c!2s284-10%20Yeomchang-dong%2C%20Gangseo-gu%2C%20Seoul%2C%20South%20Korea!5e0!3m2!1sen!2suk!4v1649600888650!5m2!1sen!2suk" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
					</div>
				</div>

				<div class="location-info">
					<div class="location-description">
						<h3>Business Name</h3>
						<p>cool mat</p>

						<h3>Address</h3>
						<p>284-10 Yeomchang-dong, Gangseo-gu, Seoul</p>

						<h3>Phone Number</h3>
						<p>02-9999-9999
						</p>

						<h3>Direction</h3>
						<p>Get out of gate 3 and walk straight down for about
							200 meters. You will see Cool Mat on your left.</p>

					</div>
				</div>
			</div>
		</div>
	</section>

</main><!-- #main -->

<?php
get_footer();
