Vim�UnDo� �����F8����n0�XBK~g_�
���f��   �                                   X9�     _�                      e        ����                                                                                                                                                                                                                                                                                                                                                             X9�     �               �   9<?php $__env->startSection('page-title', 'Dashboard'); ?>   )<?php $__env->startSection('content'); ?>   <div class="row">   ,   <div class="col-md-3 col-sm-6 col-xs-12">         <div class="info-box">   b         <span class="info-box-icon bg-white"><i class="ion ion-android-notifications"></i></span>   '         <div class="info-box-content">   5            <span class="info-box-text">Pushes</span>   C            <span class="info-box-number">90<small>%</small></span>            </div>   $         <!-- /.info-box-content -->         </div>         <!-- /.info-box -->   	   </div>      <!-- /.col -->   ,   <div class="col-md-3 col-sm-6 col-xs-12">         <div class="info-box">   S         <span class="info-box-icon bg-white"><i class="ion ion-iphone"></i></span>   '         <div class="info-box-content">   6            <span class="info-box-text">Devices</span>   7            <span class="info-box-number">41,410</span>            </div>   $         <!-- /.info-box-content -->         </div>         <!-- /.info-box -->   	   </div>      <!-- /.col -->   ,   <div class="col-md-3 col-sm-6 col-xs-12">         <div class="info-box">   y         <span class="info-box-icon bg-white"><i class="ion ion-iphone"></i><i class="ion ion-ios-plus-empty"></i></span>   '         <div class="info-box-content">   H            <span class="info-box-text">New Devices (last 7 days)</span>   7            <span class="info-box-number">41,410</span>            </div>   $         <!-- /.info-box-content -->         </div>         <!-- /.info-box -->   	   </div>      <!-- /.col -->   ,   <div class="col-md-3 col-sm-6 col-xs-12">         <div class="info-box">   a         <span class="info-box-icon bg-white"><i class="glyphicon glyphicon-eye-open"></i></span>   '         <div class="info-box-content">   8            <span class="info-box-text">Open rate</span>   4            <span class="info-box-number">40%</span>            </div>   $         <!-- /.info-box-content -->         </div>         <!-- /.info-box -->   	   </div>      <!-- /.col -->   </div>   <div class="row">       <!-- /.col (LEFT) -->       <div class="col-md-4">           <!-- LINE CHART -->   "        <div class="box box-info">   "            <div class="box-body">   #                <div class="chart">   +                    <div id="pushes"></div>                   </div>               </div>               <!-- /.box-body -->           </div>           <!-- /.box -->   
    </div>       <!-- /.col (RIGHT) -->       <!-- /.col (LEFT) -->       <div class="col-md-4">           <!-- LINE CHART -->   "        <div class="box box-info">   "            <div class="box-body">   #                <div class="chart">   ,                    <div id="devices"></div>                   </div>               </div>               <!-- /.box-body -->           </div>           <!-- /.box -->   
    </div>       <!-- /.col (RIGHT) -->       <div class="col-md-4">           <!-- LINE CHART -->   "        <div class="box box-info">   "            <div class="box-body">   #                <div class="chart">   .                    <div id="open-rate"></div>                   </div>               </div>               <!-- /.box-body -->           </div>           <!-- /.box -->   
    </div>       <!-- /.col (RIGHT) -->   </div>   <!-- /.row -->   !<?php echo e(var_dump($data)); ?>       <?php $__env->stopSection(); ?>       '<?php $__env->startSection('script); ?>   W<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>   <script>       :function drawChart(pushes, column, status, title, target){   9    google.charts.load('current', {'packages':['line']});   /    google.charts.setOnLoadCallback(drawChart);           function drawChart() {          8        var data = new google.visualization.DataTable();   $        data.addColumn('date', Day);   )        data.addColumn('number', column);   ,        $.each(pushes, function(key, value){   ;            data.addRows([[new Date(key), value[status]]]);           });           var options = {             chart: {               title: title,             },             height: 300,             legend: {                 position: 'none'             }   
        };       L        var chart = new google.charts.Line(document.getElementById(target));   "        chart.draw(data, options);       }      }   	</script>   <?php $__env->stopSection(); ?>       ~<?php echo $__env->make('layouts/admin-lte/master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>5��