<?php

/**
 * PenNews functions and definitions
 *
 * @link    https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package PenNews
 */

define( 'PENCI_PENNEWS_VERSION', '6.4');

if ( ! function_exists( 'penci_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 */
	function penci_setup() {

		load_theme_textdomain( 'pennews', get_template_directory() . '/languages' );
		add_theme_support( 'automatic-feed-links' );
		add_theme_support( 'title-tag' );
		add_theme_support( 'post-thumbnails' );


		$dis_thumb_480_645   = get_theme_mod( 'penci_dis_thumb_480_645' );
		$dis_thumb_480_480   = get_theme_mod( 'penci_dis_thumb_480_480' );
		$dis_thumb_480_320   = get_theme_mod( 'penci_dis_thumb_480_320' );
		$dis_thumb_280_376   = get_theme_mod( 'penci_dis_thumb_280_376' );
		$dis_thumb_280_186   = get_theme_mod( 'penci_dis_thumb_280_186' );
		$dis_thumb_280_280   = get_theme_mod( 'penci_dis_thumb_280_280' );
		$dis_thumb_760_570   = get_theme_mod( 'penci_dis_thumb_760_570' );
		$dis_thumb_1920_auto = get_theme_mod( 'penci_dis_thumb_1920_auto' );
		$dis_thumb_960_auto  = get_theme_mod( 'penci_dis_thumb_960_auto' );
		$dis_thumb_auto_400  = get_theme_mod( 'penci_dis_thumb_auto_400' );
		$dis_thumb_585_auto  = get_theme_mod( 'penci_dis_thumb_585_auto' );
		$hide_sidebar_editor  = get_theme_mod( 'penci_hide_sidebar_editor' );


		if ( ! $dis_thumb_480_645 ): add_image_size( 'penci-thumb-480-645', 480, 645, true ); endif;
		if ( ! $dis_thumb_480_480 ): add_image_size( 'penci-thumb-480-480', 480, 480, true ); endif;
		if ( ! $dis_thumb_480_320 ): add_image_size( 'penci-thumb-480-320', 480, 320, true ); endif;

		if ( ! $dis_thumb_280_376 ): add_image_size( 'penci-thumb-280-376', 280, 376, true ); endif;
		if ( ! $dis_thumb_280_186 ): add_image_size( 'penci-thumb-280-186', 280, 186, true ); endif;
		if ( ! $dis_thumb_280_280 ): add_image_size( 'penci-thumb-280-280', 280, 280, true ); endif;

		if ( ! $dis_thumb_760_570 ): add_image_size( 'penci-thumb-760-570', 760, 570, true ); endif;
		if ( ! $dis_thumb_1920_auto ): add_image_size( 'penci-thumb-1920-auto', 1920, 999999, false ); endif;
		if ( ! $dis_thumb_960_auto ): add_image_size( 'penci-thumb-960-auto', 960, 999999, false ); endif;
		if ( ! $dis_thumb_auto_400 ): add_image_size( 'penci-thumb-auto-400', 999999, 400, false ); endif;
		if ( ! $dis_thumb_585_auto ): add_image_size( 'penci-masonry-thumb', 585, 99999, false ); endif;

		add_theme_support( 'post-formats', array( 'gallery', 'audio', 'video' ) );

		add_editor_style( array( penci_fonts_url(), get_template_directory_uri() . '/css/font-awesome.min.css', 'css/editor-style.css', ) );

		if( $hide_sidebar_editor ){
			add_editor_style( array( get_template_directory_uri() . '/css/fix-editor-style.css' ) );
		}

		register_nav_menus( array(
				'menu-1' => esc_html__( 'Primary', 'pennews' ),
				'menu-2' => esc_html__( 'Footer', 'pennews' ),
				'menu-3' => esc_html__( 'Topbar', 'pennews' ),
			)
		);

		add_theme_support( 'html5', array( 'search-form', 'comment-form', 'comment-list', 'gallery', 'caption', ) );
		add_theme_support( 'custom-background', apply_filters( 'penci_custom_background_args', array( 'default-color' => '', 'default-image' => '', ) ) );
		add_theme_support( 'custom-logo' );
		add_theme_support( 'woocommerce' );
		add_theme_support( 'yoast-seo-breadcrumbs' );

		// Add support for Block Styles.
		add_theme_support( 'wp-block-styles' );

		// Add support for full and wide align images.
		add_theme_support( 'align-wide' );

		// Add custom editor font sizes.
		add_theme_support(
			'editor-font-sizes',
			array(
				array(
					'name'      => __( 'Small', 'pennews' ),
					'shortName' => __( 'S', 'pennews' ),
					'size'      => 12,
					'slug'      => 'small',
				),
				array(
					'name'      => __( 'Normal', 'pennews' ),
					'shortName' => __( 'M', 'pennews' ),
					'size'      => 16,
					'slug'      => 'normal',
				),
				array(
					'name'      => __( 'Large', 'pennews' ),
					'shortName' => __( 'L', 'pennews' ),
					'size'      => 22,
					'slug'      => 'large',
				),
				array(
					'name'      => __( 'Huge', 'pennews' ),
					'shortName' => __( 'XL', 'pennews' ),
					'size'      => 32,
					'slug'      => 'huge',
				),
			)
		);

		// Add support for responsive embedded content.
		//add_theme_support( 'responsive-embeds' );
	}
endif;
add_action( 'after_setup_theme', 'penci_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function penci_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'penci_content_width', 1400 );
}

add_action( 'after_setup_theme', 'penci_content_width', 0 );

require get_template_directory() . '/inc/default.php';
require get_template_directory() . '/inc/transition-default.php';
require get_template_directory() . '/inc/widgets.php';
require get_template_directory() . '/inc/fonts.php';
require get_template_directory() . '/inc/self-fonts.php';
require get_template_directory() . '/inc/media.php';
require get_template_directory() . '/inc/custom-header.php';
require get_template_directory() . '/inc/template-tags.php';
require get_template_directory() . '/inc/extras.php';
require get_template_directory() . '/inc/excerpt.php';
require get_template_directory() . '/inc/jetpack.php';
require get_template_directory() . '/inc/customizer/customizer.php';
require get_template_directory() . '/inc/social-media.php';
require get_template_directory() . '/inc/social-share.php';
require get_template_directory() . '/inc/breadcrumbs.php';
require get_template_directory() . '/inc/post-format/post-format.php';
require get_template_directory() . '/inc/custom-css/custom-css.php';
require get_template_directory() . '/inc/max-mega-menu/max-mega-menu.php';
require get_template_directory() . '/inc/login-popup.php';
require get_template_directory() . '/inc/woocommerce.php';
require get_template_directory() . '/inc/single-loadmore.php';
require get_template_directory() . '/inc/ajaxified-search.php';
require get_template_directory() . '/inc/json-schema-validar.php';
require get_template_directory() . '/inc/multiple-comments.php';

require get_template_directory() . '/inc/custom-sidebar.php';
Penci_Custom_Sidebar::initialize();

/**
 * Load dashboard
 */
require get_template_directory() . '/inc/dashboard/class-penci-dashboard.php';
$dashboard = new Penci_Dashboard();

if ( is_admin() ) {
	require_once get_template_directory() . '/inc/class-tgm-plugin-activation.php';
	require_once get_template_directory() . '/inc/admin/plugins.php';
}
remove_action( 'wp_head', 'rest_output_link_wp_head' );

require_once('wp-updates-theme.php');
new WPUpdatesThemeUpdater_2239( 'http://wp-updates.com/api/2/theme', basename( get_template_directory() ) );

/**
 * Disable VC check license whenever update
 *
 * @see js_composer\include\classes\updaters\class-vc-updater.php
 * @see js_composer\include\classes\updaters\class-vc-updating-manager.php
 */
if ( ! function_exists( 'penci_fix_update_vc' ) ):
	function penci_fix_update_vc() {
		if ( function_exists( 'vc_license' ) && function_exists( 'vc_updater' ) && ! vc_license()->isActivated() ) {

			remove_filter( 'upgrader_pre_download', array( vc_updater(), 'preUpgradeFilter' ), 10 );
			remove_filter( 'pre_set_site_transient_update_plugins', array( vc_updater()->updateManager(), 'check_update' ) );

			if ( function_exists( 'vc_plugin_name' ) ) {
				remove_filter( 'in_plugin_update_message-' . vc_plugin_name(), array( vc_updater()->updateManager(), 'addUpgradeMessageLink', ) );
			}
		}
	}

	add_action( 'admin_init', 'penci_fix_update_vc', 9 );
endif;

function penci_autop( $pee, $br = true ) {
	$pre_tags = array();

	if ( trim($pee) === '' )
		return '';

	// Just to make things a little easier, pad the end.
	$pee = $pee . "\n";

	/*
	 * Pre tags shouldn't be touched by autop.
	 * Replace pre tags with placeholders and bring them back after autop.
	 */
	if ( strpos($pee, '<pre') !== false ) {
		$pee_parts = explode( '</pre>', $pee );
		$last_pee = array_pop($pee_parts);
		$pee = '';
		$i = 0;

		foreach ( $pee_parts as $pee_part ) {
			$start = strpos($pee_part, '<pre');

			// Malformed html?
			if ( $start === false ) {
				$pee .= $pee_part;
				continue;
			}

			$name = "<pre wp-pre-tag-$i></pre>";
			$pre_tags[$name] = substr( $pee_part, $start ) . '</pre>';

			$pee .= substr( $pee_part, 0, $start ) . $name;
			$i++;
		}

		$pee .= $last_pee;
	}
	// Change multiple <br>s into two line breaks, which will turn into paragraphs.
	$pee = preg_replace('|<br\s*/?>\s*<br\s*/?>|', "\n\n", $pee);

	$allblocks = '(?:table|thead|tfoot|caption|col|colgroup|tbody|tr|td|th|div|span|br|dl|dd|dt|ul|ol|li|pre|form|map|area|blockquote|address|math|style|p|h[1-6]|hr|fieldset|legend|section|article|aside|hgroup|header|footer|nav|figure|figcaption|details|menu|summary)';

	// Add a double line break above block-level opening tags.
	$pee = preg_replace('!(<' . $allblocks . '[\s/>])!', "\n\n$1", $pee);

	// Add a double line break below block-level closing tags.
	$pee = preg_replace('!(</' . $allblocks . '>)!', "$1\n\n", $pee);

	// Standardize newline characters to "\n".
	$pee = str_replace(array("\r\n", "\r"), "\n", $pee);

	// Find newlines in all elements and add placeholders.
	$pee = wp_replace_in_html_tags( $pee, array( "\n" => " <!-- wpnl --> " ) );

	// Collapse line breaks before and after <option> elements so they don't get autop'd.
	if ( strpos( $pee, '<option' ) !== false ) {
		$pee = preg_replace( '|\s*<option|', '<option', $pee );
		$pee = preg_replace( '|</option>\s*|', '</option>', $pee );
	}

	/*
	 * Collapse line breaks inside <object> elements, before <param> and <embed> elements
	 * so they don't get autop'd.
	 */
	if ( strpos( $pee, '</object>' ) !== false ) {
		$pee = preg_replace( '|(<object[^>]*>)\s*|', '$1', $pee );
		$pee = preg_replace( '|\s*</object>|', '</object>', $pee );
		$pee = preg_replace( '%\s*(</?(?:param|embed)[^>]*>)\s*%', '$1', $pee );
	}

	/*
	 * Collapse line breaks inside <audio> and <video> elements,
	 * before and after <source> and <track> elements.
	 */
	if ( strpos( $pee, '<source' ) !== false || strpos( $pee, '<track' ) !== false ) {
		$pee = preg_replace( '%([<\[](?:audio|video)[^>\]]*[>\]])\s*%', '$1', $pee );
		$pee = preg_replace( '%\s*([<\[]/(?:audio|video)[>\]])%', '$1', $pee );
		$pee = preg_replace( '%\s*(<(?:source|track)[^>]*>)\s*%', '$1', $pee );
	}

	// Collapse line breaks before and after <figcaption> elements.
	if ( strpos( $pee, '<figcaption' ) !== false ) {
		$pee = preg_replace( '|\s*(<figcaption[^>]*>)|', '$1', $pee );
		$pee = preg_replace( '|</figcaption>\s*|', '</figcaption>', $pee );
	}

	// Remove more than two contiguous line breaks.
	$pee = preg_replace("/\n\n+/", "\n\n", $pee);

	// Split up the contents into an array of strings, separated by double line breaks.
	$pees = preg_split('/\n\s*\n/', $pee, -1, PREG_SPLIT_NO_EMPTY);

	// Reset $pee prior to rebuilding.
	$pee = '';

	// Rebuild the content as a string, wrapping every bit with a <p>.
	foreach ( $pees as $tinkle ) {
		$pee .= '<p>' . trim($tinkle, "\n") . "</p>\n";
	}

	// Under certain strange conditions it could create a P of entirely whitespace.
	$pee = preg_replace('|<p>\s*</p>|', '', $pee);

	// Add a closing <p> inside <div>, <address>, or <form> tag if missing.
	$pee = preg_replace('!<p>([^<]+)</(div|address|form)>!', "<p>$1</p></$2>", $pee);

	// If an opening or closing block element tag is wrapped in a <p>, unwrap it.
	$pee = preg_replace('!<p>\s*(</?' . $allblocks . '[^>]*>)\s*</p>!', "$1", $pee);

	// In some cases <li> may get wrapped in <p>, fix them.
	$pee = preg_replace("|<p>(<li.+?)</p>|", "$1", $pee);

	// If a <blockquote> is wrapped with a <p>, move it inside the <blockquote>.
	$pee = preg_replace('|<p><blockquote([^>]*)>|i', "<blockquote$1><p>", $pee);
	$pee = str_replace('</blockquote></p>', '</p></blockquote>', $pee);

	// If an opening or closing block element tag is preceded by an opening <p> tag, remove it.
	$pee = preg_replace('!<p>\s*(</?' . $allblocks . '[^>]*>)!', "$1", $pee);

	// If an opening or closing block element tag is followed by a closing <p> tag, remove it.
	$pee = preg_replace('!(</?' . $allblocks . '[^>]*>)\s*</p>!', "$1", $pee);

	// Optionally insert line breaks.
	if ( $br ) {
		// Replace newlines that shouldn't be touched with a placeholder.
		$pee = preg_replace_callback('/<(script|style).*?<\/\\1>/s', '_autop_newline_preservation_helper', $pee);

		// Normalize <br>
		$pee = str_replace( array( '<br>', '<br/>' ), '<br />', $pee );

		// Replace any new line characters that aren't preceded by a <br /> with a <br />.
		$pee = preg_replace('|(?<!<br />)\s*\n|', "<br />\n", $pee);

		// Replace newline placeholders with newlines.
		$pee = str_replace('<WPPreserveNewline />', "\n", $pee);
	}

	// If a <br /> tag is after an opening or closing block tag, remove it.
	$pee = preg_replace('!(</?' . $allblocks . '[^>]*>)\s*<br />!', "$1", $pee);

	// If a <br /> tag is before a subset of opening or closing block tags, remove it.
	$pee = preg_replace('!<br />(\s*</?(?:p|li|div|dl|dd|dt|th|pre|td|ul|ol)[^>]*>)!', '$1', $pee);
	$pee = preg_replace( "|\n</p>$|", '</p>', $pee );

	// Replace placeholder <pre> tags with their original content.
	if ( !empty($pre_tags) )
		$pee = str_replace(array_keys($pre_tags), array_values($pre_tags), $pee);

	// Restore newlines in all elements.
	if ( false !== strpos( $pee, '<!-- wpnl -->' ) ) {
		$pee = str_replace( array( ' <!-- wpnl --> ', '<!-- wpnl -->' ), "\n", $pee );
	}

	return $pee;
}
