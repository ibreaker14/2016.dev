<?php
/**
 * The template part for displaying content
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php if ( is_sticky() && is_home() && ! is_paged() ) : ?>
			<span class="sticky-post"><?php _e( 'Featured', 'twentysixteen' ); ?></span>
		<?php endif; ?>

		<?php the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>
	</header><!-- .entry-header -->

	<?php twentysixteen_excerpt(); ?>

	<?php twentysixteen_post_thumbnail(); ?>

	<div class="entry-content">
		<?php
			if(get_post_meta(get_the_ID(),'Price',true)){//if it exists
				$country_price = get_post_meta(get_the_id(),'Price',true);//displays Price custom Field 
				echo "It costs $". $country_price." to go <br>";
			}

			//displays TYPES price custom field
			if(get_post_meta(get_the_ID(),'wpcf-start-date',true)){//if it exists
				$types_country_price = get_post_meta(get_the_id(),'wpcf-start-date',true);//displays Price custom Field 
				echo "The original price was $". $types_country_price."<br>";
			}

			//display date field
			if(get_post_meta(get_the_ID(),"start-date",true)){
			$display_date=date("F d, Y", strtotime(get_post_meta($post->ID,"start-date",true)));
			echo "Trip began on: ". $display_date. "<br>";
			}

			//display planes field
			if(get_post_meta(get_the_id(),'Planes',true)){
			$plane_type = get_post_meta(get_the_id(),'Planes',true);
			echo "You can get there by flying: ". $plane_type . "<br>";
			}

			/* translators: %s: Name of current post */
			echo "<small><br>Today's date: " . date("F d,Y") . " at " . date("h:ia") . "<br></small>";
			echo "<br>";
			the_content();

			wp_link_pages( array(
				'before'      => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'twentysixteen' ) . '</span>',
				'after'       => '</div>',
				'link_before' => '<span>',
				'link_after'  => '</span>',
				'pagelink'    => '<span class="screen-reader-text">' . __( 'Page', 'twentysixteen' ) . ' </span>%',
				'separator'   => '<span class="screen-reader-text">, </span>',
			) );
		?>
	</div><!-- .entry-content -->

	<footer class="entry-footer">
		<?php twentysixteen_entry_meta(); ?>

		<?php echo get_the_term_list($post->ID,'country-taxonomy','<div class="content-item">','<br>','</div><br>');//display categories
		?>

		<?php
			edit_post_link(
				sprintf(
					/* translators: %s: Name of current post */
					__( 'Edit<span class="screen-reader-text"> "%s"</span>', 'twentysixteen' ),
					get_the_title()
				),
				'<span class="edit-link">',
				'</span>'
			);
		?>
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->
