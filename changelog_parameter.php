<?php 
require_once( 'core.php' );
require_api( 'gpc_api.php' );
require_api( 'print_api.php' );

print_header_redirect( 'changelog_page.php?obsolete=' . gpc_get('obsolete', "n") );

?>