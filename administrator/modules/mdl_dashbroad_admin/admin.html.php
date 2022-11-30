<?php
class View
{
    static function index($sachdangmuon,$sachhethan,$sachdatra, $sachdamat, $sachquahan)
    {
        $start_date = date('d/m/Y', time() - 86400);
        if($_REQUEST['start_date'])
            $start_date =  $_REQUEST['start_date'];

        $end_date = date('d/m/Y');
        if($_REQUEST['end_date'])
            $end_date =  $_REQUEST['end_date'];

        ?>
        <script type="text/javascript" src="templates/aptcms/js/highcharts.js"></script>
        <section class="content-header">
            <h1>
                Dashboard
            </h1>
            <ol class="breadcrumb">
                <li><a href="index.php"><i class="fa fa-dashboard"></i> Home</a></li>
                <li class="active">Thống kê</li>
            </ol>
        </section>
        <section class="content">

            <div class="row">
                <div class="col-xs-12">
                    <div class="box">

                        <form action="?module=<?= $_REQUEST['module'] ?>" method="GET">
                            <input type="hidden" value="<?= $_REQUEST['module'] ?>" name="module" />
                            <div class="row box-body">

                                <div class="col-md-2 ">
                                    <input class="form-control datepicker" name="start_date" id="start_date" value="<?php echo $start_date ?>" placeholder="Tạo từ ngày..." type="text">
                                </div>
                                <div class="col-md-2 ">
                                    <input class="form-control datepicker" name="end_date" id="end_date" value="<?php echo $end_date ?>" placeholder="Đến ngày..." type="text">
                                </div>

                                <div class="col-md-2 ">
                                    <input type="submit" class="form-control btn btn-primary " value="Thông kê" />
                                </div>
                            </div>
                        </form>

                        <div id="chart1" style="min-width: 310px; height: 400px; margin: 0 auto"></div>

                        <script>

                            Highcharts.chart('chart1', {
                                chart: {
                                    plotBackgroundColor: null,
                                    plotBorderWidth: null,
                                    plotShadow: false,
                                    type: 'pie'
                                },
                                title: {
                                    text: 'Thống kê từ ngày <?= $start_date?> đến ngày <?= $end_date?>'
                                },
                                tooltip: {
                                    pointFormat: '{series.name}: <b>{point.y}</b>'
                                },
                                accessibility: {
                                    point: {
                                        valueSuffix: '%'
                                    }
                                },
                                plotOptions: {
                                    pie: {
                                        allowPointSelect: true,
                                        cursor: 'pointer',
                                        dataLabels: {
                                            enabled: true,
                                            format: '<b>{point.name}</b>: {point.percentage:.1f} %'
                                        }
                                    }
                                },
                                series: [{
                                    name: 'Brands',
                                    colorByPoint: true,
                                    data: [{
                                        name: 'Đang mượn',
                                        y: <?php echo 0 + count($sachdangmuon) ?>
                                    }, {
                                        name: 'Đã trả',
                                        y: <?php echo 0 + count($sachdatra)  ?>
                                    },  {
                                        name: 'Báo mất',
                                        y: <?php echo 0 + count($sachdamat) ?>
                                    }, {
                                        name: 'Muộn',
                                        y: <?php echo 0 + count($sachquahan) ?>
                                    }]
                                }]
                            });
                        </script>




                        <div class="tab-content">
                            <h1 class="text-center"> Danh sách sách sắp hết hạn</h1>
                            <div class="box-body table-responsive">
                                <table class="table table-bordered table-hover">
                                    <thead>
                                    <tr>
                                        <th width="5%" class="text-center">STT</th>
                                        <th class="">Tên sinh viên</th>
                                        <th class="">Tên sách</th>
                                        <th class="">Thời gian mượn</th>
                                    </tr>
                                    <?php $i = 0;
                                    if($sachhethan){
                                        foreach($sachhethan as $sach){ $i++;?>
                                            <tr>
                                                <td class="text-center"><?php echo $i; ?></td>
                                                <td><?php echo $sach->fullname; ?></td>
                                                <td><?php echo $sach->tensach; ?></td>
                                                <td><?php echo date("H:i:s d-m-Y", $sach->time_update); ?></td>

                                            </tr>
                                        <?php }
                                    } else {
                                        ?>
                                        <tr>
                                            <td class="text-center"><?php echo "0"; ?></td>
                                            <td><?php echo "Hiện tại không có sách sắp quá hạn" ?></td>
                                        </tr>
                                    <?php }?>
                                    </thead>
                                    <tbody>
                                    </tbody>
                                </table>

                            </div><!-- /.box-body -->
                        </div>

                        <div class="tab-content">
                            <h1 class="text-center"> Danh sách sách hết hạn</h1>
                            <div class="box-body table-responsive">
                                <table class="table table-bordered table-hover">
                                    <thead>
                                    <tr>
                                        <th width="5%" class="text-center">STT</th>
                                        <th class="">Tên sinh viên</th>
                                        <th class="">Tên sách</th>
                                        <th class="">Thời gian mượn</th>
                                    </tr>
                                    <?php $i = 0;
                                    if($sachquahan){
                                        foreach($sachquahan as $sach){ $i++;?>
                                            <tr>
                                                <td class="text-center"><?php echo $i; ?></td>
                                                <td><?php echo $sach->fullname; ?></td>
                                                <td><?php echo $sach->tensach; ?></td>
                                                <td><?php echo date("H:i:s d-m-Y", $sach->time_update); ?></td>

                                            </tr>
                                        <?php }
                                    } else {
                                        ?>
                                        <tr>
                                            <td class="text-center"><?php echo "0"; ?></td>
                                            <td><?php echo "Hiện tại không có sách  quá hạn" ?></td>
                                        </tr>
                                    <?php }?>
                                    </thead>
                                    <tbody>
                                    </tbody>
                                </table>

                            </div><!-- /.box-body -->
                        </div>


                    </div><!-- /.box -->
                </div><!-- /.col -->
            </div>

        </section>

    <?php }
}
?>