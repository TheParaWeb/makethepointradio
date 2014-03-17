<!DOCTYPE html>
<html lang="en-us">
<head>
    <meta charset="utf-8">
    <!--<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">-->

    <title><?php echo(isset($this->title) ? $this->title : 'TPMControl v. 2.0'); ?></title>
    <meta name="description" content="">
    <meta name="author" content="">


    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="viewport" content="target-densitydpi=device-dpi"/>

    <!-- Basic Styles -->
    <link rel="stylesheet" type="text/css" media="screen" href="<?php echo ADMIN_URL; ?>/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" media="screen" href="<?php echo ADMIN_URL; ?>/css/font-awesome.min.css">

    <!-- SmartAdmin Styles : Please note (smartadmin-production.css) was created using LESS variables -->
    <link rel="stylesheet" type="text/css" media="screen" href="<?php echo ADMIN_URL; ?>/css/smartadmin-production.css">
    <link rel="stylesheet" type="text/css" media="screen" href="<?php echo ADMIN_URL; ?>/css/smartadmin-skins.css">

    <link rel="stylesheet" type="text/css" media="screen" href="<?php echo ADMIN_URL; ?>/css/tpmc-branding.css">
    <?php
    if (isset($this->css)) {
        foreach ($this->css AS $css) {
            echo "<link rel=\"stylesheet\" type=\"text/css\" media=\"screen\" href=\"" . URL . "views/" . $css . "\">";
        }
    }
    ?>

    <!-- FAVICONS -->
    <link rel="shortcut icon" href="<?php echo ADMIN_URL; ?>/img/favicon/favicon.ico" type="image/x-icon">
    <link rel="icon" href="<?php echo ADMIN_URL; ?>/img/favicon/favicon.ico" type="image/x-icon">

    <!-- GOOGLE FONT -->
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:400italic,700italic,300,400,700">
</head>

<body class="fixed-header fixed-ribbon fixed-navigation">
<!-- possible classes: minified, fixed-ribbon, fixed-header, fixed-width-->

<!-- HEADER -->
<header id="header">
    <div id="logo-group">

        <!-- LOGO -->
        <span id="logo"> <img src="<?php echo ADMIN_URL; ?>/img/logo.png" alt="SmartAdmin"> </span>
        <!-- END LOGO PLACEHOLDER -->

        <!-- Note: The activity badge color changes when clicked and resets the number to 0
        Suggestion: You may want to set a flag when this happens to tick off all checked messages / notifications -->
        <span id="activity" class="activity-dropdown"> <i class="fa fa-user"></i> <b class="badge"> 21 </b> </span>

        <!-- AJAX-DROPDOWN  -->
        <div class="ajax-dropdown">

            <!-- the ID links are fetched via AJAX to the ajax container "ajax-notifications" -->
            <div class="btn-group btn-group-justified" data-toggle="buttons">
                <label class="btn btn-default">
                    <input type="radio" name="activity" id="ajax/notify/mail.html">
                    Msgs (14) </label>
                <label class="btn btn-default">
                    <input type="radio" name="activity" id="ajax/notify/notifications.html">
                    notify (3) </label>
                <label class="btn btn-default">
                    <input type="radio" name="activity" id="ajax/notify/tasks.html">
                    Tasks (4) </label>
            </div>

            <!-- notification content -->
            <div class="ajax-notifications custom-scroll">

                <div class="alert alert-transparent">
                    <h4>Click a button to show messages here</h4>
                    This blank page message helps protect your privacy, or you can show the first message here
                    automatically.
                </div>

                <i class="fa fa-lock fa-4x fa-border"></i>

            </div>
            <!-- end notification content -->

            <!-- footer: refresh area -->
					<span> Last updated on: 12/12/2013 9:43AM
						<button type="button" data-loading-text="<i class='fa fa-refresh fa-spin'></i> Loading..."
                                class="btn btn-xs btn-default pull-right">
                            <i class="fa fa-refresh"></i>
                        </button> </span>
            <!-- end footer -->

        </div>
        <!-- END AJAX-DROPDOWN -->
    </div>

    <!-- projects dropdown -->
    <div id="project-context">

        <span class="label">Recent:</span>
        <span id="project-selector" class="popover-trigger-element dropdown-toggle" data-toggle="dropdown">Recent Activity <i
                class="fa fa-angle-down"></i></span>

        <!-- Suggestion: populate this list with fetch and push technique -->
        <ul class="dropdown-menu">
            <li>
                <a href="javascript:void(0);">Online e-merchant management system - attaching integration with the
                    iOS</a>
            </li>
            <li>
                <a href="javascript:void(0);">Notes on pipeline upgradee</a>
            </li>
            <li>
                <a href="javascript:void(0);">Assesment Report for merchant account</a>
            </li>
            <li class="divider"></li>
            <li>
                <a href="javascript:void(0);"><i class="fa fa-power-off"></i> Clear</a>
            </li>
        </ul>
        <!-- end dropdown-menu-->

    </div>
    <!-- end projects dropdown -->

    <!-- pulled right: nav area -->
    <div class="pull-right">

        <!-- collapse menu button -->
        <div id="hide-menu" class="btn-header pull-right">
            <span> <a href="javascript:void(0);" title="Collapse Menu"><i class="fa fa-reorder"></i></a> </span>
        </div>
        <!-- end collapse menu -->

        <!-- logout button -->
        <div id="logout" class="btn-header transparent pull-right">
            <span> <a href="login.html" title="Sign Out"><i class="fa fa-sign-out"></i></a> </span>
        </div>
        <!-- end logout button -->

        <!-- search mobile button (this is hidden till mobile view port) -->
        <div id="search-mobile" class="btn-header transparent pull-right">
            <span> <a href="javascript:void(0)" title="Search"><i class="fa fa-search"></i></a> </span>
        </div>
        <!-- end search mobile button -->

        <!-- input: search field -->
        <form action="#search.html" class="header-search pull-right">
            <input type="text" placeholder="Find reports and more" id="search-fld">
            <button type="submit">
                <i class="fa fa-search"></i>
            </button>
            <a href="javascript:void(0);" id="cancel-search-js" title="Cancel Search"><i class="fa fa-times"></i></a>
        </form>
        <!-- end input: search field -->

        <!-- multiple lang dropdown : find all flags in the image folder
        <ul class="header-dropdown-list hidden-xs">
            <li>
                <a href="#" class="dropdown-toggle" data-toggle="dropdown"> <img alt="" src="img/flags/us.png"> <span> US </span> <i class="fa fa-angle-down"></i> </a>
                <ul class="dropdown-menu pull-right">
                    <li class="active">
                        <a href="javascript:void(0);"><img alt="" src="img/flags/us.png"> US</a>
                    </li>
                    <li>
                        <a href="javascript:void(0);"><img alt="" src="img/flags/es.png"> Spanish</a>
                    </li>
                    <li>
                        <a href="javascript:void(0);"><img alt="" src="img/flags/de.png"> German</a>
                    </li>
                </ul>
            </li>
        </ul>
        <!-- end multiple lang -->

    </div>
    <!-- end pulled right: nav area -->

</header>
<!-- END HEADER -->

<!-- Left panel : Navigation area -->
<!-- Note: This width of the aside area can be adjusted through LESS variables -->
<aside id="left-panel">

    <!-- User info -->
    <div class="login-info">
				<span> <!-- User image size is adjusted inside CSS, it should stay as it -->

					<a href="javascript:void(0);" id="show-shortcut">
                        <img src="<?php echo ADMIN_URL . $this->admin['avatarSmall']; ?>" alt="me" class="online"/>
						<span>
							<?php echo $this->admin['name']; ?>
						</span>
                        <i class="fa fa-angle-down"></i>
                    </a>

				</span>
    </div>
    <!-- end user info -->

    <!-- NAVIGATION : This navigation is also responsive. -->
    <nav>
        <!-- NOTE: Notice the gaps after each icon usage <i></i>..
        Please note that these links work a bit different than
        traditional hre="" links. See documentation for details.
        -->

        <ul>
            <li class="active">
                <a href="<?php echo URL; ?>admin/" title="Dashboard"><i class="fa fa-lg fa-fw fa-home"></i> <span
                        class="menu-item-parent">Dashboard</span></a>
            </li>
            <li>
                <a href="<?php echo URL; ?>admin/inbox/"><i class="fa fa-lg fa-fw fa-inbox"></i> <span
                        class="menu-item-parent">Inbox</span><span class="badge pull-right bg-color-blue">14</span></a>
            </li>
            <li>
                <a href="#"><i class="fa fa-lg fa-fw fa-bar-chart-o"></i> <span
                        class="menu-item-parent">Statistics</span></a>
                <ul>
                    <li>
                        <a href="<?php echo URL; ?>admin/statistics/usage/">Site Usage</a>
                    </li>
                    <li>
                        <a href="<?php echo URL; ?>admin/statistics/para/">Para Analytics</a>
                    </li>
                    <li>
                        <a href="<?php echo URL; ?>admin/statistics/heat/">Heat Map</a>
                    </li>
                </ul>
            </li>

            <li>
                <a href="calendar.html"><i class="fa fa-lg fa-fw fa-microphone"></i> <span
                        class="menu-item-parent">Shows</span></a>
            </li>

            <li>
                <a href="<?php echo URL;?>admin/blog/"><i class="fa fa-lg fa-fw fa-pencil-square-o"></i> <span
                        class="menu-item-parent">Blog</span></a>
            </li>

            <li>
                <a href="calendar.html"><i class="fa fa-lg fa-fw fa-quote-left"></i> <span
                        class="menu-item-parent">Ask the Politician</span></a>
            </li>

            <li>
                <a href="calendar.html"><i class="fa fa-lg fa-fw fa-calendar"></i> <span
                        class="menu-item-parent">Calendar</span><span class="badge pull-right bg-color-blue">2</span></a>
            </li>

            <li>
                <a href="calendar.html"><i class="fa fa-lg fa-fw fa-question-circle"></i> <span
                        class="menu-item-parent">Listener Poll</span></a>
            </li>

            <li>
                <a href="calendar.html"><i class="fa fa-lg fa-fw fa-windows"></i> <span
                        class="menu-item-parent">Featured</span></a>
            </li>



            <li>
                <a href="#"><i class="fa fa-lg fa-fw fa-list-alt"></i> <span class="menu-item-parent">Widgets</span></a>
                <ul>
                    <li>
                        <a href="<?php echo URL; ?>admin/statistics/usage/">News</a>
                    </li>
                    <li>
                        <a href="<?php echo URL; ?>admin/statistics/usage/">Facebook</a>
                    </li>
                    <li>
                        <a href="<?php echo URL; ?>admin/statistics/para/">Weather</a>
                    </li>
                    <li>
                        <a href="<?php echo URL; ?>admin/statistics/polls/">Gas</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="gallery.html"><i class="fa fa-lg fa-fw fa-music"></i> <span class="menu-item-parent">Podcasts</span></a>
            </li>
            <li>
                <a href="gallery.html"><i class="fa fa-lg fa-fw fa-money"></i> <span class="menu-item-parent">Advertising</span></a>
            </li>

        </ul>
    </nav>
    <span class="minifyme"> <i class="fa fa-arrow-circle-left hit"></i> </span>

</aside>
<!-- END NAVIGATION -->