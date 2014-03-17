<!-- MAIN PANEL -->
<div id="main" role="main">

    <!-- RIBBON -->
    <div id="ribbon">

        <span class="ribbon-button-alignment"> <span id="refresh" class="btn btn-ribbon" data-title="refresh"  rel="tooltip" data-placement="bottom" data-original-title="<i class='text-warning fa fa-warning'></i> Warning! This will reset all your widget settings." data-html="true"><i class="fa fa-refresh"></i></span> </span>

        <!-- breadcrumb -->
        <ol class="breadcrumb">
            <li>Home</li><li>Dashboard</li>
        </ol>
        <!-- end breadcrumb -->

        <!-- You can also add more buttons to the
        ribbon for further usability

        Example below:

        <span class="ribbon-button-alignment pull-right">
        <span id="search" class="btn btn-ribbon hidden-xs" data-title="search"><i class="fa-grid"></i> Change Grid</span>
        <span id="add" class="btn btn-ribbon hidden-xs" data-title="add"><i class="fa-plus"></i> Add</span>
        <span id="search" class="btn btn-ribbon" data-title="search"><i class="fa-search"></i> <span class="hidden-mobile">Search</span></span>
        </span> -->

    </div>
    <!-- END RIBBON -->

    <!-- MAIN CONTENT -->
    <div id="content">

        <div class="row">
            <div class="col-xs-12 col-sm-7 col-md-7 col-lg-4">
                <h1 class="page-title txt-color-blueDark"><i class="fa-fw fa fa-home"></i> Dashboard <span>> My Dashboard</span></h1>
            </div>

            <div class="col-xs-12 col-sm-5 col-md-5 col-lg-8">
                <ul id="sparks" class="">
                    <li class="sparks-info">
                        <h5> Visitors <span class="txt-color-blue">47,171</span></h5>
                        <div class="sparkline txt-color-blue hidden-mobile hidden-md hidden-sm">
                            1300, 1877, 2500, 2577, 2000, 2100, 3000, 2700, 3631, 2471, 2700, 3631, 2471
                        </div>
                    </li>
                    <li class="sparks-info">
                        <h5> Site Traffic <span class="txt-color-purple"><i class="fa fa-arrow-circle-up"></i>&nbsp;45%</span></h5>
                        <div class="sparkline txt-color-purple hidden-mobile hidden-md hidden-sm">
                            110,150,300,130,400,240,220,310,220,300, 270, 210
                        </div>
                    </li>
                    <li class="sparks-info">
                        <h5> Site Orders <span class="txt-color-greenDark"><i class="fa fa-shopping-cart"></i>&nbsp;2447</span></h5>
                        <div class="sparkline txt-color-greenDark hidden-mobile hidden-md hidden-sm">
                            110,150,300,130,400,240,220,310,220,300, 270, 210
                        </div>
                    </li>
                </ul>
            </div>
        </div>

        <!-- BEGIN DASHBOARD WIDGETS -->
        <section id="widget-grid" class="">

            <div class="row">

                <!-- BEGIN CHAT CLIENT -->
                <article class="col-sm-12 col-md-12 col-lg-6">
                    <!-- new widget -->
                    <div class="jarviswidget jarviswidget-color-blueDark" id="wid-id-1" data-widget-editbutton="false"
                         data-widget-fullscreenbutton="false">

                        <!-- widget options:
                        usage: <div class="jarviswidget" id="wid-id-0" data-widget-editbutton="false">

                        data-widget-colorbutton="false"
                        data-widget-editbutton="false"
                        data-widget-togglebutton="false"
                        data-widget-deletebutton="false"
                        data-widget-fullscreenbutton="false"
                        data-widget-custombutton="false"
                        data-widget-collapsed="true"
                        data-widget-sortable="false"

                        -->

                        <header>
                            <span class="widget-icon"> <i class="fa fa-comments txt-color-white"></i> </span>

                            <h2> SmartChat </h2>

                            <div class="widget-toolbar">
                                <!-- add: non-hidden - to disable auto hide -->

                                <div class="btn-group">
                                    <button class="btn dropdown-toggle btn-xs btn-success" data-toggle="dropdown">
                                        Status <i class="fa fa-caret-down"></i>
                                    </button>
                                    <ul class="dropdown-menu pull-right js-status-update">
                                        <li>
                                            <a href="javascript:void(0);"><i class="fa fa-circle txt-color-green"></i> Online</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);"><i class="fa fa-circle txt-color-red"></i> Busy</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);"><i class="fa fa-circle txt-color-orange"></i> Away</a>
                                        </li>
                                        <li class="divider"></li>
                                        <li>
                                            <a href="javascript:void(0);"><i class="fa fa-power-off"></i> Log Off</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </header>

                        <!-- widget div-->
                        <div>
                            <!-- widget edit box -->
                            <div class="jarviswidget-editbox">
                                <div>
                                    <label>Title:</label>
                                    <input type="text"/>
                                </div>
                            </div>
                            <!-- end widget edit box -->

                            <div class="widget-body widget-hide-overflow no-padding">
                                <!-- content goes here -->

                                <!-- CHAT CONTAINER -->
                                <div id="chat-container">
                                    <span class="chat-list-open-close"><i class="fa fa-user"></i><b>!</b></span>

                                    <div class="chat-list-body custom-scroll">
                                        <ul id="chat-users">
                                            <li>
                                                <a href="javascript:void(0);"><img src="<?php echo ADMIN_URL;?>img/avatars/lee-allen-small.png" alt="">Lee Allen <span
                                                        class="badge badge-inverse">23</span><span class="state"><i
                                                            class="fa fa-circle txt-color-green pull-right"></i></span></a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0);"><img src="<?php echo ADMIN_URL;?>img/avatars/keven-cohen-small.png" alt="">Keven Cohen <span
                                                        class="state"><i class="last-online pull-right">2hrs</i></span></a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0);"><img src="<?php echo ADMIN_URL;?>img/avatars/chris-fonte-small.png" alt="">Chris Fonte <span
                                                        class="state"><i class="last-online pull-right">45m</i></span></a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0);"><img src="<?php echo ADMIN_URL;?>img/avatars/nathan-halydier-small.png" alt="">Nathan Halydier <span
                                                        class="state"><i class="fa fa-circle txt-color-green pull-right"></i></span></a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0);"><img src="<?php echo ADMIN_URL;?>img/avatars/garett-halydier-small.png" alt="">Garett Halydier <span
                                                        class="state"><i class="fa fa-circle txt-color-green pull-right"></i></span></a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0);"><img src="<?php echo ADMIN_URL;?>img/avatars/ashley-rupchock-small.png" alt="">Ashley Rupchock <span
                                                        class="state"><i class="last-online pull-right">2m</i></span> </a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0);"><img src="<?php echo ADMIN_URL;?>img/avatars/erin-waldron-small.png" alt="">Erin Waldron <span
                                                        class="state"><i class="last-online pull-right">2m</i></span> </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="chat-list-footer">

                                        <div class="control-group">

                                            <form class="smart-form">

                                                <section>
                                                    <label class="input">
                                                        <input type="text" id="filter-chat-list" placeholder="Filter">
                                                    </label>
                                                </section>

                                            </form>

                                        </div>

                                    </div>

                                </div>

                                <!-- CHAT BODY -->
                                <div id="chat-body" class="chat-body custom-scroll">
                                    <ul>
                                        <li class="message">
                                            <img src="<?php echo ADMIN_URL;?>img/avatars/lee-allen-small.png" class="online" alt="">

                                            <div class="message-text">
                                                <time>
                                                    2014-01-13
                                                </time>
                                                <a href="javascript:void(0);" class="username">Lee Allen</a> So somewhere along the line I wrote a chat app like it's 1999.
                                                And here I am, talking to myself! Is there anybody out there? Is anyone home? Oh well... here. Have some filez!
                                                <p class="chat-file row">
                                                    <b class="pull-left col-sm-6"> <!--<i class="fa fa-spinner fa-spin"></i>--> <i
                                                            class="fa fa-file"></i> report-2013-demographic-report-annual-earnings.xls </b>
                                <span class="col-sm-6 pull-right"> <a href="javascript:void(0);"
                                                                      class="btn btn-xs btn-default">cancel</a> <a
                                        href="javascript:void(0);" class="btn btn-xs btn-success">save</a> </span>
                                                </p>

                                                <p class="chat-file row">
                                                    <b class="pull-left col-sm-6"> <i class="fa fa-ok txt-color-green"></i>
                                                        tobacco-report-2012.doc </b>
                                <span class="col-sm-6 pull-right"> <a href="javascript:void(0);"
                                                                      class="btn btn-xs btn-primary">open</a> </span>
                                                </p></div>
                                        </li>
                                        <li class="message">
                                            <img src="<?php echo ADMIN_URL;?>img/avatars/keven-cohen-small.png" class="online" alt="">

                                            <div class="message-text">
                                                <time>
                                                    2014-01-13
                                                </time>
                                                <a href="javascript:void(0);" class="username">Keven Cohen</a> Haha! Yeah I know what you mean.
                                                Thanks for the file Lee! <i class="fa fa-smile-o txt-color-orange"></i>
                                            </div>
                                        </li>

                                        <li class="message">
                                            <img src="<?php echo ADMIN_URL;?>img/avatars/lee-allen-small.png" class="online" alt="">

                                            <div class="message-text">
                                                <time>
                                                    2014-01-13
                                                </time>
                                                <a href="javascript:void(0);" class="username">Lee Allen</a> Holy crap! Someone answered! I'm not
                                                aloooooone! 

                                                 <i class="fa fa-smile-o txt-color-orange"></i>
                                            </div>
                                        </li>
                                    </ul>

                                </div>

                                <!-- CHAT FOOTER -->
                                <div class="chat-footer">

                                    <!-- CHAT TEXTAREA -->
                                    <div class="textarea-div">

                                        <div class="typearea">
                                            <textarea placeholder="Write a reply..." id="textarea-expand" class="custom-scroll"></textarea>
                                        </div>

                                    </div>

                                    <!-- CHAT REPLY/SEND -->
											<span class="textarea-controls">
												<button class="btn btn-sm btn-primary pull-right">
                                                    Reply
                                                </button> <span class="pull-right smart-form"
                                                                style="margin-top: 3px; margin-right: 10px;"> <label
                                                        class="checkbox pull-right">
                                                        <input type="checkbox" name="subscription" id="subscription">
                                                        <i></i>Press <strong> ENTER </strong> to send
                                                    </label> </span> <a href="javascript:void(0);" class="pull-left"><i
                                                        class="fa fa-camera fa-fw fa-lg"></i></a> </span>

                                </div>

                                <!-- end content -->
                            </div>

                        </div>
                        <!-- end widget div -->
                    </div>
                    <!-- end widget -->
                </article>
                <!-- END CHAT CLIENT -->

                <!-- BEGIN TO DO LIST -->
                <article class="col-sm-12 col-md-12 col-lg-6">
                    <?php echo file_get_contents(ADMIN_URL."widgets/todo.ssi.php");?>
                </article>
                <!-- END TO DO LIST -->
            </div>


        </section>
        <!-- END DASHBOARD WIDGETS -->

    </div>
    <!-- END MAIN CONTENT -->

</div>
<!-- END MAIN PANEL -->