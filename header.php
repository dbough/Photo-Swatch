<?php
switch ( $_GET['p'] ) {
    case 'single':
        $pageTitle = "Photo Swatch | Single";
        break;
    default:
        $pageTitle = "Photo Swatch";
        break;
}?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title><?php echo $pageTitle ?></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->

        <link rel="stylesheet" href="css/normalize.css">
        <link rel="stylesheet" href="css/main.css">
        <script src="js/vendor/modernizr-2.6.2.min.js"></script>
    </head>
    <body>
        <div class="page_wrapper">
            <!-- @TODO - move style to CSS & determine min-width via JS -->
            <div style="position:relative;min-width:1150px;">
                <a href="https://github.com/dbough/Photo-Swatch">
                    <img class="fork_me" src="https://camo.githubusercontent.com/652c5b9acfaddf3a9c326fa6bde407b87f7be0f4/68747470733a2f2f73332e616d617a6f6e6177732e636f6d2f6769746875622f726962626f6e732f666f726b6d655f72696768745f6f72616e67655f6666373630302e706e67" 
                    alt="Fork me on GitHub" data-canonical-src="https://s3.amazonaws.com/github/ribbons/forkme_right_orange_ff7600.png">
                </a>
            </div>
            
                <header class="main">
                    <div class="container_main nc">
                        <div style="position:relative;" class="pad_top_10">
                            <div class="logo f_left bright_text"><a href="http://localhost:5555">Photo Swatch</a></div>
                            <nav class="inline_list head_nav f_right clearfix">
                                <ul>
                                    <li><a href="/index.php?p=browse">Browse</a></li>
                                    <?php if ($_GET[ 'p'] == 'single' ): ?>
                                        <li><a href="#">Share</a></li>
                                    <?php endif; ?>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </header>