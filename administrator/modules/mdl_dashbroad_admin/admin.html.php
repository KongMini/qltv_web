<?php
class View
{
    static function index($thongkesach1nam,$sachhethan,$thongkesach1ngay, $thongkesach1tuan, $thongkesach1thang)
    { ?>
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

                        <div class="tab-content">
                            <h1 class="text-center"> Thống kê</h1>
                            <div class="box-body table-responsive">
                                <table class="table table-bordered table-hover">
                                    <thead>
                                    <tr>
                                        <th class="text-center">Đơn vị</th>
                                        <th class="">Đang mượn</th>
                                        <th class="">Đã trả</th>
                                        <th class="">Báo mất</th>
                                        <th class="">Muộn</th>
                                    </tr>
                                        <tr>
                                            <td class="text-center">1 ngày</td>
                                            <td><?php echo 0 + $thongkesach1ngay[0]->statu; ?></td>
                                            <td><?php echo 0 + $thongkesach1ngay[1]->statu; ?></td>
                                            <td><?php echo 0 + $thongkesach1ngay[2]->statu; ?></td>
                                            <td><?php echo 0 + $thongkesach1ngay[3]->statu; ?></td>
                                        </tr>
                                    <tr>
                                        <td class="text-center">1 Tuần</td>
                                        <td><?php echo 0 + $thongkesach1tuan[0]->statu; ?></td>
                                        <td><?php echo 0 + $thongkesach1tuan[1]->statu; ?></td>
                                        <td><?php echo 0 + $thongkesach1tuan[2]->statu; ?></td>
                                        <td><?php echo 0 + $thongkesach1tuan[3]->statu; ?></td>
                                    </tr>
                                    <tr>
                                        <td class="text-center">1 Tháng</td>
                                        <td><?php echo 0 + $thongkesach1thang[0]->statu; ?></td>
                                        <td><?php echo 0 + $thongkesach1thang[1]->statu; ?></td>
                                        <td><?php echo 0 + $thongkesach1thang[2]->statu; ?></td>
                                        <td><?php echo 0 + $thongkesach1thang[3]->statu; ?></td>
                                    </tr>
                                    <tr>
                                        <td class="text-center">1 Năm</td>
                                        <td><?php echo 0 + $thongkesach1nam[0]->statu; ?></td>
                                        <td><?php echo 0 + $thongkesach1nam[1]->statu; ?></td>
                                        <td><?php echo 0 + $thongkesach1nam[2]->statu; ?></td>
                                        <td><?php echo 0 + $thongkesach1nam[3]->statu; ?></td>
                                    </tr>

                                    </thead>
                                    <tbody>
                                    </tbody>
                                </table>

                            </div><!-- /.box-body -->
                        </div>

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


                    </div><!-- /.box -->
                </div><!-- /.col -->
            </div>

        </section>

    <?php }
}
?>