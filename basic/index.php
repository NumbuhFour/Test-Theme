<?php get_header(); ?>


					<div id="jumbotron">
<iframe width="560" height="315" src="https://www.youtube.com/embed/liqNk78_6wk" frameborder="0" allowfullscreen></iframe>
					</div>

<div id="main-container" class="clearfix">
	<main id="content">
	<?php do_action( 'basic_main_content_inner_begin' ); ?>


<?php if (have_posts()) :
	while (have_posts()) : the_post(); 

		get_template_part( 'content' ); 

	endwhile; ?>

	<?php

	the_posts_pagination( apply_filters( 'basic_posts_pagination_args', array(
		'mid_size' => 2,
		'prev_text' => __( '&laquo; Prev', 'basic'),
		'next_text' => __( 'Next &raquo;', 'basic'),
	) ) );


else: ?>

	<div class="post clearfix">		
	    <h2><?php _e( 'Posts not found', 'basic' ); ?></h2>
	    <?php get_search_form(); ?>
	</div>
		
<?php endif; ?>

	<?php do_action( 'basic_main_content_inner_end' ); ?>
	</main> 
	<!-- END #content -->
	
<?php get_sidebar(); ?>

</div>
<?php get_footer(); ?>
