<?php get_header(); ?>
<div class="site-content">
	<div class="container">
		<section class="recent-posts">
	        <div class="section-title">
	        	<?php if ( have_posts() ) : ?>
	        	<h2><span>
	        		<?php 
				$archive_title = sprintf(
			'%1$s %2$s',
			'<span>' . __( 'Search:', 'shape' ) . '</span>',
			'&ldquo;' . get_search_query() . '&rdquo;'
		); ?>
	        	</span></h2>
	        </div>
			<div class="row masonrygrid listrecent">
<?php while ( have_posts() ) : the_post(); ?>
<?php get_template_part('content'); ?>
<?php endwhile; ?>
			</div>
			<div class="clear"></div>
			<!-- pagination -->
			<div class="bottompagination">
				<div class="navigation" id="blog-pager">
			<?php pagenavi(); ?>
				</div>
			</div>
			<?php else : ?>
                <!--NOT FOUND-->
            <?php endif; ?>
		</section>
	</div>
</div>
<?php get_footer(); ?>
