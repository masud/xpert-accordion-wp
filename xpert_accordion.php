<?php
/*
  	Plugin Name: Xpert Accordion
  	Plugin URI: http://themexpert.com/wordpress-plugins/xpert-accordion
  	Version: 0.0.1
  	Author: ThemeXpert
  	Authro URI : http://www.themexpert.com
  	Description: Supercharge your WordPress accordion plugin
	License: GPLv2 or later
	Text Domain: xa
 */

/*
This program is free software; you can redistribute it and/or
modify it under the terms of the GNU General Public License
as published by the Free Software Foundation; either version 2
of the License, or (at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with this program; if not, write to the Free Software
Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA  02110-1301, USA.
*/

require_once 'shortcode/accordion.php';
include_once 'helper/html.php';

function tx_add_media_buttom()
{
	echo '<a href="#" id="insert-my-media" class="btn button" data-toggle="modal" data-target="#exampleModal">Magic Shortcode</a>';
	echo get_modal();
}
add_action('media_buttons', 'tx_add_media_buttom', 15);

function get_modal()
{
	$html = array();
	$html[] = '<div class="tx">';
		$html[] = '<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">'; 
			$html[] = '<div class="modal-dialog">';
				$html[] = '<div class="modal-content">';
					$html[] = Html::get_modal_header();
					$html[] = '<div class="modal-body">';
						$html[] = '<button type="button" class="btn btn-success action-new">Add New</button>';
						$html[] = Html::get_preset_styles();
						$html[] = Html::get_body_form_header();
					//	$html[] = Html::get_icons_list();
					///$html[] = Html::get_body_form_footer();
					$html[] = '</div>';
					$html[] = Html::get_modal_footer();
				$html[] = '</div>';
			$html[] = '</div>';
		$html[] = '</div>';
	$html[] = '</div>';
	
		return implode('', $html);
}

function tx_add_scripts()
{
	wp_enqueue_style('tx-app', plugins_url('assets/css/app.css', __FILE__) );
	wp_enqueue_style('font-awesome', '//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css');
	wp_enqueue_style('ms-bk-css', plugins_url('assets/css/ms_bkend_style.css', __FILE__) );
	wp_enqueue_style('chosen', 'https://harvesthq.github.io/chosen/chosen.css');

	wp_enqueue_script('tx-bs-transition', plugins_url('assets/vendor/bootstrap/js/transition.js', __FILE__) );
	wp_enqueue_script('tx-bs-modal', plugins_url('assets/vendor/bootstrap/js/modal.js', __FILE__) );
	wp_enqueue_script('tx-bs-collapse', plugins_url('assets/vendor/bootstrap/js/collapse.js', __FILE__) );
	wp_enqueue_script('chosen-js', 'https://harvesthq.github.io/chosen/chosen.jquery.js' );
	// wp_enqueue_script('tx-bs-selectize', plugins_url('assets/vendor/selectize/js/standalone/selectize.js', __FILE__) );
	wp_enqueue_script('ms-js', plugins_url('assets/js/script.js', __FILE__) );
}
add_action('wp_enqueue_media', 'tx_add_scripts');

function tx_add_frontend_scripts(){

    wp_enqueue_style('bootstrap-fontend', '//maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css');
	wp_enqueue_style('bootstrap-theme-fontend', '//maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap-theme.min.css');
	wp_enqueue_script('bootstrap-theme-js', '//maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js',array('jquery'));
	wp_enqueue_style('ms-fend-style', plugins_url('assets/css/ms_fend_style.css', __FILE__));
	wp_enqueue_style('font-awesome', '//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css');
}
add_action( 'wp_enqueue_scripts', 'tx_add_frontend_scripts' );