<?php
/*
Plugin Name: YDN Plugin
Plugin URI: http://yaledailynews.com
Description: A collection of YDN specific widgets and feature modifications.
Version: 1.0
Author: Michael DiScala
Author URI: http://yaledailynews.com
*/

//define global constants among our plugins here
define('YDN_XC_ID', 2);

//Legacy login enables backwards support for ellington encrypted passwords
include('legacy-login.php');

//XC widget defines the cross campus widget that runs in several sidebars
//throughout the site
include('xc-widget.php');

//A recent comment widget that matches the styling needed for the XC sidebar
include('comment-widget.php');

//A plugin to handle our legacy URLs and route them to their new end points
include('url-rewrites.php');
?>

