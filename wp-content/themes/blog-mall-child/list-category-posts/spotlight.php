<?php
/*
Plugin Name: List Category Posts - Template "Sofians Perfect Post List - http://sundari-webdesign.com/wordpress-the-quest-to-my-perfect-list-view-for-posts-events-and-articles"
Plugin URI: http://picandocodigo.net/programacion/wordpress/list-category-posts-wordpress-plugin-english/
Description: Template file for List Category Post Plugin for Wordpress which is used by plugin by argument template=value.php
Version: 0.9
Author: Radek Uldrych & Fernando Briano
Author URI: http://picandocodigo.net http://radoviny.net
*/

/*
Copyright 2009 Radek Uldrych (email : verex@centrum.cz)
Copyright 2009-2015 Fernando Briano (http://picandocodigo.net)

This program is free software; you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation; either version 3 of the License, or any
later version.

This program is distributed in the hope that it will be useful, but
WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the GNU
General Public License for more details.

You should have received a copy of the GNU General Public License
along with this program; if not, write to the Free Software
Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA 02110-1301
USA
*/

/**
 * The format for templates changed since version 0.17. Since this
 * code is included inside CatListDisplayer, $this refers to the
 * instance of CatListDisplayer that called this file.
 */

/* This is the string which will gather all the information.*/
$lcp_display_output = '';

//Show category link:
$lcp_display_output .= $this->get_category_link('strong');

//Show the conditional title:
$lcp_display_output .= $this->get_conditional_title();

//Add 'starting' tag. Here, I'm using an unordered list (ul) as an example:
// (Sofian: We work with DIVs so this stays empty)
$lcp_display_output .= '';

/* Posts Loop
 *
 * The code here will be executed for every post in the category. As
 * you can see, the different options are being called from functions
 * on the $this variable which is a CatListDisplayer.
 *
 * CatListDisplayer has a function for each field we want to show. So
 * you'll see get_excerpt, get_thumbnail, etc.  You can now pass an
 * html tag as a parameter. This tag will sorround the info you want
 * to display. You can also assign a specific CSS class to each field.
*/
global $post;
$lcp_display_output .= '<div class="postlist withthumb spotlight">';
while (have_posts()) :
  the_post();

  //Start a List Item for each post:
  // (Sofian: Here we open the DIV for each post. If the post has a thumbnail, we get it. 
  //  Else we can define a placeholder or leave an empty space next to the indented text.)
  if (has_post_thumbnail($post->ID)) :
    // (Sofian: Here we open an additional container DIV to wrap our content)     
    $lcp_display_output .= '<div class="thumbmagic" ';
    
    //Show the title and link to the post:
    $lcp_display_output .= '<span class="lcp-container">';
    $lcp_display_output .= '<h3>';
    $lcp_display_output .= $this->get_post_title($post);
    $lcp_display_output .= '<div class="separator"></div>';
    $lcp_display_output .= '</h3>';
    $lcp_display_output .= '</span>';

  
    $lcp_display_output .= $this->get_thumbnail($post);
    $lcp_display_output .= '</div>';
  else :
    $lcp_display_output .= '<div class="postlist withthumb spotlight">';

    $lcp_display_output .= '<div class="thumbmagic">';
    //Show the title and link to the post:
    $lcp_display_output .= '<span class="lcp-container">';
    $lcp_display_output .= $this->get_post_title($post, 'h3');
    $lcp_display_output .= '<div class="separator"></div>';
    $lcp_display_output .= '</span>';
    // (Sofian: Uncomment this line to use a placeholder by changing the path to your placeholder image.
    //  Delete the line or leave it commented to leave an empty space.)    
    // 	$lcp_display_output .= '<img src="http://your-domain.com/wp-content/uploads/default-thumb.jpg" alt="placeholder"></img>';    
    $lcp_display_output .= '</div>';
    
  endif;
  
  
endwhile;
$lcp_display_output .= '</div>';

// Close the wrapper I opened at the beginning:
// (Sofian: We work with DIVs so this stays empty)
$lcp_display_output .= '';

// If there's a "more link", show it:
$lcp_display_output .= $this->get_morelink();

// Get category posts count
$lcp_display_output .= $this->get_category_count();

//Pagination
$lcp_display_output .= $this->get_pagination();

$this->lcp_output = $lcp_display_output;
