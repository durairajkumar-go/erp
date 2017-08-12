<!DOCTYPE html>
<html lang="en"><head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Vyana ERP</title>

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

        <link href="{{ url('assets/github/css/toastr.min.css') }}" rel="stylesheet" type="text/css"/>


        <link href="{{ url('assets/bootstrap/css/flag-icon.min.css') }}" rel="stylesheet" type="text/css"/>


        <link href="{{ url('assets/bootstrap/css/monthly.min.css') }}" rel="stylesheet" type="text/css"/>


        <link href="{{ url('assets/bootstrap/css/export.css') }}" rel="stylesheet" type="text/css"/>
        
        <!-- Date Picker -->
 		<link rel="stylesheet" href="{{ URL::to('assets/plugins/datepicker/datepicker3.css') }}">
  		<!-- Daterange picker -->
  		<link rel="stylesheet" href="{{ URL::to('assets/plugins/daterangepicker/daterangepicker-bs3.css') }}">

      <!-- jQuery -->
        <script src="{{ url('assets/plugins/jQuery/jquery-1.12.4.min.js') }}" type="text/javascript"></script>
        <!-- End Theme Layout Style
        =====================================================================-->
        
         <!-- =====================================================================-->
        <!-- iCheck -->
        <link href="{{ url('assets/plugins/icheck/skins/all.css') }}" rel="stylesheet" type="text/css"/>
        <!-- Bootstrap toggle css -->
        <link href="{{ url('assets/plugins/bootstrap-toggle/bootstrap-toggle.min.css') }}" rel="stylesheet" type="text/css"/>
        <!-- End iCheck
        =====================================================================-->

        <link href="{{ url('assets/plugins/jQuery/css/select2.min.css') }}" rel="stylesheet" />
        <script src="{{ url('assets/plugins/jQuery/js/select2.min.js') }}"></script>

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
        
             <!--testing-->
            <!-- <script type="text/javascript" src="http://code.jquery.com/jquery-3.2.1.js"></script>-->
  <!--  <script type="text/javascript" src="http://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>-->
    <link rel="stylesheet" type="text/css" href="{{ url('assets/tree-view/new/src/css/jquery-ui.css') }}"/>
    
     
    <link rel="stylesheet" type="text/css" href="{{ url('assets/tree-view/new/src/css/jquery.tree.css') }}"/>
             <!--end testing-->
 
        
        <style>


input:focus ~ label, textarea:focus ~ label, input:valid ~ label, textarea:valid ~ label {
 font-size: 0.75em;
 top: -2.25rem;
 -webkit-transition: all 0.125s ease;
 transition: all 0.125s ease;
 color: #000;
}


.fill-this::after { 
	color: red !important;
    content: " *";
}

.mandatory{
	color: red;
	font-size: 0.75em;
} 

.styled-input {
  margin: 2rem 0 1rem;
  position: relative;
}

.styled-input label {
    font-size: 0.75em;
    top: -2.25rem;
    -webkit-transition: all 0.125s ease;
    transition: all 0.125s ease;
    color: #000;
    padding: 7px;
    padding-left: 0px;
    position: absolute;
    pointer-events: none;
}

.styled-input.wide { width: 100%; }

input,
textarea {
  padding: 1rem 1rem;
  border: 0;
  width: 100%;
  font-size: 1rem;
}

input ~ span,
textarea ~ span {
  display: block;
  width: 0;
  height: 2px;
  background: #8e44ad;
  position: absolute;
  bottom: 0;
  left: 0;
  -webkit-transition: all 0.125s ease;
  transition: all 0.125s ease;
}

input:focus,
textarea:focus { outline: 0; }

input:focus ~ span,
textarea:focus ~ span {
  width: 100%;
  -webkit-transition: all 0.075s ease;
  transition: all 0.075s ease;
}

textarea {
  width: 100%;
  min-height: 15em;
}        
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
                    background: #128282;
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

            .select2-container .select2-selection--single{
                height: 33px;
            }
            .select2-container--default .select2-selection--single .select2-selection__rendered{
                line-height: 30px;
            }

            .select2-container--default .select2-selection--single{
                border: 1px solid rgba(170, 170, 170, 0.31);
                 border-radius: 0px; 
            }
			
			.datepicker table tr td.disabled, .datepicker table tr td.disabled:hover{
 			 opacity: 0.5;
 			}   

            .table>tbody>tr>td, .table>tbody>tr>th, .table>tfoot>tr>td, .table>tfoot>tr>th, .table>thead>tr>td, .table>thead>tr>th {
            padding: 5px !important;
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
                            <a class="navbar-brand" href="index.html"> <img src="{{ url('logo/logo-xs.png') }}" alt=""></a>
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
                                            <a href="#" class="photo"><img src="{{ url('assets/dist/img/cart-1.jpg') }}" class="cart-thumb" alt=""></a>
                                            <h5><a href="#">Smartphone RAM 4 GB New</a></h5>
                                            <p>2x - <span class="price">$99.99</span></p>
                                        </li>
                                        <li>
                                            <a href="#" class="photo"><img src="{{ url('assets/dist/img/cart-2.jpg') }}" class="cart-thumb" alt=""></a>
                                            <h5><a href="#">Fujifilm INSTAX Mini 8</a></h5>
                                            <p>1x - <span class="price">$33.33</span></p>
                                        </li>
                                        <li>
                                            <a href="#" class="photo"><img src="{{ url('assets/dist/img/cart-3.jpg') }}" class="cart-thumb" alt=""></a>
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

                        <select id="dynamic_select" class="form-control" style="display: initial;width: 120px;" data-show-icon="true">
                          <option value="{{ url('locale/en') }}" @if(!empty(Session::get('locale')) && Session::get('locale')=="en") selected @endif  > English </option>
                          <option value="{{ url('locale/sh') }}" @if(!empty(Session::get('locale')) && Session::get('locale')=="sh") selected @endif  >Swahili</option>
                          <option value="{{ url('locale/hi') }}" @if(!empty(Session::get('locale')) && Session::get('locale')=="hi") selected @endif  >हिंदी</option>
                        </select>

                            <li class="dropdown">
                                <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                                    <i class="dropdowm-icon ti-email"></i>
                                    <span class="label label-success">4 </span>
                                </a>
                                <ul class="dropdown-menu dropdown-messages">
                                    <li class="rad-dropmenu-header"><a href="#">New Messages</a></li>
                                    <li>
                                        <a href="#" class="rad-content">
                                            <div class="inbox-item">
                                                <div class="inbox-item-img"><img src="{{ url('assets/dist/img/avatar.png') }}" class="img-circle" alt=""></div>
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
                                                <div class="inbox-item-img"><img src="{{ url('assets/dist/img/avatar2.png') }}" class="img-circle" alt=""></div>
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
                                                <div class="inbox-item-img"><img src="{{ url('assets/dist/img/avatar3.png') }}" class="img-circle" alt=""></div>
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
                                                <div class="inbox-item-img"><img src="{{ url('assets/dist/img/avatar4.png') }}" class="img-circle" alt=""></div>
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
                                    <li><a href="{{ url('/profile') }}"><i class="ti-user"></i>&nbsp; Hi,  {{ Auth::user()->name }} </a></li>
                                   <!-- <li><a href="mailbox.html"><i class="ti-email"></i>&nbsp; My Messages</a></li>
                                    <li><a href="lockscreen.html"><i class="ti-lock"></i>&nbsp; Lock Screen</a></li>
                                    <li><a href="#"><i class="ti-settings"></i>&nbsp; Settings</a></li> -->
                                    <li><a href="{{ url('/logout') }}"><i class="ti-layout-sidebar-left"></i>&nbsp; {{ trans('messages.logout') }} </a></li>
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
                            <a class="navbar-brand hidden-md hidden-lg" href="#brand"><img src="{{ url('logo/logo-xs.png') }}" class="logo" alt=""></a>
                        </div>
                        <!-- End Header Navigation -->

                     <!-- Start Menu -->       
                        @include('includes.menu')
                     <!-- End Menu -->       

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


<?php

$main_uri="";
    
    $array_uri = explode("/", Route::getFacadeRoot()->current()->uri(), 2);
    if(isset($array_uri[0])){
         $main_uri = $array_uri[0];
    }

$back_url=url($main_uri);

?>
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="header-icon">
        </div>
        <div class="header-title">
            <h1>&nbsp;</h1>
            <ol class="breadcrumb">

                <li><a  href="{{ url('/dashboard') }}"><i class="pe-7s-home"></i> {{ trans('messages.home') }} </a></li>

            @foreach($array_uri as $uri)
                <li><a  href="<?= url(''.preg_replace("/{(.*?)}\//", "", $uri).'') ?>""> <?= trans('messages.'.preg_replace("/{(.*?)}\//", "", $uri)); ?> </a></li>
            @endforeach
            </ol>
        </div>
    </div> <!-- /. Content Header (Page header) -->


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
      <?php /*?> <script src="{{ url('assets/plugins/fastclick/metisMenu.min.js') }}" type="text/javascript"></script><?php */?>
        <!-- End Core Plugins
        =====================================================================-->

        <!-- STRAT PAGE LABEL PLUGINS -->
        <script src="{{ url('assets/bootstrap/js/toastr.min.js') }}" type="text/javascript"></script>
        <script src="{{ url('assets/bootstrap/js/sparkline.min.js') }}" type="text/javascript"></script>
        <script src="{{ url('assets/bootstrap/js/jquery.counterup.min.js') }}" type="text/javascript"></script>
        <script src="{{ url('assets/bootstrap/js/waypoints.js') }}" type="text/javascript"></script>
        <script src="{{ url('assets/bootstrap/js/emojionearea.min.js') }}" type="text/javascript"></script>
        <script src="{{ url('assets/bootstrap/js/monthly.min.js') }}" type="text/javascript"></script>
        <script src="{{ url('assets/bootstrap/js/amcharts.js') }}" type="text/javascript"></script>
        <script src="{{ url('assets/bootstrap/js/ammap.js') }}" type="text/javascript"></script>
        <script src="{{ url('assets/bootstrap/js/worldLow.js') }}" type="text/javascript"></script>
        <script src="{{ url('assets/bootstrap/js/serial.js') }}" type="text/javascript"></script>
        <script src="{{ url('assets/bootstrap/js/export.min.js') }}" type="text/javascript"></script>
        <script src="{{ url('assets/bootstrap/js/light.js') }}" type="text/javascript"></script>
        <script src="{{ url('assets/bootstrap/js/pie.js') }}" type="text/javascript"></script>

        <!-- START THEME LABEL SCRIPT -->   
        <script src="{{ url('assets/theme/js/dashboard.min.js') }}" type="text/javascript"></script>
       <?php /*?> <script src="http://thememinister.com/bootstrap-admin-template/theme/adminpage_v1.0/assets/dist/js/jQuery.style.switcher.min.js" type="text/javascript"></script><?php not found in online*/?>
       
       <script src="{{ url('assets/bootstrap/js/jQuery.style.switcher.min.js') }}" type="text/javascript"></script>

        <!-- Start Page Lavel Plugins
        =====================================================================-->
        <!-- dataTables js -->
        <script src="{{ url('assets/plugins/datatables/dataTables.min.js') }}" type="text/javascript"></script>
        <script src="{{ url('assets/plugins/datatables/buttons.colVis.min.js') }}" type="text/javascript"></script>


        <!-- Start Theme label Script
        =====================================================================-->
        <!-- Dashboard js -->
        <script src="{{ url('assets/dist/js/dashboard.js') }}" type="text/javascript"></script>
        <!-- Toaster js -->
        <script src="{{ url('assets/github/js/toastr.min.js') }}" type="text/javascript"></script>
        <!-- End Theme label Script
        =====================================================================-->
        
        <!-- Start Date Picker Script
        =====================================================================-->
        <!-- Date Ratnge Picker js -->
        <script src="{{ URL::to('assets/plugins/moment/min/moment.min.js') }}"></script>
		<script src="{{ URL::to('assets/plugins/daterangepicker/daterangepicker.js') }}"></script>
		<!-- Date Picker -->
		<script src="{{ URL::to('assets/plugins/datepicker/bootstrap-datepicker.js') }}"></script>
        <!-- End Date Picker Script
        =====================================================================-->
        
         <!-- Start Check Box Tree View Script
        =====================================================================-->
       
      	<script src="{{ URL::to('assets/tree-view/logger.js') }}"></script>
        <script src="{{ URL::to('assets/tree-view/treeview.js') }}"></script>
	
        <!-- End Date Picker Script
        =====================================================================-->

        <!-- iCheck js -->
        <script src="{{ URL::to('assets/plugins/icheck/icheck.min.js') }}" type="text/javascript"></script>
        <!-- Bootstrap toggle -->
        <script src="{{ URL::to('assets/plugins/bootstrap-toggle/bootstrap-toggle.min.js') }}" type="text/javascript"></script>
        <!-- Start Theme label Script
        <!-- End Core Plugins
        =====================================================================-->
 <script type="text/javascript" src="{{ url('assets/tree-view/new/src/js/jquery.tree.js') }} "></script>
        
       
        <script>

           $(document).ready(function () {

                "use strict"; // Start of use strict

                 $('.skin-minimal .i-check input').iCheck({
                    checkboxClass: 'icheckbox_minimal',
                    radioClass: 'iradio_minimal',
                    increaseArea: '20%'
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

/*    $(document).ready(function(){
    $('html, body').animate({
            scrollTop: $(".navbar-default").offset().top
        }, 1000);

    });
*/

$(document).ready(function () {
   $('.drop-select').select2({
     placeholder: "Select"
   });

   $('.drop-select').on('select2:select', function (evt) {
      // Do something
        this.focus();
    });

});

 $('.get_date').datepicker({
      autoclose: true,
      format: "dd-mm-yyyy",
      defaultDate: ''
    });
    
 function isNumber(evt,element) {
 	var charCode = (evt.which) ? evt.which : event.keyCode;
    
     var len = $(element).val().split(".")[1].length;


    if(parseInt(len)>1)
    {
        return false;
    }
    
     if (
            //(charCode != 45 || $(element).val().indexOf('-') != -1) &&      // "-" CHECK MINUS, AND ONLY ONE.
            (charCode != 46 || $(element).val().indexOf('.') != -1) &&      // "." CHECK DOT, AND ONLY ONE.
            (charCode < 48 || charCode > 57))
            return false;
        return true;
	}
        </script>

<script>
    $(function(){
      // bind change event to select
      $('#dynamic_select').on('change', function () {
          var url = $(this).val(); // get selected value
          if (url) { // require a URL
              window.location = url; // redirect
          }
          return false;
      });
    });


</script>

        @stack('scripts')
    </body>
</html>
