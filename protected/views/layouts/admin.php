<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Radio PRJ702 | </title>

    <!-- Bootstrap core CSS -->

    <link href="<?php echo Yii::app()->request->baseUrl; ?>/adminfiles/css/bootstrap.min.css" rel="stylesheet">

    <link href="<?php echo Yii::app()->request->baseUrl; ?>/adminfiles/fonts/css/font-awesome.min.css" rel="stylesheet">
    <link href="<?php echo Yii::app()->request->baseUrl; ?>/adminfiles/css/animate.min.css" rel="stylesheet">

    <!-- Custom styling plus plugins -->
    <link href="<?php echo Yii::app()->request->baseUrl; ?>/adminfiles/css/custom.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/adminfiles/css/maps/jquery-jvectormap-2.0.3.css" />
    <link href="<?php echo Yii::app()->request->baseUrl; ?>/adminfiles/css/icheck/flat/green.css" rel="stylesheet" />
    <link href="<?php echo Yii::app()->request->baseUrl; ?>/adminfiles/css/floatexamples.css" rel="stylesheet" type="text/css" />

    <script src="<?php echo Yii::app()->request->baseUrl; ?>/adminfiles/js/jquery.min.js"></script>
    <script src="<?php echo Yii::app()->request->baseUrl; ?>/adminfiles/js/nprogress.js"></script>

    <!--[if lt IE 9]>
    <script src="../assets/js/ie8-responsive-file-warning.js"></script>
    <![endif]-->

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>


<body class="nav-md">

<div class="container body">


<div class="main_container">

<div class="col-md-3 left_col">
    <div class="left_col scroll-view">

        <div class="navbar nav_title" style="border: 0;">
            <a href="index.html" class="site_title"><i class="fa fa-paw"></i> <span>Radio PRJ702</span></a>
        </div>
        <div class="clearfix"></div>

        <!-- menu prile quick info -->
        <div class="profile">
            <div class="profile_pic">
                <img src="<?php echo Yii::app()->request->baseUrl; ?>/adminfiles/images/img.jpg" alt="..." class="img-circle profile_img">
            </div>
            <div class="profile_info">
                <span>Welcome,</span>
                <h2> USer<?php //echo ucwords(strtolower(Yii::app()->user->fullname))?></h2>
                <!--                --><?php //echo CHtml::link('Change Password',array('admin/ChPw'), array('class'=>'btn btn-default btn-flat')); ?>
                <!---->
                <!--                --><?php //echo CHtml::link('Sign out',array('site/logout'), array('class'=>'btn btn-default btn-flat')); ?>
            </div>
        </div>
        <!-- /menu prile quick info -->

        <br />

        <!-- sidebar menu -->
        <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">

            <div class="menu_section">
                <h3>General</h3>
                <ul class="nav side-menu">
                    <li><a href="<?php echo Yii::app()->request->baseUrl; ?>/admin/dashboard"><i class="fa fa-dashboard"></i> Dashboard <span class="fa"></span></a></li>
                    <li><a href="<?php echo Yii::app()->request->baseUrl; ?>/admin/profile"><i class="fa fa-user"></i> Profile <span class="fa"></span></a></li>
                    <li><a><i class="fa fa-picture-o"></i> Slider <span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu" style="display: none">
                            <li><a href="<?php echo Yii::app()->request->baseUrl; ?>/slider/create">Add Slider</a>
                            </li>

                            <li><a href="<?php echo Yii::app()->request->baseUrl; ?>/slider/admin">View Slider</a>
                            </li>
                        </ul>
                    </li>
                    <li><a><i class="fa fa-ticket"></i> Logo <span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu" style="display: none">
                            <li><a href="<?php echo Yii::app()->request->baseUrl; ?>/logo/create">Add Logo</a>
                            </li>

                            <li><a href="<?php echo Yii::app()->request->baseUrl; ?>/logo/admin">View Logo</a>
                            </li>

                        </ul>
                    </li>
                    <li><a><i class="fa fa-file-audio-o"></i> Programs <span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu" style="display: none">
                            <li><a href="<?php echo Yii::app()->request->baseUrl; ?>/programs/create">Add Programs</a>
                            </li>

                            <li><a href="<?php echo Yii::app()->request->baseUrl; ?>/programs/admin">View Programs</a>
                            </li>

                            <li><a href="<?php echo Yii::app()->request->baseUrl; ?>/programs/Set">Set Program</a>
                            </li>
                        </ul>
                    </li>

                    <li><a><i class="fa fa-group"></i> Audience <span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu" style="display: none">
                            <li><a href="<?php echo Yii::app()->request->baseUrl; ?>/users/admin">View Users</a>
                            </li>
                            <li><a href="<?php echo Yii::app()->request->baseUrl; ?>/users/create">Add Users</a>

                        </ul>
                    </li>
                    <li><a><i class="fa fa-line-chart"></i>Broadcasting Period <span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu" style="display: none">
                            <li><a href="<?php echo Yii::app()->request->baseUrl; ?>/BroadcastPeriod/create">Add Broadcasting Period</a>
                            </li>

                            <li><a href="<?php echo Yii::app()->request->baseUrl; ?>/BroadcastPeriod/admin">View Broadcasting Period</a>
                            </li>

                        </ul>
                    </li>
                    <li><a><i class="fa fa-gamepad"></i> Program Broadcasting Time <span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu" style="display: none">
                            <li><a href="<?php echo Yii::app()->request->baseUrl; ?>/BroadcastPeriodTime/create">Add Broadcasting Time</a>
                            </li>

                            <li><a href="<?php echo Yii::app()->request->baseUrl; ?>/BroadcastPeriodTime/admin">View Broadcasting Time</a>
                            </li>

                        </ul>
                    </li>
                    <li><a><i class="fa fa-object-group"></i> Program in Period <span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu" style="display: none">
                            <li><a href="<?php echo Yii::app()->request->baseUrl; ?>/ProgramsInPeriod/create">Add Program in Period</a>
                            </li>

                            <li><a href="<?php echo Yii::app()->request->baseUrl; ?>/ProgramsInPeriod/admin">View Program in Period</a>
                            </li>

                        </ul>
                    </li>
                    <li><a><i class="fa fa-server"></i>Daily Programs Queue <span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu" style="display: none">
                            <li><a href="<?php echo Yii::app()->request->baseUrl; ?>/DailyProgramsQueue/create">Add Daily Programs Queue</a>
                            </li>

                            <li><a href="<?php echo Yii::app()->request->baseUrl; ?>/DailyProgramsQueue/admin">View Daily Programs Queue</a>
                            </li>

                        </ul>
                    </li>
                    <li><a href="<?php echo Yii::app()->request->baseUrl; ?>/CheckQueue/admin"><i class="fa fa-check-circle"></i>Check Programs Queue <span class="fa fa-chevron-down"></span></a></li>
                </ul>
            </div>

        </div>
        <!-- /sidebar menu -->

        <!-- /menu footer buttons -->
        <div class="sidebar-footer hidden-small">
            <a data-toggle="tooltip" data-placement="top" title="Settings">
                <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
            </a>
            <a data-toggle="tooltip" data-placement="top" title="FullScreen">
                <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
            </a>
            <a data-toggle="tooltip" data-placement="top" title="Lock">
                <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
            </a>
            <a data-toggle="tooltip" data-placement="top" title="Logout" href="<?php echo Yii::app()->request->baseUrl; ?>/site/logout">
                <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
            </a>
        </div>
        <!-- /menu footer buttons -->
    </div>
</div>

<!-- top navigation -->
<div class="top_nav">

    <div class="nav_menu">
        <nav class="" role="navigation">
            <div class="nav toggle">
                <a id="menu_toggle"><i class="fa fa-bars"></i></a>
            </div>

            <ul class="nav navbar-nav navbar-right">
                <li class="">
                    <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                        <img src="<?php echo Yii::app()->request->baseUrl; ?>/adminfiles/images/img.jpg" alt="">John Doe
                        <span class=" fa fa-angle-down"></span>
                    </a>
                    <ul class="dropdown-menu dropdown-usermenu pull-right">
                        <li><a href="javascript:;">  Profile</a>
                        </li>
                        <li>
                            <a href="javascript:;">
                                <span class="badge bg-red pull-right">50%</span>
                                <span>Settings</span>
                            </a>
                        </li>
                        <li>
                            <a href="javascript:;">Help</a>
                        </li>
                        <li><a href="login.html"><i class="fa fa-sign-out pull-right"></i> Log Out</a>
                        </li>
                    </ul>
                </li>

                <li role="presentation" class="dropdown">
                    <a href="javascript:;" class="dropdown-toggle info-number" data-toggle="dropdown" aria-expanded="false">
                        <i class="fa fa-envelope-o"></i>
                        <span class="badge bg-green">6</span>
                    </a>
                    <ul id="menu1" class="dropdown-menu list-unstyled msg_list" role="menu">
                        <li>
                            <a>
                      <span class="image">
                                        <img src="<?php echo Yii::app()->request->baseUrl; ?>/adminfiles/images/img.jpg" alt="Profile Image" />
                                    </span>
                      <span>
                                        <span>John Smith</span>
                      <span class="time">3 mins ago</span>
                      </span>
                      <span class="message">
                                        Film festivals used to be do-or-die moments for movie makers. They were where...
                                    </span>
                            </a>
                        </li>
                        <li>
                            <a>
                      <span class="image">
                                        <img src="<?php echo Yii::app()->request->baseUrl; ?>/adminfiles/images/img.jpg" alt="Profile Image" />
                                    </span>
                      <span>
                                        <span>John Smith</span>
                      <span class="time">3 mins ago</span>
                      </span>
                      <span class="message">
                                        Film festivals used to be do-or-die moments for movie makers. They were where...
                                    </span>
                            </a>
                        </li>
                        <li>
                            <a>
                      <span class="image">
                                        <img src="<?php echo Yii::app()->request->baseUrl; ?>/adminfiles/images/img.jpg" alt="Profile Image" />
                                    </span>
                      <span>
                                        <span>John Smith</span>
                      <span class="time">3 mins ago</span>
                      </span>
                      <span class="message">
                                        Film festivals used to be do-or-die moments for movie makers. They were where...
                                    </span>
                            </a>
                        </li>
                        <li>
                            <a>
                      <span class="image">
                                        <img src="<?php echo Yii::app()->request->baseUrl; ?>/adminfiles/images/img.jpg" alt="Profile Image" />
                                    </span>
                      <span>
                                        <span>John Smith</span>
                      <span class="time">3 mins ago</span>
                      </span>
                      <span class="message">
                                        Film festivals used to be do-or-die moments for movie makers. They were where...
                                    </span>
                            </a>
                        </li>
                        <li>
                            <div class="text-center">
                                <a href="inbox.html">
                                    <strong>See All Alerts</strong>
                                    <i class="fa fa-angle-right"></i>
                                </a>
                            </div>
                        </li>
                    </ul>
                </li>

            </ul>
        </nav>
    </div>

</div>
<!-- /top navigation -->


<!-- page content -->
<div class="right_col" role="main">

    <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="dashboard_graph">
                <?php echo $content; ?>


                <div class="clearfix"></div>
            </div>
        </div>

    </div>
    <br />
</div>
<!-- /page content -->
</div>
<!-- /page content -->

<!-- footer content -->
<footer>
    <div class="pull-right">
        Radio PRJ702 - ©2016 All Rights Reserved.</a>
    </div>
    <div class="clearfix"></div>
</footer>
<!-- /footer content -->
</div>
</div>

<div id="custom_notifications" class="custom-notifications dsp_none">
    <ul class="list-unstyled notifications clearfix" data-tabbed_notifications="notif-group">
    </ul>
    <div class="clearfix"></div>
    <div id="notif-group" class="tabbed_notifications"></div>
</div>

<script src="<?php echo Yii::app()->request->baseUrl; ?>/adminfiles/js/bootstrap.min.js"></script>

<!-- gauge js -->
<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/adminfiles/js/gauge/gauge.min.js"></script>
<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/adminfiles/js/gauge/gauge_demo.js"></script>
<!-- bootstrap progress js -->
<script src="<?php echo Yii::app()->request->baseUrl; ?>/adminfiles/js/progressbar/bootstrap-progressbar.min.js"></script>
<!-- icheck -->
<script src="<?php echo Yii::app()->request->baseUrl; ?>/adminfiles/js/icheck/icheck.min.js"></script>
<!-- daterangepicker -->
<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/adminfiles/js/moment/moment.min.js"></script>
<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/adminfiles/js/datepicker/daterangepicker.js"></script>
<!-- chart js -->
<script src="<?php echo Yii::app()->request->baseUrl; ?>/adminfiles/js/chartjs/chart.min.js"></script>

<script src="<?php echo Yii::app()->request->baseUrl; ?>/adminfiles/js/custom.js"></script>

<!-- flot js -->
<!--[if lte IE 8]><script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/adminfiles/js/excanvas.min.js"></script><![endif]-->
<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/adminfiles/js/flot/jquery.flot.js"></script>
<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/adminfiles/js/flot/jquery.flot.pie.js"></script>
<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/adminfiles/js/flot/jquery.flot.orderBars.js"></script>
<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/adminfiles/js/flot/jquery.flot.time.min.js"></script>
<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/adminfiles/js/flot/date.js"></script>
<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/adminfiles/js/flot/jquery.flot.spline.js"></script>
<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/adminfiles/js/flot/jquery.flot.stack.js"></script>
<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/adminfiles/js/flot/curvedLines.js"></script>
<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/adminfiles/js/flot/jquery.flot.resize.js"></script>
<script>
    $(document).ready(function() {
        // [17, 74, 6, 39, 20, 85, 7]
        //[82, 23, 66, 9, 99, 6, 2]
        var data1 = [
            [gd(2012, 1, 1), 17],
            [gd(2012, 1, 2), 74],
            [gd(2012, 1, 3), 6],
            [gd(2012, 1, 4), 39],
            [gd(2012, 1, 5), 20],
            [gd(2012, 1, 6), 85],
            [gd(2012, 1, 7), 7]
        ];

        var data2 = [
            [gd(2012, 1, 1), 82],
            [gd(2012, 1, 2), 23],
            [gd(2012, 1, 3), 66],
            [gd(2012, 1, 4), 9],
            [gd(2012, 1, 5), 119],
            [gd(2012, 1, 6), 6],
            [gd(2012, 1, 7), 9]
        ];
        $("#canvas_dahs").length && $.plot($("#canvas_dahs"), [
            data1, data2
        ], {
            series: {
                lines: {
                    show: false,
                    fill: true
                },
                splines: {
                    show: true,
                    tension: 0.4,
                    lineWidth: 1,
                    fill: 0.4
                },
                points: {
                    radius: 0,
                    show: true
                },
                shadowSize: 2
            },
            grid: {
                verticalLines: true,
                hoverable: true,
                clickable: true,
                tickColor: "#d5d5d5",
                borderWidth: 1,
                color: '#fff'
            },
            colors: ["rgba(38, 185, 154, 0.38)", "rgba(3, 88, 106, 0.38)"],
            xaxis: {
                tickColor: "rgba(51, 51, 51, 0.06)",
                mode: "time",
                tickSize: [1, "day"],
                //tickLength: 10,
                axisLabel: "Date",
                axisLabelUseCanvas: true,
                axisLabelFontSizePixels: 12,
                axisLabelFontFamily: 'Verdana, Arial',
                axisLabelPadding: 10
                //mode: "time", timeformat: "%m/%d/%y", minTickSize: [1, "day"]
            },
            yaxis: {
                ticks: 8,
                tickColor: "rgba(51, 51, 51, 0.06)",
            },
            tooltip: false
        });

        function gd(year, month, day) {
            return new Date(year, month - 1, day).getTime();
        }
    });
</script>

<!-- worldmap -->
<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/adminfiles/js/maps/jquery-jvectormap-2.0.3.min.js"></script>
<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/adminfiles/js/maps/gdp-data.js"></script>
<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/adminfiles/js/maps/jquery-jvectormap-world-mill-en.js"></script>
<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/adminfiles/js/maps/jquery-jvectormap-us-aea-en.js"></script>
<!-- pace -->
<script src="<?php echo Yii::app()->request->baseUrl; ?>/adminfiles/js/pace/pace.min.js"></script>
<script>
    $(function() {
        $('#world-map-gdp').vectorMap({
            map: 'world_mill_en',
            backgroundColor: 'transparent',
            zoomOnScroll: false,
            series: {
                regions: [{
                    values: gdpData,
                    scale: ['#E6F2F0', '#149B7E'],
                    normalizeFunction: 'polynomial'
                }]
            },
            onRegionTipShow: function(e, el, code) {
                el.html(el.html() + ' (GDP - ' + gdpData[code] + ')');
            }
        });
    });
</script>
<!-- skycons -->
<script src="<?php echo Yii::app()->request->baseUrl; ?>/adminfiles/js/skycons/skycons.min.js"></script>
<script>
    var icons = new Skycons({
            "color": "#73879C"
        }),
        list = [
            "clear-day", "clear-night", "partly-cloudy-day",
            "partly-cloudy-night", "cloudy", "rain", "sleet", "snow", "wind",
            "fog"
        ],
        i;

    for (i = list.length; i--;)
        icons.set(list[i], list[i]);

    icons.play();
</script>

<!-- Doughnut Chart -->
<script>
    $('document').ready(function() {
        var options = {
            legend: false,
            responsive: false
        };

        new Chart(document.getElementById("canvas1"), {
            type: 'doughnut',
            tooltipFillColor: "rgba(51, 51, 51, 0.55)",
            data: {
                labels: [
                    "Symbian",
                    "Blackberry",
                    "Other",
                    "Android",
                    "IOS"
                ],
                datasets: [{
                    data: [15, 20, 30, 10, 30],
                    backgroundColor: [
                        "#BDC3C7",
                        "#9B59B6",
                        "#E74C3C",
                        "#26B99A",
                        "#3498DB"
                    ],
                    hoverBackgroundColor: [
                        "#CFD4D8",
                        "#B370CF",
                        "#E95E4F",
                        "#36CAAB",
                        "#49A9EA"
                    ]
                }]
            },
            options: options
        });
    });
</script>
<!-- /Doughnut Chart -->

<!-- datepicker -->
<script type="text/javascript">
    $(document).ready(function() {

        var cb = function(start, end, label) {
            console.log(start.toISOString(), end.toISOString(), label);
            $('#reportrange span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'));
            //alert("Callback has fired: [" + start.format('MMMM D, YYYY') + " to " + end.format('MMMM D, YYYY') + ", label = " + label + "]");
        }

        var optionSet1 = {
            startDate: moment().subtract(29, 'days'),
            endDate: moment(),
            minDate: '01/01/2012',
            maxDate: '12/31/2015',
            dateLimit: {
                days: 60
            },
            showDropdowns: true,
            showWeekNumbers: true,
            timePicker: false,
            timePickerIncrement: 1,
            timePicker12Hour: true,
            ranges: {
                'Today': [moment(), moment()],
                'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
                'Last 7 Days': [moment().subtract(6, 'days'), moment()],
                'Last 30 Days': [moment().subtract(29, 'days'), moment()],
                'This Month': [moment().startOf('month'), moment().endOf('month')],
                'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
            },
            opens: 'left',
            buttonClasses: ['btn btn-default'],
            applyClass: 'btn-small btn-primary',
            cancelClass: 'btn-small',
            format: 'MM/DD/YYYY',
            separator: ' to ',
            locale: {
                applyLabel: 'Submit',
                cancelLabel: 'Clear',
                fromLabel: 'From',
                toLabel: 'To',
                customRangeLabel: 'Custom',
                daysOfWeek: ['Su', 'Mo', 'Tu', 'We', 'Th', 'Fr', 'Sa'],
                monthNames: ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'],
                firstDay: 1
            }
        };
        $('#reportrange span').html(moment().subtract(29, 'days').format('MMMM D, YYYY') + ' - ' + moment().format('MMMM D, YYYY'));
        $('#reportrange').daterangepicker(optionSet1, cb);
        $('#reportrange').on('show.daterangepicker', function() {
            console.log("show event fired");
        });
        $('#reportrange').on('hide.daterangepicker', function() {
            console.log("hide event fired");
        });
        $('#reportrange').on('apply.daterangepicker', function(ev, picker) {
            console.log("apply event fired, start/end dates are " + picker.startDate.format('MMMM D, YYYY') + " to " + picker.endDate.format('MMMM D, YYYY'));
        });
        $('#reportrange').on('cancel.daterangepicker', function(ev, picker) {
            console.log("cancel event fired");
        });
        $('#options1').click(function() {
            $('#reportrange').data('daterangepicker').setOptions(optionSet1, cb);
        });
        $('#options2').click(function() {
            $('#reportrange').data('daterangepicker').setOptions(optionSet2, cb);
        });
        $('#destroy').click(function() {
            $('#reportrange').data('daterangepicker').remove();
        });
    });
</script>
<script>
    NProgress.done();
</script>
<!-- /datepicker -->
<!-- /footer content -->
</body>
<!-- Datatables-->
<script src="<?php echo Yii::app()->request->baseUrl; ?>/adminfiles/js/datatables/jquery.dataTables.min.js"></script>
<script src="<?php echo Yii::app()->request->baseUrl; ?>/adminfiles/js/datatables/dataTables.bootstrap.js"></script>
<script src="<?php echo Yii::app()->request->baseUrl; ?>/adminfiles/js/datatables/dataTables.buttons.min.js"></script>
<script src="<?php echo Yii::app()->request->baseUrl; ?>/adminfiles/js/datatables/buttons.bootstrap.min.js"></script>
<script src="<?php echo Yii::app()->request->baseUrl; ?>/adminfiles/js/datatables/jszip.min.js"></script>
<script src="<?php echo Yii::app()->request->baseUrl; ?>/adminfiles/js/datatables/pdfmake.min.js"></script>
<script src="<?php echo Yii::app()->request->baseUrl; ?>/adminfiles/js/datatables/vfs_fonts.js"></script>
<script src="<?php echo Yii::app()->request->baseUrl; ?>/adminfiles/js/datatables/buttons.html5.min.js"></script>
<script src="<?php echo Yii::app()->request->baseUrl; ?>/adminfiles/js/datatables/buttons.print.min.js"></script>
<script src="<?php echo Yii::app()->request->baseUrl; ?>/adminfiles/js/datatables/dataTables.fixedHeader.min.js"></script>
<script src="<?php echo Yii::app()->request->baseUrl; ?>/adminfiles/js/datatables/dataTables.keyTable.min.js"></script>
<script src="<?php echo Yii::app()->request->baseUrl; ?>/adminfiles/js/datatables/dataTables.responsive.min.js"></script>
<script src="<?php echo Yii::app()->request->baseUrl; ?>/adminfiles/js/datatables/responsive.bootstrap.min.js"></script>
<script src="<?php echo Yii::app()->request->baseUrl; ?>/adminfiles/js/datatables/dataTables.scroller.min.js"></script>


<!-- pace -->
<script src="js/pace/pace.min.js"></script>
<script>
    var handleDataTableButtons = function() {
            "use strict";
            0 !== $("#datatable-buttons").length && $("#datatable-buttons").DataTable({
                dom: "Bfrtip",
                buttons: [{
                    extend: "copy",
                    className: "btn-sm"
                }, {
                    extend: "csv",
                    className: "btn-sm"
                }, {
                    extend: "excel",
                    className: "btn-sm"
                }, {
                    extend: "pdf",
                    className: "btn-sm"
                }, {
                    extend: "print",
                    className: "btn-sm"
                }],
                responsive: !0
            })
        },
        TableManageButtons = function() {
            "use strict";
            return {
                init: function() {
                    handleDataTableButtons()
                }
            }
        }();
</script>
<script type="text/javascript">
    $(document).ready(function() {
        $('#datatable').dataTable();
        $('#datatable-keytable').DataTable({
            keys: true
        });
        $('#datatable-responsive').DataTable();
        $('#datatable-scroller').DataTable({
            ajax: "js/datatables/json/scroller-demo.json",
            deferRender: true,
            scrollY: 380,
            scrollCollapse: true,
            scroller: true
        });
        var table = $('#datatable-fixed-header').DataTable({
            fixedHeader: true
        });
    });
    TableManageButtons.init();
</script>
</body>
</html>
