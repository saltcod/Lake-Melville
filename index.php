<?php get_header(); ?>

<div id="content" class=" wrap clearfix">

	<div id="inner-content" class="wrap clearfix">

		<div id="main" class="clearfix" role="main">

			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

			<article id="post-<?php the_ID(); ?>" <?php post_class( 'clearfix' ); ?> role="article">
				<h2 class="post-title">
					<a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a>
				</h2> 
			</article> <?php // end article ?>

		<?php endwhile; ?>

		<?php if ( function_exists( 'bones_page_navi' ) ) { ?>
		<?php bones_page_navi(); ?>
		<?php } else { ?>
		<nav class="wp-prev-next">
			<ul class="clearfix">
				<li class="prev-link"><?php next_posts_link( __( '&laquo; Older Entries', 'bonestheme' )) ?></li>
				<li class="next-link"><?php previous_posts_link( __( 'Newer Entries &raquo;', 'bonestheme' )) ?></li>
			</ul>
		</nav>
		<?php } ?>

	<?php else : ?>

	<article id="post-not-found" class="hentry clearfix">
		<header class="article-header">
			<h1><?php _e( 'Oops, Post Not Found!', 'bonestheme' ); ?></h1>
		</header>
		<section class="entry-content">
			<p><?php _e( 'Uh Oh. Something is missing. Try double checking things.', 'bonestheme' ); ?></p>
		</section>
		<footer class="article-footer">
			<p><?php _e( 'This is the error message in the index.php template.', 'bonestheme' ); ?></p>
		</footer>
	</article>

<?php endif; ?>

</div> <?php // end #main ?>


</div> <?php // end #inner-content ?>

</div> <?php // end #content ?>

<?php get_footer(); ?>
