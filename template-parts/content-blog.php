<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package creator
 */

?>
<li class="blog-post">
			<?php creator_post_thumbnail(); ?>
			<?php
			if ( is_singular() ) :
				the_title( '<h1 class="entry-title">', '</h1>' );
			else :
				the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
			endif;

			if ( 'post' === get_post_type() ) :
				?>
				<div class="entry-meta">
					<?php
					creator_posted_on();
					creator_posted_by();
					?>
				</div><!-- .entry-meta -->
			<?php endif; ?>

		<div class="entry-content">
			
		</div><!-- .entry-content -->
</li>
