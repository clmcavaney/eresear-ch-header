<?php
/*
Plugin Name: eresear.ch header
Plugin URI: https://github.com/clmcavaney/eresear-ch-header
Description: This plugin modifies the header of YOURLS, specifically for the eResearch shorten URL service (https://eresear.ch)
Version: 1.0
Author: Christopher McAvaney
Author URI: http://deakinresear.ch/eresearch
*/

// No direct call
if( !defined( 'YOURLS_ABSPATH' ) ) die();

yourls_add_action( 'html_logo', 'er_header');

function er_header() {
?>
<h2>Servicing the eResearch community</h2>
<?php
	if ( isset($_SESSION['attributes']['edupersonorcid']) ) {
?>
		<p><?php echo $_SESSION['attributes']['displayname'];?>
<?php
		if ( isset($_SESSION['attributes']['edupersonorcid']) && $_SESSION['attributes']['edupersonorcid'] != '' ) {
?>
 &ndash; <img src="https://orcid.org/sites/default/files/images/orcid_16x16.png" style="vertical-align: text-bottom;" /> <a href="<?php echo $_SESSION['attributes']['edupersonorcid'];?>"><?php echo $_SESSION['attributes']['edupersonorcid']; ?></a></p>
<?php
		}
?>
<?php
	}
}
?>
