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
* Plugin Name: No AddThis CSS
* Plugin URI: http://www.addthis.com
* Description: Want to use your own CSS to style the addthis buttons?  This plugin will cause the AddThis CSS to not be loaded
* Version: 1.0
*
* Author: The AddThis Team
* Author URI: http://www.addthis.com/blog
*/


add_filter('addthis_config_js_var', 'at_cookbook_addthis_config_js_var');
function at_cookbook_addthis_config_js_var($addthis_config)
{
    // you can use and of the addthis_config options from http://www.addthis.com/help/client-api
    $addthis_config['ui_use_css'] = false;

    return $addthis_config;

}
