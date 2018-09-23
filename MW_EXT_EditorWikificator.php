<?php

// Confirm MediaWiki environment.
if ( ! defined( 'MEDIAWIKI' ) ) {
	die( 'This file is a MediaWiki extension and thus not a valid entry point.' );
}

if ( function_exists( 'wfLoadExtension' ) ) {
	wfLoadExtension( 'MW_EXT_EditorWikificator' );
	// Keep i18n globals so mergeMessageFileList.php doesn't break.
	$wgExtensionMessagesFiles['MW_EXT_EditorWikificator'] = __DIR__ . '/i18n';

	return true;
} else {
	die( 'This version of the MW_EXT_EditorWikificator extension requires MediaWiki 1.30+' );
}