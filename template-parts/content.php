<?php

/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package coolmat
 */
global $item_number;
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<!-- Title on the left -->
		<h1 class="entry-title">
			<?php the_title() ?>
		</h1>

		<div class="entry-number">
			<span>
				<?php echo $item_number ?>
			</span>
		</div>

		<!-- Price (content) on the right -->
		<div class="entry-price">
			<?php the_content() ?>
		</div>
	</header><!-- .entry-header -->

	<div class="post-thumbnail">
		<?php the_post_thumbnail(); ?>
	</div><!-- .post-thumbnail -->

</article><!-- #post-<?php the_ID(); ?> -->
