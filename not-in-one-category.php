<?php
/* 
* +--------------------------------------------------------------------------+
* | Copyright (c) 2011 Add This, LLC                                         |
* +--------------------------------------------------------------------------+
* | This program is free software; you can redistribute it and/or modify     |
* | it under the terms of the GNU General Public License as published by     |
* | the Free Software Foundation; either version 2 of the License, or        |
* | (at your option) any later version.                                      |
* |                                                                          |
* | This program is distributed in the hope that it will be useful,          |
* | but WITHOUT ANY WARRANTY; without even the implied warranty of           |
* | MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the            |
* | GNU General Public License for more details.                             |
* |                                                                          |
* | You should have received a copy of the GNU General Public License        |
* | along with this program; if not, write to the Free Software              |
* | Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA 02110-1301 USA |
* +--------------------------------------------------------------------------+
*/

/**
* Plugin Name: AddThis Remove from a specific category
* Plugin URI: http://www.addthis.com
* Description: Don't display the AddThis bookmark tool on one specific Category
* Version: 1,0
*
* Author: The AddThis Team
* Author URI: http://www.addthis.com/blog
*/


add_filter('addthis_post_exclude', 'at_cookbook_addthis_post_exclude');
function at_cookbook_addthis_post_exclude($display)
{
    // Change 4 to either the  ID (integer), name or slug (string), of a category
    // See http://codex.wordpress.org/Function_Reference/in_category to understand how in_category works
    if ( in_category( 4 )  ) 
        $display = false;

    return $display;

}
