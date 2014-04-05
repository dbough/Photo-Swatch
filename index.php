<?php 
require_once( 'header.php' );
switch ( $_GET['p'] ) {
    case 'single':
        require_once( 'single.php' );
        break;
    case 'browse':
        require_once( 'browse.php' );
        break;
    default:
        require_once( 'home.php' );
        break;
}
require_once( 'footer.php' ); 
?>