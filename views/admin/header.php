<!DOCTYPE html>
<html lang="en-us">
<head>
    <meta charset="utf-8">
    <!--<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">-->

    <title><?php echo (isset($this->title)?$this->title : 'TPMControl v. 2.0');?></title>
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Use the correct meta names below for your web application
         Ref: http://davidbcalhoun.com/2010/viewport-metatag

    <meta name="HandheldFriendly" content="True">
    <meta name="MobileOptimized" content="320">-->

    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

    <!-- Basic Styles -->
    <link rel="stylesheet" type="text/css" media="screen" href="<?php echo ADMIN_URL;?>/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" media="screen" href="<?php echo ADMIN_URL;?>/css/font-awesome.min.css">

    <!-- SmartAdmin Styles : Please note (smartadmin-production.css) was created using LESS variables -->
    <link rel="stylesheet" type="text/css" media="screen" href="<?php echo ADMIN_URL;?>/css/smartadmin-production.css">
    <link rel="stylesheet" type="text/css" media="screen" href="<?php echo ADMIN_URL;?>/css/smartadmin-skins.css">

    <!-- SmartAdmin RTL Support is under construction
    <link rel="stylesheet" type="text/css" media="screen" href="css/smartadmin-rtl.css"> -->

    <link rel="stylesheet" type="text/css" media="screen" href="<?php echo ADMIN_URL;?>/css/tpmc-branding.css">
    <?php
        if(isset($this->css)){
            foreach($this->css AS $css){
                echo "<link rel=\"stylesheet\" type=\"text/css\" media=\"screen\" href=\"".URL."views/".$css."\">";
            }
        }
    ?>


    <!-- Demo purpose only: goes with demo.js, you can delete this css when designing your own WebApp -->
    <link rel="stylesheet" type="text/css" media="screen" href="css/demo.css">

    <!-- FAVICONS -->
    <link rel="shortcut icon" href="<?php echo ADMIN_URL;?>/img/favicon/favicon.ico" type="image/x-icon">
    <link rel="icon" href="<?php echo ADMIN_URL;?>/img/favicon/favicon.ico" type="image/x-icon">

    <!-- GOOGLE FONT -->
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:400italic,700italic,300,400,700">

</head>
<body class="">
<!-- possible classes: minified, fixed-ribbon, fixed-header, fixed-width-->

<!-- HEADER -->
<header id="header">
    <div id="logo-group">

        <!-- PLACE YOUR LOGO HERE -->
        <span id="logo"> <img src="<?php echo ADMIN_URL;?>/img/logo.png" alt="SmartAdmin"> </span>
        <!-- END LOGO PLACEHOLDER -->

        <!-- Note: The activity badge color changes when clicked and resets the number to 0
        Suggestion: You may want to set a flag when this happens to tick off all checked messages / notifications -->
        <span id="activity" class="activity-dropdown"> <i class="fa fa-user"></i> <b class="badge"> 21 </b> </span>

        <!-- AJAX-DROPDOWN : control this dropdown height, look and feel from the LESS variable file -->
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
                    This blank page message helps protect your privacy, or you can show the first message here automatically.
                </div>

                <i class="fa fa-lock fa-4x fa-border"></i>

            </div>
            <!-- end notification content -->

            <!-- footer: refresh area -->
					<span> Last updated on: 12/12/2013 9:43AM
						<button type="button" data-loading-text="<i class='fa fa-refresh fa-spin'></i> Loading..." class="btn btn-xs btn-default pull-right">
                            <i class="fa fa-refresh"></i>
                        </button> </span>
            <!-- end footer -->

        </div>
        <!-- END AJAX-DROPDOWN -->
    </div>

    <!-- projects dropdown -->
    <div id="project-context">

        <span class="label">Activity:</span>
        <span id="project-selector" class="popover-trigger-element dropdown-toggle" data-toggle="dropdown">Recent Activity <i class="fa fa-angle-down"></i></span>

        <!-- Suggestion: populate this list with fetch and push technique -->
        <ul class="dropdown-menu">
            <li>
                <a href="javascript:void(0);">Online e-merchant management system - attaching integration with the iOS</a>
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
                        <img src="<?php echo ADMIN_URL;?>/img/avatars/lee-allen-small.png" alt="me" class="online" />
						<span>
							john.doe
						</span>
                        <i class="fa fa-angle-down"></i>
                    </a>

				</span>
</div>
<!-- end user info -->

<!-- NAVIGATION : This navigation is also responsive

To make this navigation dynamic please make sure to link the node
(the reference to the nav > ul) after page load. Or the navigation
will not initialize.
-->
<nav>
<!-- NOTE: Notice the gaps after each icon usage <i></i>..
Please note that these links work a bit different than
traditional hre="" links. See documentation for details.
-->

<ul>
<li>
    <a href="index.html" title="Dashboard"><i class="fa fa-lg fa-fw fa-home"></i> <span class="menu-item-parent">Dashboard</span></a>
</li>
<li>
    <a href="inbox.html"><i class="fa fa-lg fa-fw fa-inbox"></i> <span class="menu-item-parent">Inbox</span><span class="badge pull-right inbox-badge">14</span></a>
</li>
<li>
    <a href="#"><i class="fa fa-lg fa-fw fa-bar-chart-o"></i> <span class="menu-item-parent">Graphs</span></a>
    <ul>
        <li>
            <a href="flot.html">Flot Chart</a>
        </li>
        <li>
            <a href="morris.html">Morris Charts</a>
        </li>
        <li>
            <a href="inline-charts.html">Inline Charts</a>
        </li>
    </ul>
</li>
<li>
    <a href="#"><i class="fa fa-lg fa-fw fa-table"></i> <span class="menu-item-parent">Tables</span></a>
    <ul>
        <li>
            <a href="table.html">Normal Tables</a>
        </li>
        <li>
            <a href="datatables.html">Data Tables</a>
        </li>
    </ul>
</li>
<li>
    <a href="#"><i class="fa fa-lg fa-fw fa-pencil-square-o"></i> <span class="menu-item-parent">Forms</span></a>
    <ul>
        <li>
            <a href="form-elements.html">Smart Form Elements</a>
        </li>
        <li>
            <a href="form-templates.html">Smart Form Layouts</a>
        </li>
        <li>
            <a href="validation.html">Smart Form Validation</a>
        </li>
        <li>
            <a href="bootstrap-forms.html">Bootstrap Form Elements</a>
        </li>
        <li>
            <a href="plugins.html">Form Plugins</a>
        </li>
        <li>
            <a href="wizard.html">Wizards</a>
        </li>
        <li>
            <a href="other-editors.html">Bootstrap Editors</a>
        </li>
        <li>
            <a href="dropzone.html">Dropzone <span class="badge pull-right inbox-badge bg-color-yellow">new</span></a>
        </li>
    </ul>
</li>
<li>
    <a href="#"><i class="fa fa-lg fa-fw fa-desktop"></i> <span class="menu-item-parent">UI Elements</span></a>
    <ul>
        <li>
            <a href="general-elements.html">General Elements</a>
        </li>
        <li>
            <a href="buttons.html">Buttons</a>
        </li>
        <li>
            <a href="#">Icons</a>
            <ul>
                <li>
                    <a href="fa.html"><i class="fa fa-plane"></i> Font Awesome</a>
                </li>
                <li>
                    <a href="glyph.html"><i class="glyphicon glyphicon-plane"></i> Glyph Icons </a>
                </li>
            </ul>
        </li>
        <li>
            <a href="grid.html">Grid</a>
        </li>
        <li>
            <a href="treeview.html">Tree View</a>
        </li>
        <li>
            <a href="nestable-list.html">Nestable Lists</a>
        </li>
        <li>
            <a href="jqui.html">JQuery UI</a>
        </li>
    </ul>
</li>
<li>
    <a href="#"><i class="fa fa-lg fa-fw fa-folder-open"></i> <span class="menu-item-parent">6 Level Navigation</span></a>
    <ul>
        <li>
            <a href="#"><i class="fa fa-fw fa-folder-open"></i> 2nd Level</a>
            <ul>
                <li>
                    <a href="#"><i class="fa fa-fw fa-folder-open"></i> 3ed Level </a>
                    <ul>
                        <li>
                            <a href="#"><i class="fa fa-fw fa-file-text"></i> File</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-fw fa-folder-open"></i> 4th Level</a>
                            <ul>
                                <li>
                                    <a href="#"><i class="fa fa-fw fa-file-text"></i> File</a>
                                </li>
                                <li>
                                    <a href="#"><i class="fa fa-fw fa-folder-open"></i> 5th Level</a>
                                    <ul>
                                        <li>
                                            <a href="#"><i class="fa fa-fw fa-file-text"></i> File</a>
                                        </li>
                                        <li>
                                            <a href="#"><i class="fa fa-fw fa-file-text"></i> File</a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>
            </ul>
        </li>
        <li>
            <a href="#"><i class="fa fa-fw fa-folder-open"></i> Folder</a>

            <ul>
                <li>
                    <a href="#"><i class="fa fa-fw fa-folder-open"></i> 3ed Level </a>
                    <ul>
                        <li>
                            <a href="#"><i class="fa fa-fw fa-file-text"></i> File</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-fw fa-file-text"></i> File</a>
                        </li>
                    </ul>
                </li>
            </ul>

        </li>
    </ul>
</li>
<li>
    <a href="calendar.html"><i class="fa fa-lg fa-fw fa-calendar"><em>3</em></i> <span class="menu-item-parent">Calendar</span></a>
</li>
<li>
    <a href="widgets.html"><i class="fa fa-lg fa-fw fa-list-alt"></i> <span class="menu-item-parent">Widgets</span></a>
</li>
<li>
    <a href="gallery.html"><i class="fa fa-lg fa-fw fa-picture-o"></i> <span class="menu-item-parent">Gallery</span></a>
</li>
<li>
    <a href="gmap-xml.html"><i class="fa fa-lg fa-fw fa-map-marker"></i> <span class="menu-item-parent">Google Map Skins</span><span class="badge bg-color-greenLight pull-right inbox-badge">9</span></a>
</li>
<li>
    <a href="#"><i class="fa fa-lg fa-fw fa-windows"></i> <span class="menu-item-parent">Miscellaneous</span></a>
    <ul>
        <li>
            <a href="typography.html">Typography</a>
        </li>
        <li>
            <a href="pricing-table.html">Pricing Tables</a>
        </li>
        <li>
            <a href="invoice.html">Invoice</a>
        </li>
        <li>
            <a href="login.html" target="_top">Login</a>
        </li>
        <li>
            <a href="register.html" target="_top">Register</a>
        </li>
        <li>
            <a href="lock.html" target="_top">Locked Screen</a>
        </li>
        <li>
            <a href="error404.html">Error 404</a>
        </li>
        <li>
            <a href="error500.html">Error 500</a>
        </li>
        <li class="active">
            <a href="blank_.html">Blank Page</a>
        </li>
        <li>
            <a href="email-template.html">Email Template</a>
        </li>
        <li>
            <a href="search.html">Search Page</a>
        </li>
        <li>
            <a href="ckeditor.html">CK Editor</a>
        </li>
    </ul>
</li>
<li>
    <a href="#"><i class="fa fa-lg fa-fw fa-file"></i> <span class="menu-item-parent">Other Pages</span></a>
    <ul>
        <li>
            <a href="forum.html">Forum Layout</a>
        </li>
        <li>
            <a href="profile.html">Profile</a>
        </li>
        <li>
            <a href="timeline.html">Timeline</a>
        </li>
    </ul>
</li>
</ul>
</nav>
<span class="minifyme"> <i class="fa fa-arrow-circle-left hit"></i> </span>

</aside>
<!-- END NAVIGATION -->