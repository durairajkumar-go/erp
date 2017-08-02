
                        <!-- Collect the nav links, forms, and other content for toggling -->
                        <div class="collapse navbar-collapse" id="navbar-menu">
                            <ul class="nav navbar-nav navbar-left" data-in="" data-out="">
                                
                                {!! Html::decode(Html::entities(printMenu(session::get('menu')))) !!}

                            </ul>
                        </div>
                        <!-- /.navbar-collapse -->


<?php /*
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

*/ ?>
