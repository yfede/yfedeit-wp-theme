<?php get_header(); ?>
	
	<!-- posts -->
	<div id="posts_contain">

	<?php if (have_posts()) : ?>

		<?php while (have_posts()) : the_post(); ?>


			<div <?php post_class() ?> id="post-<?php the_ID(); ?>">



				<div class="post_header">
						<h2><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
				</div><!-- End post_header -->



				
				<div class="post_content">
					<?php the_content('Read the rest of this entry &raquo;'); ?>
					<?php wp_link_pages(array('before' => '<div class="post_page_selection"><strong>Pages:</strong> ', 'after' => '</div>','pagelink' => '&nbsp;%&nbsp;', 'next_or_number' => 'number')); ?>
				</div> <!-- end post_content -->

				
				<div class="post_footer">
					<small><?php edit_post_link('(Edit)', '', ' - '); ?>Posted on <?php the_time('F jS, Y') ?> <!-- by <?php the_author() ?> --> in <?php the_category(', ') ?>. <?php comments_popup_link('No Comments &#187;', '1 Comment &#187;', '% Comments &#187;'); ?></small>
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

