<!DOCTYPE html>
<!--[if lt IE 9]>
<script src="<?php echo URL;?>public/images/favicon.ico">
    <link rel="stylesheet" href="js/dist/html5shiv.js"></script>
<![endif]-->

<!--[if lt IE 7 ]> <html lang="en" class="ie6 lt-ie9"> <![endif]-->
<!--[if IE 7 ]>    <html lang="en" class="ie7 lt-ie9"> <![endif]-->
<!--[if IE 8 ]>    <html lang="en" class="ie8 lt-ie9"> <![endif]-->
<!--[if IE 9 ]>    <html lang="en" class="ie9"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <html class="no-js" lang="en"> <!--<![endif]--><head>
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title><?= (isset($this->title)) ? $this->title : 'The Point 95.9FM 1470AM'; ?></title>
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo URL;?>public/images/favicon.ico">
    <link rel="stylesheet" href="<?php echo URL;?>public/css/foundation.css" />
    <link rel="stylesheet" href="<?php echo URL;?>public/css/styles.css" />
    <!--[if IE]>
    <link rel="stylesheet" href="<?php echo URL;?>public/css/ie.css" />
    <![endif]-->
    <script src="<?php echo URL;?>public/js/vendor/modernizr.js"></script>
    <script src="<?php echo URL;?>public/js/vendor/jquery.js"></script>
    <script src="<?php echo URL;?>public/js/vendor/fastclick.js"></script>
    <script src="<?php echo URL;?>public/js/js.js"></script>
    <?php
    if (isset($this->js)) {
        foreach ($this->js as $js) {
            echo '<script type="text/javascript" src="' . URL . 'views/' . $js . '"></script>';
        }
    }
    ?>
</head>

<body>
<div class="wrapper">
    <header>
        <div class="ad">
            <img src="http://placehold.it/768x90"/>
        </div><!--ad-->

        <div class="row logo-tagline">
            <div class="small-12 medium-9 small-centered columns">
                <a href="<?php echo URL;?>" class="small-12 medium-6 columns logo"><img src="<?php echo URL;?>public/images/logo.png" alt="The Point | 95.9 FM | 1470 AM"></a>

                <div class="small-12 medium-6 columns tagline">
                    <h3>Columbia's New</h3>
                    <h3>Talk Radio Experience</h3>

                    <div class="phone">
                        <h3>803-799-Talk</h3>
                        <h3 class="numbers gray">(8255)</h3>
                    </div><!--phone-->
                </div><!--tagline-->
            </div><!--columns-->
        </div><!--row logo tagline-->

        <div class="row">
            <nav>
                <ul class="small-12 small-centered columns">
                    <li><a href="<?php echo URL;?>podcasts/" class="disabled">Podcasts</a></li>
                    <li>
                        <a href="<?php echo URL;?>shows/">Shows</a>

                        <ul>
                            <li><a href="<?php echo URL;?>shows/1/" class="two-lines disabled">Keven Cohen</a></li>
                            <li><a href="<?php echo URL;?>shows/2/" class="two-lines disabled">Herman Cain</a></li>
                            <li><a href="<?php echo URL;?>shows/3/" class="two-lines disabled">Laura Ingraham</a></li>
                            <li><a href="<?php echo URL;?>shows/4/" class="two-lines disabled">Todd Schnitt</a></li>
                            <li><a href="<?php echo URL;?>shows/5/" class="two-lines disabled">Dave Ramsey</a></li>
                            <li><a href="<?php echo URL;?>shows/6/" class="two-lines disabled">Leslie Marshall</a></li>
                            <li><a href="<?php echo URL;?>shows/7/" class="two-lines disabled">Phil<br>Hindrie</a></li>
                            <li><a href="<?php echo URL;?>shows/8/" class="two-lines disabled">Red Eye Radio</a></li>
                        </ul>
                    </li>
                    <li><a href="<?php echo URL;?>" class="disabled">Community Calendar</a></li>
                    <li><a href="<?php echo URL;?>" class="disabled">Ask the Politician</a></li>
                    <li><a href="<?php echo URL;?>" class="disabled">Blog</a></li>
                    <li><a href="<?php echo URL;?>contact/">Contact</a></li>
                    <li><a href="<?php echo URL;?>advertise/">Advertise with Us</a></li>
                </ul>
            </nav>
        </div><!--row-->
    </header>