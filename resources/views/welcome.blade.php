@extends('layouts.master')


@section('content')

            @if(Session::has('message'))
            <script type="text/javascript">            
                $(document).ready(function () {
                    toastr.success('<?= trans('messages.'.Session::get('message')) ?>', '{{ trans('messages.success') }}' ); 
                });
             </script>
            @endif

<br>

<div class="row">
                        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3">
                            <!-- statistic box -->
                            <div class="statistic-box statistic-filled-3">
                                <h2><span class="count-number">789</span>K <span class="slight"><i class="fa fa-play fa-rotate-270 text-warning"> </i> +29%</span></h2>
                                <div class="small">Social users </div>
                                <i class="ti-world statistic_icon"></i>
                                <div class="sparkline3 text-center"></div>
                            </div> <!-- /.statistic box -->
                        </div>
                        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3">
                            <!-- statistic box -->
                            <div class="statistic-box statistic-filled-1">
                                <h2><span class="count-number">696</span>K <span class="slight"><i class="fa fa-play fa-rotate-270 text-warning"> </i> +28%</span></h2>
                                <div class="small">Visitors this Month</div>
                                <i class="ti-server statistic_icon"></i>
                                <div class="sparkline1 text-center"></div>
                            </div> <!-- /. statistic box -->
                        </div>
                        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3">
                            <!-- statistic box -->
                            <div class="statistic-box statistic-filled-2">
                                <h2><span class="count-number">321</span>M <span class="slight"><i class="fa fa-play fa-rotate-90 c-white"> </i> +10%</span> </h2>
                                <div class="small">Total users</div>
                                <i class="ti-user statistic_icon"></i>
                                <div class="sparkline2 text-center"></div>
                            </div>  <!-- /.statistic box -->
                        </div>
                        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3">
                            <!-- statistic box -->
                            <div class="statistic-box statistic-filled-4">
                                <h2><span class="count-number">5489</span>$ <span class="slight"><i class="fa fa-play fa-rotate-90 c-white"> </i> +24%</span></h2>
                                <div class="small">Total Sales</div>
                                <i class="ti-bag statistic_icon"></i>
                                <div class="sparkline4 text-center"></div>
                            </div> <!--/. statistic box -->
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 ">
                            <div class="panel panel-bd ">
                                <div class="panel-body">
                                    <!-- amcharts -->
                                    <div id="chartdiv"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-8 ">
                            <div class="panel panel-bd lobidrag">
                                <div class="panel-heading">
                                    <div class="panel-title">
                                        <i class="ti-panel"></i>
                                        <h4>CSS animations Chart</h4>
                                    </div>
                                </div>
                                <div class="panel-body">
                                    <!--                                        <div class="flotChart" style="height: 340px;">
                                                                                    <div class="flotChart-demo" id="flot-line-chart"></div>
                                                                                </div>-->
                                    <!-- amcharts -->
                                    <div id="chartdiv2"></div>
                                </div>
                            </div>
                        </div>
                        <!-- Activities -->
                        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-4">
                            <div class="panel panel-bd lobidisable">
                                <div class="panel-heading">
                                    <div class="panel-title">
                                        <i class="ti-stats-up"></i>
                                        <h4>Recent Activities</h4>
                                    </div>
                                </div>
                                <div class="panel-body">
                                    <ul class="activity-list list-unstyled">
                                        <li class="activity-purple">
                                            <small class="text-muted">9 minutes ago</small>
                                            <p>You <span class="label label-success label-pill">recommended</span> Karen Ortega</p>
                                        </li>
                                        <li class="activity-danger">
                                            <small class="text-muted">15 minutes ago</small>
                                            <p>You followed Olivia Williamson</p>
                                        </li>
                                        <li class="activity-warning">
                                            <small class="text-muted">22 minutes ago</small>
                                            <p>You <span class="text-danger">subscribed</span> to Harold Fuller</p>
                                        </li>
                                        <li class="activity-primary">
                                            <small class="text-muted">30 minutes ago</small>
                                            <p>You updated your profile picture</p>
                                        </li>
                                        <li>
                                            <small class="text-muted">35 minutes ago</small>
                                            <p>You deleted homepage.psd</p>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
       
</div>

@endsection

