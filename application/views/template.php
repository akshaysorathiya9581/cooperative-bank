<!DOCTYPE html>
<html>

    <head>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>Co-Operative+ |  <?php echo $current_title; ?></title>

        <link href="<?php echo base_url(); ?>media/css/bootstrap.min.css" rel="stylesheet">
        <link href="<?php echo base_url(); ?>media/font-awesome/css/font-awesome.css" rel="stylesheet">

        <!-- Morris -->
        <link href="<?php echo base_url(); ?>media/css/plugins/morris/morris-0.4.3.min.css" rel="stylesheet">

        <!-- Gritter -->
        <link href="<?php echo base_url(); ?>media/js/plugins/gritter/jquery.gritter.css" rel="stylesheet">

        <link href="<?php echo base_url(); ?>media/css/animate.css" rel="stylesheet">
        <link href="<?php echo base_url(); ?>media/css/style.css" rel="stylesheet">
        
        
          <!-- Mainly scripts -->
        <script src="<?php echo base_url(); ?>media/js/jquery-1.10.2.js"></script>
        <script src="<?php echo base_url(); ?>media/js/bootstrap.min.js"></script>
        <script src="<?php echo base_url(); ?>media/js/plugins/metisMenu/jquery.metisMenu.js"></script>
        <script src="<?php echo base_url(); ?>media/js/plugins/slimscroll/jquery.slimscroll.min.js"></script>

        <!-- Flot -->
       <script src="<?php echo base_url(); ?>media/js/plugins/flot/jquery.flot.js"></script>
        <script src="<?php echo base_url(); ?>media/js/plugins/flot/jquery.flot.tooltip.min.js"></script>
        <script src="<?php echo base_url(); ?>media/js/plugins/flot/jquery.flot.spline.js"></script>
        <script src="<?php echo base_url(); ?>media/js/plugins/flot/jquery.flot.resize.js"></script>
        <script src="<?php echo base_url(); ?>media/js/plugins/flot/jquery.flot.pie.js"></script>

        <!-- Peity -->
        <script src="<?php echo base_url(); ?>media/js/plugins/peity/jquery.peity.min.js"></script>
        <script src="<?php echo base_url(); ?>media/js/demo/peity-demo.js"></script>

        <!-- Custom and plugin javascript -->
       <script src="<?php echo base_url(); ?>media/js/inspinia.js"></script> 
        <script src="<?php echo base_url(); ?>media/js/plugins/pace/pace.min.js"></script>

        <!-- jQuery UI -->
        <script src="<?php echo base_url(); ?>media/js/plugins/jquery-ui/jquery-ui.min.js"></script>

        <!-- GITTER -->
        <script src="<?php echo base_url(); ?>media/js/plugins/gritter/jquery.gritter.min.js"></script>

        <!-- EayPIE -->
        <script src="<?php echo base_url(); ?>media/js/plugins/easypiechart/jquery.easypiechart.js"></script>

        <!-- Sparkline -->
        <script src="<?php echo base_url(); ?>media/js/plugins/sparkline/jquery.sparkline.min.js"></script>

       
        <!-- ChartJS -->
        <script src="<?php echo base_url(); ?>media/js/plugins/chartJs/Chart.min.js"></script>
        

 <style type="text/css">
        div#member_info img{
            height: 50px;
            width: 100px;
        }
    </style>
    </head>

    <body>
        <div id="wrapper">
            <nav class="navbar-default navbar-static-side" role="navigation">

                <?php $this->load->view('menu'); ?>
            </nav>


            <div id="page-wrapper" class="gray-bg dashbard-1">
                <?php $this->load->view('header'); ?>

                <div class="row wrapper border-bottom white-bg page-heading">
                    <div class="col-lg-10">
                        <h2><?php echo (isset ($title) ? $title : $current_title); ?></h2>
                        <?php if(!isset ($dashboard)){ ?>
                        <ol class="breadcrumb">
                            <li>
                                <a href="<?php echo site_url(current_lang()); ?>"><?php echo lang('home'); ?></a>
                            </li>
                            <li>
                                <a><?php echo $current_title; ?></a>
                            </li>
                            <li class="active">
                                <strong><?php echo (isset ($title) ? $title : $current_title); ?></strong>
                            </li>
                        </ol>
                        <?php } ?>
                    </div>
                    <div class="col-lg-2">

                    </div>
                </div>



                <div class="wrapper wrapper-content animated fadeInRight">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="ibox float-e-margins">
                                <div class="ibox-title"><h3><strong><?php echo (isset ($title) ? $title : $current_title). (isset ($subtitle) ? $subtitle:'');  ?></strong></h3></div>
                                <div class="ibox-content">
                                    <div class="row">
                                        <?php
                                        if (isset($content) && isset($data)) {
                                            $this->load->view($content, $data);
                                        } else {
                                            $this->load->view($content);
                                        }
                                        ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>



                <div class="row"  >
                    <div class="col-lg-12">
                        <div class="footer">
                            <div class="pull-right">
                                <strong>Co-Operative++</strong>
                            </div>
                            <div>
                                <strong><?php echo date('Y'); ?> &copy; Phpscriptsonline.Com  </strong>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>

      

        <script>
            $(document).ready(function() {
            paceOptions = {
  // Disable the 'elements' source
  elements: false,

  // Only show the progress on regular and ajax-y page navigation,
  // not every request
  restartOnRequestAfter: false
}
            });
           /* $(document).ready(function() {
                WinMove();
                setTimeout(function() {
                    $.gritter.add({
                        title: 'You have two new messages',
                        text: 'Go to <a href="mailbox.html" class="text-warning">Mailbox</a> to see who wrote to you.<br/> Check the date and today\'s tasks.',
                        time: 2000
                    });
                }, 2000);


                $('.chart').easyPieChart({
                    barColor: '#f8ac59',
                    //                scaleColor: false,
                    scaleLength: 5,
                    lineWidth: 4,
                    size: 80
                });

                $('.chart2').easyPieChart({
                    barColor: '#1c84c6',
                    scaleLength: 5,
                    lineWidth: 4,
                    size: 80
                });

                var data1 = [
                    [0,4],[1,8],[2,5],[3,10],[4,4],[5,16],[6,5],[7,11],[8,6],[9,11],[10,30],[11,10],[12,13],[13,4],[14,3],[15,3],[16,6]
                ];
                var data2 = [
                    [0,1],[1,0],[2,2],[3,0],[4,1],[5,3],[6,1],[7,5],[8,2],[9,3],[10,2],[11,1],[12,0],[13,2],[14,8],[15,0],[16,0]
                ];
                $("#flot-dashboard-chart").length && $.plot($("#flot-dashboard-chart"), [
                    data1, data2
                ],
                {
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
                        hoverable: true,
                        clickable: true,
                        tickColor: "#d5d5d5",
                        borderWidth: 1,
                        color: '#d5d5d5'
                    },
                    colors: ["#1ab394", "#464f88"],
                    xaxis:{
                    },
                    yaxis: {
                        ticks: 4
                    },
                    tooltip: false
                }
            );

                var doughnutData = [
                    {
                        value: 300,
                        color: "#a3e1d4",
                        highlight: "#1ab394",
                        label: "App"
                    },
                    {
                        value: 50,
                        color: "#dedede",
                        highlight: "#1ab394",
                        label: "Software"
                    },
                    {
                        value: 100,
                        color: "#b5b8cf",
                        highlight: "#1ab394",
                        label: "Laptop"
                    }
                ];

                var doughnutOptions = {
                    segmentShowStroke: true,
                    segmentStrokeColor: "#fff",
                    segmentStrokeWidth: 2,
                    percentageInnerCutout: 45, // This is 0 for Pie charts
                    animationSteps: 100,
                    animationEasing: "easeOutBounce",
                    animateRotate: true,
                    animateScale: false,
                };

                var ctx = document.getElementById("doughnutChart").getContext("2d");
                var DoughnutChart = new Chart(ctx).Doughnut(doughnutData, doughnutOptions);

                var polarData = [
                    {
                        value: 300,
                        color: "#a3e1d4",
                        highlight: "#1ab394",
                        label: "App"
                    },
                    {
                        value: 140,
                        color: "#dedede",
                        highlight: "#1ab394",
                        label: "Software"
                    },
                    {
                        value: 200,
                        color: "#b5b8cf",
                        highlight: "#1ab394",
                        label: "Laptop"
                    }
                ];

                var polarOptions = {
                    scaleShowLabelBackdrop: true,
                    scaleBackdropColor: "rgba(255,255,255,0.75)",
                    scaleBeginAtZero: true,
                    scaleBackdropPaddingY: 1,
                    scaleBackdropPaddingX: 1,
                    scaleShowLine: true,
                    segmentShowStroke: true,
                    segmentStrokeColor: "#fff",
                    segmentStrokeWidth: 2,
                    animationSteps: 100,
                    animationEasing: "easeOutBounce",
                    animateRotate: true,
                    animateScale: false,
                };
                var ctx = document.getElementById("polarChart").getContext("2d");
                var Polarchart = new Chart(ctx).PolarArea(polarData, polarOptions);

            });*/
        </script>
        <script type="text/javascript" src="<?php echo base_url(); ?>media/js/script/script.js"></script>
    </body>
</html>
