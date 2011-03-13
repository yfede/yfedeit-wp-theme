<div id="sidebar_search">
			<form id="searchform" method="get" action="<?php bloginfo('home'); ?>">
			<div>
			<input type="text" name="s" id="s" />
			<input type="submit" id="searchsubmit" value="Cerca" />
			</div>
			</form>
		</div>











		<ul>
			<?php 	
					if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar() ) : ?>
			<li>
				<?php /* get_search_form(); */?>
			</li>



			<?php if ( is_404() || is_category() || is_day() || is_month() ||
						is_year() || is_search() || is_paged() ) {
			?>
			<li id="display_info">

			<?php /* If this is a 404 page */ if (is_404()) { ?>
			<?php /* If this is a category archive */ } elseif (is_category()) { ?>
			<p>You are currently browsing the archives for the <strong><?php single_cat_title(''); ?></strong> category.</p>

			<?php /* If this is a yearly archive */ } elseif (is_day()) { ?>
			<p>You are currently browsing the <a href="<?php bloginfo('url'); ?>/"><?php echo bloginfo('name'); ?></a> blog archives
			for the day <?php the_time('l, F jS, Y'); ?>.</p>

			<?php /* If this is a monthly archive */ } elseif (is_month()) { ?>
			<p>You are currently browsing the <a href="<?php bloginfo('url'); ?>/"><?php echo bloginfo('name'); ?></a> blog archives
			for <?php the_time('F, Y'); ?>.</p>

			<?php /* If this is a yearly archive */ } elseif (is_year()) { ?>
			<p>You are currently browsing the <a href="<?php bloginfo('url'); ?>/"><?php echo bloginfo('name'); ?></a> blog archives
			for the year <?php the_time('Y'); ?>.</p>

			<?php /* If this is a monthly archive */ } elseif (is_search()) { ?>
			<p>You have searched the <a href="<?php echo bloginfo('url'); ?>/"><?php echo bloginfo('name'); ?></a> blog archives
			for <strong>'<?php the_search_query(); ?>'</strong>. If you are unable to find anything in these search results, you can try one of these links.</p>

			<?php /* If this is a monthly archive */ } elseif (isset($_GET['paged']) && !empty($_GET['paged'])) { ?>
			<p>You are currently browsing the <a href="<?php echo bloginfo('url'); ?>/"><?php echo bloginfo('name'); ?></a> blog archives.</p>

			<?php } ?>

			</li>



		<?php }?>
		</ul>





			<div id="sidebar_categories" class="widgetcontent">
			<?php wp_list_categories('show_count=1&title_li=<h2>Categories</h2>'); ?>
			</div>









		<div class="widgetcontent">
				<div id="recent-posts">
				<h2>Recent Posts</h2>
				<ul>
				<?php $posts = get_posts('numberposts=5'); foreach($posts as $post) { ?>
				<li>
				<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
				
				<?php the_title(); ?><br />

				<span>&mdash;Posted on <?php the_time('n/j/Y') ?></span>
				</a>
				</li>
				<?php } ?>
				</ul>
				</div>
		</div>





		<div class="widgetcontent">
			<div id="blogroll">
			<?php wp_list_bookmarks(); ?>
			</div>
		</div> 



			<div id="sidebar_archives"><h2>Archives</h2><span>Browse the Archives</span>
				<select name="archive-dropdown" onChange='document.location.href=this.options[this.selectedIndex].value;'>
				<option value=""><?php echo attribute_escape(__('Select Month')); ?></option>
				<?php wp_get_archives('type=monthly&format=option&show_post_count=1'); ?> </select>
			</div>




		<?php /* If this is the frontpage */ if ( is_home() || is_page() ) { ?>
		<div class="widgetcontent">

				<div id="sidemeta">
				<h2>Meta</h2>
				
				<ul>
				<?php wp_register(); ?>
				<li><?php wp_loginout(); ?></li>
				<li><a href="http://gmpg.org/xfn/"><abbr title="XHTML Friends Network">XFN</abbr></a></li>
				<li><a href="http://wordpress.org/" title="Powered by WordPress, state-of-the-art semantic personal publishing platform.">WordPress</a></li>
				<?php wp_meta(); ?>
				</ul>
				</div>

		</div> 
		<?php } ?>
		<?php endif; ?>
<div id="right_footer"></div>