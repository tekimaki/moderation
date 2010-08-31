<?php
/**
 * @version $Header$
 */
global $gBitInstaller;

$infoHash = array(
	'package'      => MODERATION_PKG_NAME,
	'version'      => str_replace( '.php', '', basename( __FILE__ )),
	'description'  => "Update moderation table to allow longer perm_name character string for guid values.",
	'post_upgrade' => NULL,
);

$gBitInstaller->registerPackageUpgrade( $infoHash, array(

array( 'DATADICT' => array(
	// insert new column
	array( 'ALTER' => array(
		'moderation' => array(
			'moderator_perm_name' => array( '`moderator_perm_name`', 'TYPE VARCHAR(128)' ),
		),
	)),
)),

));
