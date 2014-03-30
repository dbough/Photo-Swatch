<?php require_once( 'header.php' ); ?>
<?php
switch ( $_SERVER["REQUEST_URI"] ) {
    case 'browse':
        break;
    default:
        break;
}
?>
<div class="container_wrapper">
    <div class="container_890 pad_top_10">
        <h2 class="center pad_bottom_10">Create a color swatch from a photo for use in your web design.</h2>
        <div class="photo_drop">
            <p class="double_size_text">Drop Photo</p>
        </div>
        <div class="steps double_size_text">
            <ol>
                <li>Upload Photo</li>
                <li>Choose Color</li>
                <li>Choose Scheme</li>
                <li>Use &amp; Share</li>
            </ol>
        </div>
    </div>
</div>
<?php require_once( 'footer.php' ); ?>