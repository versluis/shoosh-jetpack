<?php
/**
 * Plugin Name: Shoosh, Jetpack!
 * Plugin URI: https://github.com/versluis/shoosh-jetpack
 * Description: Disable annying JetPack Upsell Nags in the Admin Interface
 * Version: 1.0
 * Author: Jay Versluis
 * Author URI: https://wpguru.tv
 * License: GPL2
 */
 
/*  Copyright 2020  Jay Versluis (email support@wpguru.co.uk)

    This program is free software; you can redistribute it and/or modify
    it under the terms of the GNU General Public License, version 2, as 
    published by the Free Software Foundation.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with this program; if not, write to the Free Software
    Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
*/

/* 

I've explained how to do this here:
https://wpguru.co.uk/2017/11/how-to-disable-jetpack-nag-messages-in-the-wordpress-admin-interface/

*/

function guru_shoosh_jp () {
	
	// this is a dummy function just so that we get the plugin enabled
	// nothing is happening here
}
add_action ('wp_footer', 'guru_shoosh_jp');

// this is where the magic happens
// courtesy of Matt Medeiros
// https://mattreport.com/disable-jetpack-upsell-ads/
add_filter( 'jetpack_just_in_time_msgs', '_return_false' );

?>
