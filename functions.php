<?php
// Distributed under the terms of the GNU General Public License
?>
<?php
if ( function_exists('register_sidebar') )
    register_sidebar(array(
        'before_widget' => '<ul class="sidebar"><div class="widgetcontent"> ',
        'after_widget' => '</div></ul>',
        'before_title' => '<h2>',
        'after_title' => '</h2>',
    ));
?>
<?php
function mytheme_comment($comment, $args, $depth) {
$GLOBALS['comment'] = $comment; ?>



	<div <?php comment_class(); ?> id="comment-<?php comment_ID() ?>">

		<div class="comment-author vcard"><?php echo get_avatar($comment,$size='48'); ?></div>

		<div class="comment-content">

			<div class="comment-meta commentmetadata">

				<div class="commentauthorlink">
				<?php printf(__('%s'), get_comment_author_link()) ?>
				</div>

				<div class="commentdatelink">
				<a href="<?php echo htmlspecialchars( get_comment_link( $comment->comment_ID ) ) ?>"><?php printf(__('%1$s at %2$s'), get_comment_date(), get_comment_time()) ?></a>
				<?php edit_comment_link(__('(Edit)'),' ','') ?>
				</div>

			</div>



			<?php if ($comment->comment_approved == '0') : ?>
			<em><?php _e('Your comment is awaiting moderation.') ?></em>
			<br />
		<?php endif; ?>
		<?php comment_text() ?>
		</div>

		<div class="reply"><?php comment_reply_link(array_merge( $args, array('depth' => $depth, 'max_depth' => $args['max_depth']))) ?></div>

	</div>



<li>
<?php
}
?>
<?php
//  Set some default values
define('HEADER_TEXTCOLOR', '#203045'); //  Default text color
define('HEADER_IMAGE', '%s/img/splashimage.jpg'); // %s is theme dir uri, set a default image
define('HEADER_IMAGE_WIDTH', 670); //  Default image width is actually the div's height
define('HEADER_IMAGE_HEIGHT', 162);  // Same for height

function header_style() {
    //  This function defines the style for the theme
    //  You can change these selectors to match your theme
?>
<style type="text/css">
#splashimage { background: url(<?php header_image() ?>) no-repeat;}
#blog_title h1 a, { color:#<?php header_textcolor() ?>}
<?php
//  Has the text been hidden?
//  If so, set display to equal none
if ( 'blank' == get_header_textcolor() ) { ?>
#blog_title  {
    display: none;
}
<?php } else {
    //  Otherwise, set the color to be the user selected one
?>
#header h1 a,  {
    color:#<?php header_textcolor() ?>;
}
<?php } ?>
</style>
<?php
}
function admin_header_style() {
    //  This function styles the admin page
?>
<style type="text/css">
#headimg{
    background: url(<?php header_image() ?>) no-repeat bottom #FFF;
    height: 230px;
    width:<?php echo HEADER_IMAGE_WIDTH; ?>px;
    padding:0 0 0 18px;
	margin:20px 0 20px 0;
    font-family: arial;
	border:1px solid grey;
}
#headimg h1{
	float:left;
	font-family:"Trebuchet MS", 'Lucida Grande', Verdana, Arial, Sans-Serif;
	display:inline;
	margin:15px 0 10px 0;
	padding:0 0 0 10px;
	font-size:26px;
}
#headimg h1 a, #desc{
    color:#<?php header_textcolor() ?>;
    text-decoration: none;
    border-bottom: none;
}
#desc {
	float:left;
	clear:left;
	font-family: Arial, Sans-Serif;
	display:inline;
	margin:0;
	padding:0 0 0 10px;
	font-size:13px;
	font-weight:bold;
}
<?php if ( 'blank' == get_header_textcolor() ) { ?>
#headimg h1, #headimg #desc {
    display: none;
}
#headimg h1 a, #headimg #desc {
    color:#<?php echo HEADER_TEXTCOLOR ?>;
}
<?php } ?>
</style>
<?php
}




add_custom_image_header('header_style', 'admin_header_style');
{
?>
<?php
}

function pro_footer() { ?>

	<div id="bottom_footer">
		<div id="copyright">&copy; <?php echo date("Y"); ?> <?php bloginfo('name'); ?></div>
	</div>


<?php } add_action('wp_footer', 'pro_footer');?>