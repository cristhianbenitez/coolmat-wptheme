<?php get_header(); ?>

<main id="primary" class="site-main">
	<?php query_posts('posts_per_page=1&category_name=menu&orderby=rand'); ?>
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			<section class="hero">
				<div class="hero-inner container">
					<h1 class="hero-text">
						<span class="hero-sitename ">
							<?php bloginfo('name')  ?>
						</span>
						<?php the_title(); ?>
					</h1>

					<p class="hero-description">
						<span class="magenta">
							<?php bloginfo('name')  ?></span> <?php bloginfo('description')  ?>
					</p>
				</div>
			</section>
	<?php
		endwhile;
	endif;
	?>



	<?php query_posts('posts_per_page=1&post_type=intro'); ?>
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			<section class="intro" id="home">
				<div class="intro-inner container">
					<h2 class="intro-title"><?php the_title() ?></h2>
					<div class="intro-description">
						<?php the_content() ?>
					</div>
				</div>
			</section>
	<?php
		endwhile;
	endif;
	?>



	<section class="menu-list" id='menu'>
		<h2 class="menu-list-title">Menu</h2>
		<div class="menu-list-grid">

			<?php
			query_posts('posts_per_page=20&category_name=menu');
			if (have_posts()) :
				$item_number = 0;
				while (have_posts()) :
					the_post();
					$item_number++; ?>
					<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
						<header class="entry-header">
							<h1 class="entry-title">
								<?php the_title() ?>
							</h1>
							<div class="entry-number">
								<span>
									<?php echo $item_number ?>
								</span>
							</div>

							<div class="entry-price">
								<?php the_content() ?>
							</div>
						</header>

						<div class="post-thumbnail">
							<?php the_post_thumbnail(); ?>
						</div>

					</article>

			<?php endwhile;
			endif;
			?>

		</div>
	</section>


	<?php query_posts('posts_per_page=1&post_type=location'); ?>
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			<section class='direction' id="direction">
				<div class="container">
					<h2 class="direction-title"><?php the_title() ?></h2>
					<div class="locations">
						<div class="map">
							<div class="map-inner">
								<?php if (get_field('map')) : ?>
									<?php the_field('map') ?>
								<?php endif; ?>
							</div>
						</div>
						<div>
						</div>
						<div class="location-info">
							<div class="location-description">
								<?php the_content() ?>
							</div>
						</div>
					</div>
				</div>
			</section>
	<?php
		endwhile;
	endif;
	?>


</main>

<?php get_footer(); ?>
