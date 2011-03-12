<?php get_header(); ?>
	
	<!-- posts -->
	<div id="posts_contain">

	<?php if (have_posts()) : ?>

		<?php while (have_posts()) : the_post(); ?>


			<div <?php post_class() ?> id="post-<?php the_ID(); ?>">



				<div class="post_header">
					<div class="post_header_left">
						<h2><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
						<div class="post_info"><small><?php edit_post_link('(Edit)', '', ' - '); ?><?php the_time('F jS, Y') ?> <!-- by <?php the_author() ?> --> Posted in <?php the_category(', ') ?></small></div>
					</div>


					<div class="post_header_right">
						<div class="post_date"><?php the_time('M') ?>, <?php the_time('d') ?> 20<?php the_time('y') ?></div>
						<div class="post_comment_count"><?php comments_popup_link('No Comments &#187;', '<div class="comment_ico"></div> 1 Comment &#187;', '<div class="comment_ico"></div> % Comments &#187;'); ?></div>
					</div>
				</div><!-- End post_header -->



				
				<div class="post_content">
					<?php the_content('Read the rest of this entry &raquo;'); ?>
					<?php wp_link_pages(array('before' => '<div class="post_page_selection"><strong>Pages:</strong> ', 'after' => '</div>','pagelink' => '&nbsp;%&nbsp;', 'next_or_number' => 'number')); ?>
				</div> <!-- end post_content -->

				
				<div class="post_footer">
					<?php the_tags('<div class="post_tags"><div class="tags_icon"></div>', ', ', '</div>'); ?>

				</div><!-- end post_footer -->


			</div> <!-- end class entry -->

			<?php comments_template(); ?>


		<?php endwhile; ?>
		<div class="navigation">
			<div class="alignleft"><?php next_posts_link('<span>Older Entries</span>') ?></div>
			<div class="alignright"><?php previous_posts_link('<span>Newer Entries</span>') ?></div>
		</div>

		<?php else : ?>
			<h2 class="center">Not Found</h2>
			<p class="center">Sorry, but you are looking for something that isn't here.</p>
			<?php get_search_form(); ?>
		<?php endif; ?>

	</div><!-- end posts_contain -->


</div><!-- end left_col -->








<div id="right_col">
	
	<?php get_sidebar(); ?>
	

</div><!-- end right_col -->

<?php wp_footer(); ?> <!-- end main_center -->


</div>


</body>
</html>

