<?php
/*
Plugin Name: eresear.ch header
Plugin URI: https://github.com/clmcavaney/eresear-ch-header
Description: This plugin modifies the header of YOURLS, specifically for the eResearch shorten URL service (https://eresear.ch)
Version: 1.1
Author: Christopher McAvaney
Author URI: http://deakinresear.ch/eresearch
*/

// No direct call
if( !defined( 'YOURLS_ABSPATH' ) ) die();

yourls_add_action( 'html_logo', 'er_header');

function er_header() {
	$orcid_logo_url = yourls_plugin_url( dirname(__FILE__) . '/includes/ORCIDiD_iconvector.svg' );
?>
<h2>Servicing the eResearch community</h2>
<?php
	if ( isset($_SESSION['attributes']['edupersonorcid']) ) {
?>
		<p><?php echo $_SESSION['attributes']['displayname'];?>
<?php
		if ( isset($_SESSION['attributes']['edupersonorcid']) && $_SESSION['attributes']['edupersonorcid'] != '' ) {
?>
 &ndash; <a href="<?php echo $_SESSION['attributes']['edupersonorcid'];?>"><img src="<?php echo $orcid_logo_url; ?>" width="16px" height="16px" style="vertical-align: text-bottom;" /> <?php echo $_SESSION['attributes']['edupersonorcid']; ?></a></p>
<?php
		}
?>
<?php
	}
}
?>
