<?php
/**
 * Template Name: Snippets
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php if ( have_posts() ) : ?>

			<header class="page-header">
				<?php
					the_archive_title( '<h1 class="page-title">', '</h1>' );
					the_archive_description( '<div class="taxonomy-description">', '</div>' );
				?>
			</header><!-- .page-header -->

			<div id="list-snippets">
			<?php
				$args = array('post_type'=>'country',
							  'orderby'=>'title',
							  'order'=>'ASC',
							  'showPosts'=>300 //show max 300 posts
							   );
				$snippet = new WP_Query($args);
			?>
			<ul>
			<?php while($snippet->have_posts()) : $snippet->the_post(); ?>
				<li class="one-snippet">
					<header>
						<span <?php post_class();?>></span>
						<p> 
							<a href="<?php the_permalink(); ?>"><?php the_title();?></a>
						</p>
					</header>
				</li>
			<?php endwhile; ?>
			</ul>
			</div>

		<?php

			// Previous/next page navigation.
			the_posts_pagination( array(
				'prev_text'          => __( 'Previous page', 'twentysixteen' ),
				'next_text'          => __( 'Next page', 'twentysixteen' ),
				'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'twentysixteen' ) . ' </span>',
			) );

		// If no content, include the "No posts found" template.
		else :
			get_template_part( 'template-parts/content', 'none' );

		endif;
		?>

		</main><!-- .site-main -->
	</div><!-- .content-area -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
