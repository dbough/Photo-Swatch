<?php require_once( 'header.php' ); ?>
<?php
switch ( $_GET['p'] ) {
    case 'single':
        require_once( 'single.php' );
        break;
    case 'browse':
        break;
    default:
        require_once( 'home.php' );
        break;
}
?>
<?php require_once( 'footer.php' ); ?>