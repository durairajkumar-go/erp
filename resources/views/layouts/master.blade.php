<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel DataTables Tutorial</title>

        <!-- Start Global Mandatory Style
        =====================================================================-->
        <link href="{{ url('assets/dist/css/base.css') }}" rel="stylesheet" type="text/css"/>
        <!-- End Global Mandatory Style
        =====================================================================-->
        <!-- Start page Label Plugins 
        =====================================================================-->
        <!-- dataTables css -->
        <link href="{{ url('assets/plugins/datatables/dataTables.min.css') }}" rel="stylesheet" type="text/css"/>
        <!-- End page Label Plugins 
        =====================================================================-->
        <!-- Start Theme Layout Style
        =====================================================================-->
        <!-- Theme style -->
        <link href="{{ url('assets/dist/css/component_ui.min.css') }}" rel="stylesheet" type="text/css"/>
        <!-- Theme style rtl -->
        <!--<link href="{{ url('assets/dist/css/component_ui_rtl.css') }}" rel="stylesheet" type="text/css"/>-->
        <!-- Custom css -->
        <link href="{{ url('assets/dist/css/custom.css') }}" rel="stylesheet" type="text/css"/>

        <link href="http://codeseven.github.io/toastr/build/toastr.min.css" rel="stylesheet" type="text/css"/>

      <!-- jQuery -->
        <script src="{{ url('assets/plugins/jQuery/jquery-1.12.4.min.js') }}" type="text/javascript"></script>

        <!-- End Theme Layout Style
        =====================================================================-->

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
        <style>
        
        .preload * {
  -webkit-transition: none !important;
  -moz-transition: none !important;
  -ms-transition: none !important;
  -o-transition: none !important;
}
            .dropdown-menu{
            	    z-index: 991031;
            }
            .main-header {
			    position: relative;
			    margin-bottom: 2px;
			}
			.content-header .header-title h1 {
			    margin: 0;
			}
			.content-header {
			    position: relative;
			    padding: 5px 15px;
			    background-color: #fff;
			    border: 1px solid #e1e6ef;
			    margin: 0 auto 1px;
			}
			.header-title .breadcrumb {
			    float: right;
			    background: #fff;
			    margin-top: 0;
			    margin-bottom: 0;
			    font-size: 13px;
			    padding: 7px;
			    position: absolute;
			    bottom: 2px;
			    right: 15px;
			    border-radius: 0;
			    border: 0;
			    font-weight: 600;
			}
			.glyphicon{
				color: #fff;
			}
			.main-header .top-nav{
				    min-height: 36px;
			}
			.attr-nav>ul>li>a{
				    padding: 11px 15px;
			}
			.navbar-top-links li a{
				padding: 5px 2px;
				min-height: 0px;
			}
			.main-header .top-nav .navbar-brand{
				    height: 6px;
			}
			.main-header .top-nav .navbar-brand>img{
				    height: 33px;
			}
			nav.navbar.bootsnav ul.nav>li>a{
				padding:6px 12px;
			}
			.wrap-sticky{
				height: 50px;
			}
			body{
				font-size: 13px !important; 
			}
			.container{
				width: 90%;
			}
			.form-group {
			    margin-bottom: 0px;
			}


        </style>
    </head>
    <body>
<div class="wrapper">
        <div class="wrapper animsition" style="animation-duration: 1500ms; opacity: 1;">


<header class="main-header">
                <!-- top navigation -->
                <nav class="navbar top-nav">
                    <div class="container">
                        <div class="navbar-header hidden-xs">
                            <a class="navbar-brand" href="index.html"> <img src="{{ url('assets/dist/img/logo.png') }}" alt=""></a>
                        </div>
                        <!-- Start Atribute Navigation -->
                        <div class="attr-nav">
                            <ul>
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                        <i class="ti-shopping-cart-full"></i>
                                        <span class="badge">3</span>
                                    </a>
                                    <ul class="dropdown-menu cart-list">
                                        <li>
                                            <a href="#" class="photo"><img src="{{ url('assets/dist/img/cart-1.jpg"') }} class="cart-thumb" alt=""></a>
                                            <h5><a href="#">Smartphone RAM 4 GB New</a></h5>
                                            <p>2x - <span class="price">$99.99</span></p>
                                        </li>
                                        <li>
                                            <a href="#" class="photo"><img src="{{ url('assets/dist/img/cart-2.jpg"') }} class="cart-thumb" alt=""></a>
                                            <h5><a href="#">Fujifilm INSTAX Mini 8</a></h5>
                                            <p>1x - <span class="price">$33.33</span></p>
                                        </li>
                                        <li>
                                            <a href="#" class="photo"><img src="{{ url('assets/dist/img/cart-3.jpg"') }} class="cart-thumb" alt=""></a>
                                            <h5><a href="#">Beats On-Ear Headphones</a></h5>
                                            <p>2x - <span class="price">$99.99</span></p>
                                        </li>
                                        <li class="total">
                                            <span class="pull-right"><strong>Total</strong>: $0.00</span>
                                            <a href="#" class="btn btn-default btn-cart">Cart</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="search"><a href="#"><i class="ti-search"></i></a></li>
                                <li class="side-menu"><a href="#"><i class="ti-align-left"></i></a></li>
                            </ul>
                        </div>
                        <!-- End Atribute Navigation -->
                        <!-- /.navbar-header -->
                        <ul class="nav navbar-top-links navbar-right">
                            <li class="dropdown">
                                <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                                    <i class="dropdowm-icon ti-email"></i>
                                    <span class="label label-success">4</span>
                                </a>
                                <ul class="dropdown-menu dropdown-messages">
                                    <li class="rad-dropmenu-header"><a href="#">New Messages</a></li>
                                    <li>
                                        <a href="#" class="rad-content">
                                            <div class="inbox-item">
                                                <div class="inbox-item-img"><img src="{{ url('assets/dist/img/avatar.png"') }} class="img-circle" alt=""></div>
                                                <strong class="inbox-item-author">Naeem Khan</strong>
                                                <span class="inbox-item-date">-13:40 PM</span>
                                                <p class="inbox-item-text">Hey! there I'm available...</p>
                                                <span class="profile-status available pull-right"></span>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="rad-content">
                                            <div class="inbox-item">
                                                <div class="inbox-item-img"><img src="{{ url('assets/dist/img/avatar2.png"') }} class="img-circle" alt=""></div>
                                                <strong class="inbox-item-author">Sala Uddin</strong>
                                                <span class="inbox-item-date">-13:40 PM</span>
                                                <p class="inbox-item-text">Hey! there I'm available...</p>
                                                <span class="profile-status away pull-right"></span>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="rad-content">
                                            <div class="inbox-item">
                                                <div class="inbox-item-img"><img src="{{ url('assets/dist/img/avatar3.png"') }} class="img-circle" alt=""></div>
                                                <strong class="inbox-item-author">Mozammel</strong>
                                                <span class="inbox-item-date">-13:40 PM</span>
                                                <p class="inbox-item-text">Hey! there I'm available...</p>
                                                <span class="profile-status busy pull-right"></span>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="rad-content">
                                            <div class="inbox-item">
                                                <div class="inbox-item-img"><img src="{{ url('assets/dist/img/avatar4.png"') }} class="img-circle" alt=""></div>
                                                <strong class="inbox-item-author">Tanzil Ahmed</strong>
                                                <span class="inbox-item-date">-13:40 PM</span>
                                                <p class="inbox-item-text">Hey! there I'm available...</p>
                                                <span class="profile-status offline pull-right"></span>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="rad-dropmenu-footer"><a href="#">View All messages</a></li>
                                </ul>
                                <!-- /.dropdown-messages -->
                            </li>
                            <!-- /.dropdown -->
                            <li class="dropdown">
                                <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                                    <i class="dropdowm-icon ti-flag-alt"></i>
                                    <span class="label label-danger">9</span>
                                </a>
                                <ul class="dropdown-menu dropdown-tasks">
                                    <li class="rad-dropmenu-header"><a href="#">Your Task</a></li>
                                    <li>
                                        <a href="#">
                                            <div>
                                                <p>
                                                    <strong>Task 1</strong>
                                                    <span class="pull-right sm-text">40% Complete</span>
                                                </p>
                                                <div class="progress progress-striped active">
                                                    <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%">
                                                        <span class="sr-only">40% Complete (success)</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <div>
                                                <p>
                                                    <strong>Task 2</strong>
                                                    <span class="pull-right sm-text">20% Complete</span>
                                                </p>
                                                <div class="progress progress-striped active">
                                                    <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 20%">
                                                        <span class="sr-only">20% Complete</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <div>
                                                <p>
                                                    <strong>Task 3</strong>
                                                    <span class="pull-right sm-text">60% Complete</span>
                                                </p>
                                                <div class="progress progress-striped active">
                                                    <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%">
                                                        <span class="sr-only">60% Complete (warning)</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <div>
                                                <p>
                                                    <strong>Task 4</strong>
                                                    <span class="pull-right sm-text">80% Complete</span>
                                                </p>
                                                <div class="progress progress-striped active">
                                                    <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
                                                        <span class="sr-only">80% Complete (danger)</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="rad-dropmenu-footer"><a href="#">See All Tasks</a></li>
                                </ul>
                                <!-- /.dropdown-tasks -->
                            </li>
                            <!-- /.dropdown -->
                            <li class="dropdown">
                                <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                                    <i class="dropdowm-icon ti-announcement"></i>
                                    <span class="label label-warning">8</span>
                                </a>
                                <ul class="dropdown-menu dropdown-notification">
                                    <li class="rad-dropmenu-header"><a href="#">Your Notifications</a></li>
                                    <li>
                                        <a class="rad-content" href="#">
                                            <div class="pull-left"><i class="fa fa-html5 fa-2x color-red"></i>
                                            </div>
                                            <div class="rad-notification-body">
                                                <div class="lg-text">Introduction to fetch()</div>
                                                <div class="sm-text">The fetch API</div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="rad-content" href="#">
                                            <div class="pull-left"><i class="fa fa-bitbucket fa-2x color-violet"></i>
                                            </div>
                                            <div class="rad-notification-body">
                                                <div class="lg-text">Check your BitBucket</div>
                                                <div class="sm-text">Last Chance</div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="rad-content" href="#">
                                            <div class="pull-left"><i class="fa fa-google fa-2x color-info"></i>
                                            </div>
                                            <div class="rad-notification-body">
                                                <div class="lg-text">Google Account</div>
                                                <div class="sm-text">example@gmail.com</div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="rad-content" href="#">
                                            <div class="pull-left"><i class="fa fa-amazon fa-2x color-green"></i>
                                            </div>
                                            <div class="rad-notification-body">
                                                <div class="lg-text">Amazon Simple Notification ...</div>
                                                <div class="sm-text">Lorem Ipsum is simply dummy text...</div>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="rad-dropmenu-footer"><a href="#">See all notifications</a></li>
                                </ul>  <!-- /.dropdown-alerts -->
                            </li>
                            <!-- /.dropdown -->
                            <li class="dropdown">
                                <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                                    <i class="dropdowm-icon ti-settings"></i>
                                </a>
                                <ul class="dropdown-menu dropdown-user">
                                    <li><a href="profile.html"><i class="ti-user"></i>&nbsp; Profile</a></li>
                                    <li><a href="mailbox.html"><i class="ti-email"></i>&nbsp; My Messages</a></li>
                                    <li><a href="lockscreen.html"><i class="ti-lock"></i>&nbsp; Lock Screen</a></li>
                                    <li><a href="#"><i class="ti-settings"></i>&nbsp; Settings</a></li>
                                    <li><a href="login.html"><i class="ti-layout-sidebar-left"></i>&nbsp; Logout</a></li>
                                </ul>
                                <!-- /.dropdown-user -->
                            </li> <!-- /.dropdown -->
                        </ul> <!-- /.navbar-top-links -->
                    </div> <!-- /. container -->
                </nav> <!-- /. top navigation -->
                <!--  main navigation -->
                <div class="wrap-sticky" style="height: 68px;"><nav class="navbar navbar-default navbar-mobile navbar-sticky bootsnav on">
                    <!-- Start Top Search -->
                    <div class="top-search">
                        <div class="container">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="ti-search"></i></span>
                                <input type="text" class="form-control" placeholder="Search">
                                <span class="input-group-addon close-search"><i class="ti-close"></i></span>
                            </div>
                        </div>
                    </div>
                    <!-- End Top Search -->
                    <div class="container">
                        <!-- Start Header Navigation -->
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
                                <i class="fa fa-bars"></i>
                            </button>
                            <a class="navbar-brand hidden-md hidden-lg" href="#brand"><img src="{{ url('assets/dist/img/logo2.png') }}" class="logo" alt=""></a>
                        </div>
                        <!-- End Header Navigation -->
                        <!-- Collect the nav links, forms, and other content for toggling -->
                        <div class="collapse navbar-collapse" id="navbar-menu">
                            <ul class="nav navbar-nav navbar-left" data-in="" data-out="">
                                <li><a href="index.html"><i class="ti-home"></i> Dasboard</a></li>
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="ti-paint-bucket"></i> UI Elements</a>
                                    <ul class="dropdown-menu animated" style="display: none; opacity: 1;">
                                        <li><a href="buttons.html"><i class="fa fa-window-minimize"></i>Buttons</a></li>
                                        <li><a href="tabs.html"><i class="fa fa-tablet"></i>Tab</a></li>
                                        <li><a href="notification.html"><i class="fa fa-exclamation-triangle"></i>Notification</a></li>
                                        <li><a href="tree-view.html"><i class="fa fa-tree"></i>Tree View</a></li>
                                        <li><a href="progressbars.html"><i class="fa fa-minus"></i>Progressber</a></li>
                                        <li><a href="list.html"><i class="fa fa-list-ol"></i>List View</a></li>
                                        <li><a href="typography.html"><i class="fa fa-text-width"></i>Typography</a></li>
                                        <li><a href="panels.html"><i class="fa fa-keyboard-o"></i>Panels</a></li>
                                        <li><a href="modals.html"><i class="fa fa-file-text-o"></i>Modals</a></li>
                                        <li><a href="icheck_toggle_pagination.html"><i class="fa fa-check-square-o"></i>iCheck, Toggle, pagination</a></li>
                                        <li><a href="labels-badges-alerts.html"><i class="fa fa-exclamation"></i>labels, Badges, Alerts</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="ti-pencil-alt"></i> Forms</a>
                                    <ul class="dropdown-menu animated">
                                        <li><a href="forms_basic.html"><i class="ti-clipboard"></i>Basic Forms</a></li>
                                        <li><a href="forms_validation.html"><i class="ti-alert"></i>Validation Forms</a></li>
                                        <li><a href="forms_cropper.html"><i class="fa fa-crop"></i>Cropper</a></li>
                                        <li><a href="form_file_upload.html"><i class="ti-upload"></i>Forms File Upload</a></li>
                                        <li><a href="forms_editor_ck.html"><i class="fa fa-text-height"></i>CK Editor</a></li>
                                        <li><a href="forms_editor_summernote.html"><i class="fa fa-text-width"></i>Summernote</a></li>
                                        <li><a href="form_wizard.html"><i class="fa fa-header"></i>Form Wizaed</a></li>
                                        <li><a href="forms_editor_markdown.html"><i class="ti-bookmark"></i>Markdown</a></li>
                                        <li><a href="forms_editor_trumbowyg.html"><i class="fa fa-italic"></i>Trumbowyg</a></li>
                                        <li><a href="form_editor_wysihtml5.html"><i class="ti-video-clapper"></i>Wysihtml5</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown active">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="ti-layout"></i> Tables</a>
                                    <ul class="dropdown-menu animated" style="display: none; opacity: 1;">
                                        <li><a href="table.html"><i class="fa fa-table"></i>Simple tables</a></li>
                                        <li class="active"><a href="dataTables.html"><i class="ti-layout-tab-window"></i>Data tables</a></li>
                                        <li><a href="footable.html"><i class="ti-layout-width-default"></i>FooTable</a></li>
                                        <li><a href="x-editable.html"><i class="ti-close"></i>X-editable</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="ti-location-pin"></i> Maps</a>
                                    <ul class="dropdown-menu animated">
                                        <li><a href="maps_amcharts.html"><i class="ti-map"></i>Amcharts Map</a></li>
                                        <li><a href="maps_gmaps.html"><i class="ti-google"></i>gMaps</a></li>
                                        <li><a href="maps_data.html"><i class="fa fa-map-marker"></i>Data Maps</a></li>
                                        <li><a href="maps_jvector.html"><i class="fa fa-puzzle-piece"></i>Jvector Maps</a></li>
                                        <li><a href="maps_google.html"><i class="fa fa-google"></i>Google map</a></li>
                                        <li><a href="maps_snazzy.html"><i class="fa fa-map-signs"></i>Snazzy Map</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown">
                                    <a href="404.html" class="dropdown-toggle" data-toggle="dropdown"><i class="ti-angle-down"></i>Dropdowns</a>
                                    <ul class="dropdown-menu animated">
                                        <li><a href="404.html">Custom Menu</a></li>
                                        <li><a href="404.html">Custom Menu</a></li>
                                        <li class="dropdown">
                                            <a href="404.html" class="dropdown-toggle" data-toggle="dropdown">Sub Menu</a>
                                            <ul class="dropdown-menu animated">
                                                <li><a href="404.html">Custom Menu</a></li>
                                                <li><a href="404.html">Custom Menu</a></li>
                                                <li class="dropdown">
                                                    <a href="404.html" class="dropdown-toggle" data-toggle="dropdown">Sub Menu</a>
                                                    <ul class="dropdown-menu animated">
                                                        <li><a href="404.html">Custom Menu</a></li>
                                                        <li><a href="404.html">Custom Menu</a></li>
                                                        <li><a href="404.html">Custom Menu</a></li>
                                                        <li><a href="404.html">Custom Menu</a></li>
                                                    </ul>
                                                </li>
                                                <li><a href="404.html">Custom Menu</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="404.html">Custom Menu</a></li>
                                        <li><a href="404.html">Custom Menu</a></li>
                                        <li><a href="404.html">Custom Menu</a></li>
                                        <li><a href="404.html">Custom Menu</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="ti-bar-chart-alt"></i> Charts</a>
                                    <ul class="dropdown-menu animated" style="display: none; opacity: 1;">
                                        <li><a href="charts_flot.html"><i class="fa fa-area-chart"></i>Flot Chart</a></li>
                                        <li><a href="charts_Js.html"><i class="fa fa-bar-chart"></i>Chart js</a></li>
                                        <li><a href="charts_morris.html"><i class="fa fa-pie-chart"></i>Morris Charts</a></li>
                                        <li><a href="charts_sparkline.html"><i class="fa fa-line-chart"></i>Sparkline Charts</a></li>
                                        <li><a href="charts_am.html"><i class="ti-pulse"></i>Am Charts</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="ti-email"></i> Mailbox</a>
                                    <ul class="dropdown-menu animated" style="display: none; opacity: 1;">
                                        <li><a href="mailbox.html">
                                                <i class="fa fa-envelope-o"></i>Mailbox
                                                <span class="pull-right">
                                                    <small class="label pull-right bg-yellow m-r-5">19</small>
                                                    <small class="label pull-right bg-green m-r-5">13</small>
                                                    <small class="label pull-right bg-red m-r-5">3</small>
                                                </span>
                                            </a>
                                        </li>
                                        <li><a href="mailDetails.html"><i class="fa fa-envelope-open-o"></i>Mailbox Details</a></li>
                                        <li><a href="compose.html"><i class="fa fa-text-height"></i>Compose</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="ti-spray"></i> Icons</a>
                                    <ul class="dropdown-menu animated" style="display: none; opacity: 1;">
                                        <li><a href="icons_bootstrap.html"><i class="fa fa-bold"></i>Bootstrap Icons</a></li>
                                        <li><a href="icons_fontawesome.html"><i class="fa fa-fort-awesome"></i>Fontawesome Icon</a></li>
                                        <li><a href="icons_flag.html"><i class="fa fa-flag-checkered"></i>Flag Icons</a></li>
                                        <li><a href="icons_material.html"><i class="fa fa-meetup"></i>Material Icons</a></li>
                                        <li><a href="icons_weather.html"><i class="fa fa-bolt"></i>Weather Icons </a></li>
                                        <li><a href="icons_line.html"><i class="fa fa-lemon-o"></i>Line Icons</a></li>
                                        <li><a href="icons_pe.html"><i class="fa fa-diamond"></i>Pe Icons</a></li>
                                        <li><a href="icon_socicon.html"><i class="fa fa-share-alt"></i>Socicon Icons</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="ti-ruler-pencil"></i> App Views</a>
                                    <ul class="dropdown-menu animated" style="display: none; opacity: 1;">
                                        <li><a href="invoice.html"><i class="fa fa-file-text-o"></i>Invoice</a></li>
                                        <li><a href="timeline.html"><i class="fa fa-hourglass-o"></i>Vertical timeline</a></li>
                                        <li><a href="horizontal_timeline.html"><i class="fa fa-hourglass-end"></i>Horizontal timeline</a></li>
                                        <li><a href="pricing.html"><i class="fa fa-usd"></i>Pricing Table</a></li>
                                        <li><a href="slider.html"><i class="fa fa-sliders"></i>Slider</a></li>
                                        <li><a href="carousel.html"><i class="fa fa-long-arrow-left"></i>Carousel</a></li>
                                        <li><a href="code_editor.html"><i class="fa fa-code"></i>Code editor</a></li>
                                        <li>
                                            <a href="widgets.html">
                                                <i class="ti-microsoft"></i><span>Widgets</span>
                                                <span class="pull-right">
                                                    <small class="label pull-right bg-green">new</small>
                                                </span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="calender.html">
                                                <i class="ti-calendar"></i><span>Calendar</span>
                                                <span class="pull-right">
                                                    <small class="label pull-right bg-red m-r-5">5</small>
                                                    <small class="label pull-right bg-yellow m-r-5">21</small>
                                                </span>
                                            </a>
                                        </li>
                                        <li><a href="gridSystem.html"><i class="ti-layout-grid3"></i>Grid System</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown megamenu-fw">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="ti-menu"></i>Megamenu</a>
                                    <ul class="dropdown-menu megamenu-content animated" role="menu" style="display: none; opacity: 1;">
                                        <li>
                                            <div class="row">
                                                <div class="col-menu col-md-3">
                                                    <!--<h6 class="title">Title Menu One</h6>-->
                                                    <div class="content">
                                                        <ul class="menu-col">
                                                            <li><a href="buttons.html"><i class="fa fa-window-minimize"></i>Buttons</a></li>
                                                            <li><a href="tabs.html"><i class="fa fa-tablet"></i>Tab</a></li>
                                                            <li><a href="notification.html"><i class="fa fa-exclamation-triangle"></i>Notification</a></li>
                                                            <li><a href="tree-view.html"><i class="fa fa-tree"></i>Tree View</a></li>
                                                            <li><a href="progressbars.html"><i class="fa fa-minus"></i>Progressber</a></li>
                                                            <li><a href="list.html"><i class="fa fa-list-ol"></i>List View</a></li>
                                                            <li><a href="typography.html"><i class="fa fa-text-width"></i>Typography</a></li>
                                                            <li><a href="panels.html"><i class="fa fa-keyboard-o"></i>Panels</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <!-- end col-3 -->
                                                <div class="col-menu col-md-3">
                                                    <!--<h6 class="title">Title Menu Two</h6>-->
                                                    <div class="content">
                                                        <ul class="menu-col">
                                                            <li><a href="modals.html"><i class="fa fa-file-text-o"></i>Modals</a></li>
                                                            <li><a href="icheck_toggle_pagination.html"><i class="fa fa-check-square-o"></i>iCheck, Toggle, pagination</a></li>
                                                            <li><a href="labels-badges-alerts.html"><i class="fa fa-exclamation"></i>labels, Badges, Alerts</a></li>
                                                            <li><a href="charts_flot.html"><i class="fa fa-area-chart"></i>Flot Chart</a></li>
                                                            <li><a href="charts_Js.html"><i class="fa fa-bar-chart"></i>Chart js</a></li>
                                                            <li><a href="charts_morris.html"><i class="fa fa-pie-chart"></i>Morris Charts</a></li>
                                                            <li><a href="charts_sparkline.html"><i class="fa fa-line-chart"></i>Sparkline Charts</a></li>
                                                            <li><a href="maps_data.html"><i class="fa fa-map-marker"></i>Data Maps</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <!-- end col-3 -->
                                                <div class="col-menu col-md-3">
                                                    <!--<h6 class="title">Title Menu Three</h6>-->
                                                    <div class="content">
                                                        <ul class="menu-col">

                                                            <li><a href="maps_jvector.html"><i class="fa fa-puzzle-piece"></i>Jvector Maps</a></li>
                                                            <li><a href="maps_google.html"><i class="fa fa-google"></i>Google map</a></li>
                                                            <li><a href="maps_snazzy.html"><i class="fa fa-map-signs"></i>Snazzy Map</a></li>
                                                            <li><a href="widgets.html">
                                                                    <i class="fa fa-windows"></i> <span>Widgets</span>
                                                                    <span class="pull-rightr">
                                                                        <small class="label pull-right bg-green">new</small>
                                                                    </span>
                                                                </a>
                                                            </li>
                                                            <li><a href="table.html"><i class="fa fa-table"></i>Simple tables</a></li>
                                                            <li class="active"><a href="dataTables.html"><i class="ti-layout-tab-window"></i>Data tables</a></li>
                                                            <li><a href="footable.html"><i class="ti-layout-width-default"></i>FooTable</a></li>
                                                            <li><a href="x-editable.html"><i class="ti-close"></i>X-editable</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="col-menu col-md-3">
                                                    <!--<h6 class="title">Title Menu Four</h6>-->
                                                    <div class="content">
                                                        <ul class="menu-col">
                                                            <li><a href="icons_bootstrap.html"><i class="fa fa-bold"></i>Bootstrap Icons</a></li>
                                                            <li><a href="icons_fontawesome.html"><i class="fa fa-fort-awesome"></i>Fontawesome Icon</a></li>
                                                            <li><a href="icons_flag.html"><i class="fa fa-flag-checkered"></i>Flag Icons</a></li>
                                                            <li><a href="icons_material.html"><i class="fa fa-meetup"></i>Material Icons</a></li>
                                                            <li><a href="icons_weather.html"><i class="fa fa-bolt"></i>Weather Icons </a></li>
                                                            <li><a href="icons_line.html"><i class="fa fa-lemon-o"></i>Line Icons</a></li>
                                                            <li><a href="icons_pe.html"><i class="fa fa-diamond"></i>Pe Icons</a></li>
                                                            <li><a href="icon_socicon.html"><i class="fa fa-share-alt"></i>Socicon Icons</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <!-- end col-3 -->
                                                <div class="col-menu col-md-3">
                                                    <!--<h6 class="title">Title Menu Four</h6>-->
                                                    <div class="content">
                                                        <ul class="menu-col">
                                                            <li><a href="invoice.html"><i class="fa fa-file-text-o"></i>Invoice</a></li>
                                                            <li><a href="timeline.html"><i class="fa fa-hourglass-o"></i>Vertical timeline</a></li>
                                                            <li><a href="horizontal_timeline.html"><i class="fa fa-hourglass-end"></i>Horizontal timeline</a></li>
                                                            <li><a href="pricing.html"><i class="fa fa-usd"></i>Pricing Table</a></li>
                                                            <li><a href="slider.html"><i class="fa fa-sliders"></i>Slider</a></li>
                                                            <li><a href="carousel.html"><i class="fa fa-long-arrow-left"></i>Carousel</a></li>
                                                            <li><a href="code_editor.html"><i class="fa fa-code"></i>Code editor</a></li>
                                                            <li>
                                                                <a href="calender.html">
                                                                    <i class="ti-calendar"></i><span>Calendar</span>
                                                                    <span class="pull-right">
                                                                        <small class="label pull-right bg-red m-r-5">9</small>
                                                                        <small class="label pull-right bg-yellow m-r-5">29</small>
                                                                    </span>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <!-- end col-3 -->
                                            </div>
                                            <!-- end row -->
                                        </li>
                                    </ul>
                                </li>
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="ti-layers"></i> Other pags</a>
                                    <ul class="dropdown-menu animated" style="display: none; opacity: 1;">
                                        <li><a href="login.html"><i class="fa fa-key"></i>Login</a></li>
                                        <li><a href="register.html"><i class="fa fa-registered"></i>Register</a></li>
                                        <li><a href="profile.html"><i class="ti-user"></i>Profile</a></li>
                                        <li><a href="forget_password.html"><i class="fa fa-question"></i>Forget password</a></li>
                                        <li><a href="lockscreen.html"><i class="ti-lock"></i>Lockscreen</a></li>
                                        <li><a href="404.html#"><i class="fa fa-frown-o"></i>404 Error</a></li>
                                        <li><a href="505.html"><i class="fa fa-frown-o"></i>505 Error</a></li>
                                        <li><a href="blank.html"><i class="ti-cut"></i>Blank page</a></li>
                                        <li><a href="documentation/index.html" target="_blank"><i class="ti-bookmark"></i>Documentation</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <!-- /.navbar-collapse -->
                    </div>
                    <!-- Start Side Menu -->
                    <div class="side">
                        <a href="#" class="close-side"><i class="ti-close"></i></a>
                        <h3 class="sidebar-heading">Activity</h3>
                        <div class="rad-activity-body">
                            <div class="rad-list-group group">
                                <a href="#" class="rad-list-group-item">
                                    <div class="rad-list-icon icon-shadow bg-red pull-left"><i class="fa fa-phone"></i></div>
                                    <div class="rad-list-content"><strong>Client meeting</strong>
                                        <div class="md-text">Meeting at 10:00 AM</div>
                                    </div>
                                </a>
                                <a href="#" class="rad-list-group-item">
                                    <div class="rad-list-icon icon-shadow bg-yellow pull-left"><i class="fa fa-refresh"></i></div>
                                    <div class="rad-list-content"><strong>Created ticket</strong>
                                        <div class="md-text">Ticket assigned to Dev team</div>
                                    </div>
                                </a>
                                <a href="#" class="rad-list-group-item">
                                    <div class="rad-list-icon icon-shadow bg-primary pull-left"><i class="fa fa-check"></i></div>
                                    <div class="rad-list-content"><strong>Activity completed</strong>
                                        <div class="md-text">Completed the dashboard html</div>
                                    </div>
                                </a>
                                <a href="#" class="rad-list-group-item">
                                    <div class="rad-list-icon icon-shadow bg-green pull-left"><i class="fa fa-envelope"></i></div>
                                    <div class="rad-list-content"><strong>New Invitation</strong>
                                        <div class="md-text">Max has invited you to join Inbox</div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <!-- /.sidebar-menu -->
                        <h3 class="sidebar-heading">Tasks Progress</h3>
                        <ul class="sidebar-menu">
                            <li>
                                <a href="#">
                                    <h4 class="subheading">
                                        Task one
                                        <span class="label label-danger pull-right">40%</span>
                                    </h4>
                                    <div class="progress">
                                        <div class="progress-bar progress-bar-danger progress-bar-striped active" style="width: 40%"></div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <h4 class="subheading">
                                        Task two
                                        <span class="label label-success pull-right">20%</span>
                                    </h4>
                                    <div class="progress">
                                        <div class="progress-bar progress-bar-success progress-bar-striped active" style="width: 20%"></div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <h4 class="subheading">
                                        Task Three
                                        <span class="label label-warning pull-right">60%</span>
                                    </h4>
                                    <div class="progress">
                                        <div class="progress-bar progress-bar-warning progress-bar-striped active" style="width: 60%"></div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <h4 class="subheading">
                                        Task four
                                        <span class="label label-primary pull-right">80%</span>
                                    </h4>
                                    <div class="progress">
                                        <div class="progress-bar progress-bar-primary progress-bar-striped active" style="width: 80%"></div>
                                    </div>
                                </a>
                            </li>
                        </ul>
                        <!-- /.sidebar-menu -->
                    </div>
                    <!-- End Side Menu -->
                </nav></div> <!-- /. main navigation -->
                <div class="clearfix"></div>
            </header>
 
 <div class="content-wrapper">
                <div class="container">
                    <!-- main content -->
                    <div class="content">

            @yield('breadcrumb')       	
            @yield('content')

</div>
</div>
</div>
</div>
</div>

        <!-- jquery-ui -->
        <script src="{{ url('assets/plugins/jquery-ui-1.12.1/jquery-ui.min.js') }}" type="text/javascript"></script>
        <!-- Bootstrap js -->
        <script src="{{ url('assets/bootstrap/js/bootstrap.min.js') }}" type="text/javascript"></script>
        <!-- lobipanel js -->
        <script src="{{ url('assets/plugins/lobipanel/lobipanel.min.js') }}" type="text/javascript"></script>
        <!-- animsition js -->
        <script src="{{ url('assets/plugins/animsition/js/animsition.min.js') }}" type="text/javascript"></script>
        <!-- bootsnav js -->
        <script src="{{ url('assets/plugins/bootsnav/js/bootsnav.js') }}" type="text/javascript"></script>
        <!-- SlimScroll js -->
        <script src="{{ url('assets/plugins/slimScroll/jquery.slimscroll.min.js') }}" type="text/javascript"></script>
        <!-- FastClick js-->
        <script src="{{ url('assets/plugins/fastclick/fastclick.min.js') }}" type="text/javascript"></script>
        <!-- End Core Plugins
        =====================================================================-->
        <!-- Start Page Lavel Plugins
        =====================================================================-->
        <!-- dataTables js -->
        <script src="{{ url('assets/plugins/datatables/dataTables.min.js') }}" type="text/javascript"></script>
        <!-- Start Theme label Script
        =====================================================================-->
        <!-- Dashboard js -->
        <script src="{{ url('assets/dist/js/dashboard.js') }}" type="text/javascript"></script>
        <!-- Toaster js -->
        <script src="http://codeseven.github.io/toastr/build/toastr.min.js" type="text/javascript"></script>
        <!-- End Theme label Script
        =====================================================================-->
        <script>
            $(document).ready(function () {

                "use strict"; // Start of use strict

                $('#dataTableExample1').DataTable({
                    "dom": "<'row'<'col-sm-6'l><'col-sm-6'f>>t<'row'<'col-sm-6'i><'col-sm-6'p>>",
                    "lengthMenu": [[6, 25, 50, -1], [6, 25, 50, "All"]],
                    "iDisplayLength": 6
                });

                $("#dataTableExample2").DataTable({
                    dom: "<'row'<'col-sm-4'l><'col-sm-4 text-center'B><'col-sm-4'f>>tp",
                    "lengthMenu": [[10, 25, 50, -1], [10, 25, 50, "All"]],
                    buttons: [
                        {extend: 'copy', className: 'btn-sm'},
                        {extend: 'csv', title: 'ExampleFile', className: 'btn-sm'},
                        {extend: 'excel', title: 'ExampleFile', className: 'btn-sm'},
                        {extend: 'pdf', title: 'ExampleFile', className: 'btn-sm'},
                        {extend: 'print', className: 'btn-sm'}
                    ]
                });

            });

		   function clickAndDisable(link) {
		     // disable subsequent clicks
		     link.onclick = function(event) {
		        event.preventDefault();
		     }
		   } 
			       
		$(window).load(function() {
		  $("body").removeClass("preload");
		});

$(document).ready(function(){
$('html, body').animate({
        scrollTop: $(".navbar-default").offset().top
    }, 2000);
});

        </script>

        @stack('scripts')
    </body>
</html>