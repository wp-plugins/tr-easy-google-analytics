<?php 

/**
 * Plugin Name: TR_Easy_Google_Analytics
 * Plugin URI: http://nakshighor.com/plugins/
 * Description: Easy Google analytics is one of the best simple plugin to add or connect your websites with Google analytics.Its really easy for use everyone.Just install the plugin as like other wordpress plugin.And then you will see the analytics options in your dashboard.Then click analytics options and then you see a textarea.You will just copy the Google analytics tracking code and paste here. That's it and you will enjoy now. And Then you will get all kind of visitors reports from Google analytics. Because your all pages of your websites now link up or connected with google Analytics. So, enjoy and don't forget to rated us.
 
 * Version:  1.0.0
 * Author: Theme Road
 * Author URI: http://nakshighor.com/plugins/
 * License:  GPL2
 *Text Domain: tmrd
 *  Copyright 2015 GIN_AUTHOR_NAME  (email : BestThemeRoad@gmail.com)
 *
 *	This program is free software; you can redistribute it and/or modify
 *	it under the terms of the GNU General Public License, version 2, as
 *	published by the Free Software Foundation.
 *
 *	This program is distributed in the hope that it will be useful,
 *	but WITHOUT ANY WARRANTY; without even the implied warranty of
 *	MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *	GNU General Public License for more details.
 *
 *	You should have received a copy of the GNU General Public License
 *	along with this program; if not, write to the Free Software
 *	Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
 *
 */





if(!class_exists('TitanFramework')){


require_once( 'theme-option/titan-framework-embedder.php' );

}


function titan_google_analytics() {


    $titan = TitanFramework::getInstance( 'tmrd_analytics' );

    $panel = $titan->createAdminPanel( array(

        'name' => 'Analytics',

    ) );

// Create options in My Admin Panel

    $panel->createOption( array(

        'name' => 'Tracking Code',
        'id'   => 'custom_js',
        'type' => 'code',
        'desc' => 'Put your Google Tracking Code',
        'lang' => 'js',

    ) );


    $panel->createOption( array(

        'type' => 'save',

    ) );
}

    add_action( 'tf_create_options', 'titan_google_analytics' );


    function tmrd_google_analytics() {


        $titan = TitanFramework::getInstance( 'tmrd_analytics' );

        $anlytics_value = $titan->getOption( 'custom_js' );

        echo $anlytics_value;

    }
    add_action( 'wp_footer', 'tmrd_google_analytics' );




