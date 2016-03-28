<!DOCTYPE html>
<html lang="en" ng-app="atkApp">
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
    <meta charset="utf-8"/>
    <title>Grid - Ace Admin</title>

    <meta name="description" content="bootstrap grid sizing"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0"/>

    <!-- bootstrap & fontawesome -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css"/>
    <link rel="stylesheet" href="assets/font-awesome/4.2.0/css/font-awesome.min.css"/>

    <!-- text fonts -->
    <link rel="stylesheet" href="assets/fonts/fonts.googleapis.com.css"/>

    <!-- page specific plugin styles -->
    <link rel="stylesheet" href="assets/css/colorbox.min.css" />

    <!-- ace styles -->
    <link rel="stylesheet" href="assets/css/ace.min.css" class="ace-main-stylesheet" id="main-ace-style"/>

    <!--[if lte IE 9]>
    <link rel="stylesheet" href="assets/css/ace-part2.min.css" class="ace-main-stylesheet"/>
    <![endif]-->

    <!--[if lte IE 9]>
    <link rel="stylesheet" href="assets/css/ace-ie.min.css"/>
    <![endif]-->


    <!-- inline styles related to this page -->
    <style>
        /* styling the grid page's grid elements */
        .center {
            text-align: center;
        }

        .center [class*="col-"] {
            margin-top: 2px;
            margin-bottom: 2px;

            position: relative;
            text-overflow: ellipsis;
        }

        .center [class*="col-"] div {
            position: relative;
            z-index: 2;

            padding-top: 4px;
            padding-bottom: 4px;

            display: block;
            overflow: hidden;
            text-overflow: ellipsis;
            white-space: nowrap;

            width: 100%;
        }

        .center [class*="col-"] div span {
            position: relative;
            z-index: 2;
        }

        .center [class*="col-"] div:before {
            display: block;
            content: "";

            position: absolute;
            top: 0;
            bottom: 0;
            left: 0;
            right: 0;
            z-index: 1;

            border: 1px solid #DDD;
        }

        .center [class*="col-"] div:hover:before {
            background-color: #FCE6A6;
            border-color: #EFD27A;
        }
    </style>

    <!-- ace settings handler -->
    <script src="assets/js/ace-extra.min.js"></script>

    <!-- HTML5shiv and Respond.js for IE8 to support HTML5 elements and media queries -->

    <!--[if lte IE 8]>
    <script src="assets/js/html5shiv.min.js"></script>
    <script src="assets/js/respond.min.js"></script>
    <![endif]-->
</head>

<body class="no-skin" ng-controller="modalController">
<div id="navbar" class="navbar navbar-default navbar-fixed navbar-fixed-top">


    <div class="navbar-container" id="navbar-container">
        <button type="button" class="navbar-toggle menu-toggler pull-left" id="menu-toggler" data-target="#sidebar">
            <span class="sr-only">Toggle sidebar</span>

            <span class="icon-bar"></span>

            <span class="icon-bar"></span>

            <span class="icon-bar"></span>
        </button>

        <div class="navbar-header pull-left">
            <a href="index.html" class="navbar-brand">
                <small>
                    <i class="fa fa-leaf"></i>
                    Ace Admin
                </small>
            </a>
        </div>

        <div class="navbar-buttons navbar-header pull-right" role="navigation">
            <ul class="nav ace-nav">
                <li class="grey">
                    <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                        <i class="ace-icon fa fa-tasks"></i>
                        <span class="badge badge-grey">4</span>
                    </a>

                    <ul class="dropdown-menu-right dropdown-navbar dropdown-menu dropdown-caret dropdown-close">
                        <li class="dropdown-header">
                            <i class="ace-icon fa fa-check"></i>
                            4 Tasks to complete
                        </li>

                        <li class="dropdown-content">
                            <ul class="dropdown-menu dropdown-navbar">
                                <li>
                                    <a href="#">
                                        <div class="clearfix">
                                            <span class="pull-left">Software Update</span>
                                            <span class="pull-right">65%</span>
                                        </div>

                                        <div class="progress progress-mini">
                                            <div style="width:65%" class="progress-bar"></div>
                                        </div>
                                    </a>
                                </li>

                                <li>
                                    <a href="#">
                                        <div class="clearfix">
                                            <span class="pull-left">Hardware Upgrade</span>
                                            <span class="pull-right">35%</span>
                                        </div>

                                        <div class="progress progress-mini">
                                            <div style="width:35%" class="progress-bar progress-bar-danger"></div>
                                        </div>
                                    </a>
                                </li>

                                <li>
                                    <a href="#">
                                        <div class="clearfix">
                                            <span class="pull-left">Unit Testing</span>
                                            <span class="pull-right">15%</span>
                                        </div>

                                        <div class="progress progress-mini">
                                            <div style="width:15%" class="progress-bar progress-bar-warning"></div>
                                        </div>
                                    </a>
                                </li>

                                <li>
                                    <a href="#">
                                        <div class="clearfix">
                                            <span class="pull-left">Bug Fixes</span>
                                            <span class="pull-right">90%</span>
                                        </div>

                                        <div class="progress progress-mini progress-striped active">
                                            <div style="width:90%" class="progress-bar progress-bar-success"></div>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                        </li>

                        <li class="dropdown-footer">
                            <a href="#">
                                See tasks with details
                                <i class="ace-icon fa fa-arrow-right"></i>
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="purple">
                    <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                        <i class="ace-icon fa fa-bell icon-animated-bell"></i>
                        <span class="badge badge-important">8</span>
                    </a>

                    <ul class="dropdown-menu-right dropdown-navbar navbar-pink dropdown-menu dropdown-caret dropdown-close">
                        <li class="dropdown-header">
                            <i class="ace-icon fa fa-exclamation-triangle"></i>
                            8 Notifications
                        </li>

                        <li class="dropdown-content">
                            <ul class="dropdown-menu dropdown-navbar navbar-pink">
                                <li>
                                    <a href="#">
                                        <div class="clearfix">
													<span class="pull-left">
														<i class="btn btn-xs no-hover btn-pink fa fa-comment"></i>
														New Comments
													</span>
                                            <span class="pull-right badge badge-info">+12</span>
                                        </div>
                                    </a>
                                </li>

                                <li>
                                    <a href="#">
                                        <i class="btn btn-xs btn-primary fa fa-user"></i>
                                        Bob just signed up as an editor ...
                                    </a>
                                </li>

                                <li>
                                    <a href="#">
                                        <div class="clearfix">
													<span class="pull-left">
														<i class="btn btn-xs no-hover btn-success fa fa-shopping-cart"></i>
														New Orders
													</span>
                                            <span class="pull-right badge badge-success">+8</span>
                                        </div>
                                    </a>
                                </li>

                                <li>
                                    <a href="#">
                                        <div class="clearfix">
													<span class="pull-left">
														<i class="btn btn-xs no-hover btn-info fa fa-twitter"></i>
														Followers
													</span>
                                            <span class="pull-right badge badge-info">+11</span>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                        </li>

                        <li class="dropdown-footer">
                            <a href="#">
                                See all notifications
                                <i class="ace-icon fa fa-arrow-right"></i>
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="green">
                    <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                        <i class="ace-icon fa fa-envelope icon-animated-vertical"></i>
                        <span class="badge badge-success">5</span>
                    </a>

                    <ul class="dropdown-menu-right dropdown-navbar dropdown-menu dropdown-caret dropdown-close">
                        <li class="dropdown-header">
                            <i class="ace-icon fa fa-envelope-o"></i>
                            5 Messages
                        </li>

                        <li class="dropdown-content">
                            <ul class="dropdown-menu dropdown-navbar">
                                <li>
                                    <a href="#" class="clearfix">
                                        <img src="assets/avatars/avatar.png" class="msg-photo" alt="Alex's Avatar"/>
												<span class="msg-body">
													<span class="msg-title">
														<span class="blue">Alex:</span>
														Ciao sociis natoque penatibus et auctor ...
													</span>

													<span class="msg-time">
														<i class="ace-icon fa fa-clock-o"></i>
														<span>a moment ago</span>
													</span>
												</span>
                                    </a>
                                </li>

                                <li>
                                    <a href="#" class="clearfix">
                                        <img src="assets/avatars/avatar3.png" class="msg-photo" alt="Susan's Avatar"/>
												<span class="msg-body">
													<span class="msg-title">
														<span class="blue">Susan:</span>
														Vestibulum id ligula porta felis euismod ...
													</span>

													<span class="msg-time">
														<i class="ace-icon fa fa-clock-o"></i>
														<span>20 minutes ago</span>
													</span>
												</span>
                                    </a>
                                </li>

                                <li>
                                    <a href="#" class="clearfix">
                                        <img src="assets/avatars/avatar4.png" class="msg-photo" alt="Bob's Avatar"/>
												<span class="msg-body">
													<span class="msg-title">
														<span class="blue">Bob:</span>
														Nullam quis risus eget urna mollis ornare ...
													</span>

													<span class="msg-time">
														<i class="ace-icon fa fa-clock-o"></i>
														<span>3:15 pm</span>
													</span>
												</span>
                                    </a>
                                </li>

                                <li>
                                    <a href="#" class="clearfix">
                                        <img src="assets/avatars/avatar2.png" class="msg-photo" alt="Kate's Avatar"/>
												<span class="msg-body">
													<span class="msg-title">
														<span class="blue">Kate:</span>
														Ciao sociis natoque eget urna mollis ornare ...
													</span>

													<span class="msg-time">
														<i class="ace-icon fa fa-clock-o"></i>
														<span>1:33 pm</span>
													</span>
												</span>
                                    </a>
                                </li>

                                <li>
                                    <a href="#" class="clearfix">
                                        <img src="assets/avatars/avatar5.png" class="msg-photo" alt="Fred's Avatar"/>
												<span class="msg-body">
													<span class="msg-title">
														<span class="blue">Fred:</span>
														Vestibulum id penatibus et auctor  ...
													</span>

													<span class="msg-time">
														<i class="ace-icon fa fa-clock-o"></i>
														<span>10:09 am</span>
													</span>
												</span>
                                    </a>
                                </li>
                            </ul>
                        </li>

                        <li class="dropdown-footer">
                            <a href="inbox.html">
                                See all messages
                                <i class="ace-icon fa fa-arrow-right"></i>
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="light-blue">
                    <a data-toggle="dropdown" href="#" class="dropdown-toggle">
                        <img class="nav-user-photo" src="assets/avatars/user.jpg" alt="Jason's Photo"/>
								<span class="user-info">
									<small>Welcome,</small>
									Jason
								</span>

                        <i class="ace-icon fa fa-caret-down"></i>
                    </a>

                    <ul class="user-menu dropdown-menu-right dropdown-menu dropdown-yellow dropdown-caret dropdown-close">
                        <li>
                            <a href="#">
                                <i class="ace-icon fa fa-cog"></i>
                                Settings
                            </a>
                        </li>

                        <li>
                            <a href="profile.html">
                                <i class="ace-icon fa fa-user"></i>
                                Profile
                            </a>
                        </li>

                        <li class="divider"></li>

                        <li>
                            <a href="#">
                                <i class="ace-icon fa fa-power-off"></i>
                                Logout
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </div><!-- /.navbar-container -->
</div>

<div class="main-container" id="main-container">
    <script type="text/javascript">
        try {
            ace.settings.check('main-container', 'fixed')
        } catch (e) {
        }
    </script>

    <div id="sidebar" class="sidebar sidebar-fixed responsive">


        <div class="sidebar-shortcuts" id="sidebar-shortcuts">
            <button class="btn btn-success btn-block">App Ver1.0b</button>
        </div><!-- /.sidebar-shortcuts -->

        <ul class="nav nav-list">
            <li class="">
                <a href="index.html">
                    <i class="menu-icon fa fa-tachometer"></i>
                    <span class="menu-text"> Dashboard </span>
                </a>

                <b class="arrow"></b>
            </li>
            <li class="">
                <a href="#" class="dropdown-toggle">
                    <i class="menu-icon fa fa-list"></i>
                    <span class="menu-text"> Kategori  </span>

                    <b class="arrow fa fa-angle-down"></b>
                </a>

                <b class="arrow"></b>

                <ul class="submenu">
                    <li class="">
                        <a href="tables.html">
                            <i class="menu-icon fa fa-caret-right"></i>
                            Semua
                        </a>

                        <b class="arrow"></b>
                    </li>

                    <li class="">
                        <a href="jqgrid.html">
                            <i class="menu-icon fa fa-caret-right"></i>
                            Alat Tulis
                        </a>

                        <b class="arrow"></b>
                    </li>
                    <li class="">
                        <a href="jqgrid.html">
                            <i class="menu-icon fa fa-caret-right"></i>
                            Peralatan
                        </a>

                        <b class="arrow"></b>
                    </li>
                    <li class="">
                        <a href="jqgrid.html">
                            <i class="menu-icon fa fa-caret-right"></i>
                            Lain-lain
                        </a>

                        <b class="arrow"></b>
                    </li>
                </ul>
            </li>
        </ul><!-- /.nav-list -->
    </div>

    <div class="main-content">
        <div class="main-content-inner">
            <div class="breadcrumbs breadcrumbs-fixed" id="breadcrumbs">


                <ul class="breadcrumb">
                    <li>
                        <i class="ace-icon fa fa-home home-icon"></i>
                        <a href="#">Home</a>
                    </li>

                    <li>
                        <a href="#">Other Pages</a>
                    </li>
                    <li class="active">Grid</li>
                </ul><!-- /.breadcrumb -->

                <div class="nav-search" id="nav-search">
                    <form class="form-search">
								<span class="input-icon">
									<input type="text" placeholder="Search ..." class="nav-search-input"
                                           id="nav-search-input" autocomplete="off"/>
									<i class="ace-icon fa fa-search nav-search-icon"></i>
								</span>
                    </form>
                </div><!-- /.nav-search -->
            </div>

            <div class="page-content">


                <div class="page-header">
                    <h1>
                        Grid
                        <small>
                            <i class="ace-icon fa fa-angle-double-right"></i>
                            bootstrap grid sizing
                        </small>
                    </h1>
                </div><!-- /.page-header -->

                <div class="row">
                    <div class="col-sm-6 col-md-3">
                        <div class="well well-sm">
                            <a href="#" class="thumbnail" ng-click="showyesno()">
                                <img src="assets/images/default.jpg" alt="Generic placeholder thumbnail">
                            </a>

                            <h4 class="smaller lighter">Normal Well</h4>
                            <button class="btn btn-xs btn-primary btn-block" ng-click="showyesno()">
                                <i class="ace-icon fa fa-info-circle align-top bigger-125"></i>
                                DETAIL
                            </button>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-3">
                        <div class="well well-sm">
                            <a href="#" class="thumbnail" ng-click="showyesno()">
                                <img src="assets/images/default.jpg" alt="Generic placeholder thumbnail">
                            </a>

                            <h4 class="smaller lighter">Normal Well</h4>
                            <button class="btn btn-xs btn-primary btn-block" ng-click="showyesno()">
                                <i class="ace-icon fa fa-info-circle align-top bigger-125"></i>
                                DETAIL
                            </button>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-3">
                        <div class="well well-sm">
                            <a href="#" class="thumbnail" ng-click="showyesno()">
                                <img src="assets/images/default.jpg" alt="Generic placeholder thumbnail">
                            </a>

                            <h4 class="smaller lighter">Normal Well</h4>
                            <button class="btn btn-xs btn-primary btn-block" ng-click="showyesno()">
                                <i class="ace-icon fa fa-info-circle align-top bigger-125"></i>
                                DETAIL
                            </button>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-3">
                        <div class="well well-sm">
                            <a href="#" class="thumbnail" ng-click="showyesno()">
                                <img src="assets/images/default.jpg" alt="Generic placeholder thumbnail">
                            </a>

                            <h4 class="smaller lighter">Normal Well</h4>
                            <button class="btn btn-xs btn-primary btn-block" ng-click="showyesno()">
                                <i class="ace-icon fa fa-info-circle align-top bigger-125"></i>
                                DETAIL
                            </button>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-3">
                        <div class="well well-sm">
                            <a href="#" class="thumbnail" ng-click="showyesno()">
                                <img src="assets/images/default.jpg" alt="Generic placeholder thumbnail">
                            </a>

                            <h4 class="smaller lighter">Normal Well</h4>
                            <button class="btn btn-xs btn-primary btn-block" ng-click="showyesno()">
                                <i class="ace-icon fa fa-info-circle align-top bigger-125"></i>
                                DETAIL
                            </button>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-3">
                        <div class="well well-sm">
                            <a href="#" class="thumbnail" ng-click="showyesno()">
                                <img src="assets/images/default.jpg" alt="Generic placeholder thumbnail">
                            </a>

                            <h4 class="smaller lighter">Normal Well</h4>
                            <button class="btn btn-xs btn-primary btn-block" ng-click="showyesno()">
                                <i class="ace-icon fa fa-info-circle align-top bigger-125"></i>
                                DETAIL
                            </button>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-3">
                        <div class="well well-sm">
                            <a href="#" class="thumbnail" ng-click="showyesno()">
                                <img src="assets/images/default.jpg" alt="Generic placeholder thumbnail">
                            </a>

                            <h4 class="smaller lighter">Normal Well</h4>
                            <button class="btn btn-xs btn-primary btn-block" ng-click="showyesno()">
                                <i class="ace-icon fa fa-info-circle align-top bigger-125"></i>
                                DETAIL
                            </button>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-3">
                        <div class="well well-sm">
                            <a href="#" class="thumbnail" ng-click="showyesno()">
                                <img src="assets/images/default.jpg" alt="Generic placeholder thumbnail">
                            </a>

                            <h4 class="smaller lighter">Normal Well</h4>
                            <button class="btn btn-xs btn-primary btn-block" ng-click="showyesno()">
                                <i class="ace-icon fa fa-info-circle align-top bigger-125"></i>
                                DETAIL
                            </button>
                        </div>
                    </div>


                </div>
            </div><!-- /.page-content -->
        </div>
    </div><!-- /.main-content -->

    <div class="footer">
        <div class="footer-inner">
            <div class="footer-content">
						<span class="bigger-120">
							<span class="blue bolder">Ace</span>
							Application &copy; 2013-2014
						</span>

                &nbsp; &nbsp;
						<span class="action-buttons">
							<a href="#">
                                <i class="ace-icon fa fa-twitter-square light-blue bigger-150"></i>
                            </a>

							<a href="#">
                                <i class="ace-icon fa fa-facebook-square text-primary bigger-150"></i>
                            </a>

							<a href="#">
                                <i class="ace-icon fa fa-rss-square orange bigger-150"></i>
                            </a>
						</span>
            </div>
        </div>
    </div>

    <a href="#" id="btn-scroll-up" class="btn-scroll-up btn btn-sm btn-inverse">
        <i class="ace-icon fa fa-angle-double-up icon-only bigger-110"></i>
    </a>
</div><!-- /.main-container -->

<!-- basic scripts -->

<!--[if !IE]> -->
<script src="assets/js/jquery.2.1.1.min.js"></script>

<!-- <![endif]-->

<!--[if IE]>
<script src="assets/js/jquery.1.11.1.min.js"></script>
<![endif]-->

<!--[if !IE]> -->
<script type="text/javascript">
    window.jQuery || document.write("<script src='assets/js/jquery.min.js'>" + "<" + "/script>");
</script>

<!-- <![endif]-->

<!--[if IE]>
<script type="text/javascript">
    window.jQuery || document.write("<script src='assets/js/jquery1x.min.js'>" + "<" + "/script>");
</script>
<![endif]-->
<script type="text/javascript">
    if ('ontouchstart' in document.documentElement) document.write("<script src='assets/js/jquery.mobile.custom.min.js'>" + "<" + "/script>");
</script>
<script src="assets/js/bootstrap.min.js"></script>

<!-- page specific plugin scripts -->

<!-- ace scripts -->
<script src="assets/js/ace-elements.min.js"></script>
<script src="assets/js/ace.min.js"></script>

<!-- Application Dependencies -->
<script src="node_modules/angular/angular.js"></script>
<script src="node_modules/angular-ui-router/angular-ui-router.js"></script>
<script src="node_modules/satellizer/satellizer.js"></script>
<script src="node_modules/angular-modal-service/angular-modal-service.min.js"></script>

<!-- Application Scripts -->
<script src="scripts/app.js"></script>



</body>
</html>
