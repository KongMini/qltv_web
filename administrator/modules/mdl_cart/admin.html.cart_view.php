<?php
global $ariacms;

$link = "?module=" . $_REQUEST['module'] . "&keyword=".$_REQUEST['keyword']."&start_date=".$_REQUEST['start_date']."&end_date=".$_REQUEST['end_date'] ;


?>
<section class="content">
	<div class="row">
		<div class="col-xs-12">
			<div class="box">
				<div class="box-header">
					<h4 class="box-title">Danh sách Lịch sử mượn trả</h4>
                    &nbsp;
                    <a href="index.php?module=<?php echo $_REQUEST['module'] ?>&task=cart_mail"><button class="btn btn-danger pull-right"> Gửi mail thông báo sách quá hạn</button></a>
                    &nbsp;

                    <a href="index.php?module=<?php echo $_REQUEST['module'] ?>&task=cart_add"><button class="btn btn-warning pull-right">Thêm mới <i class="fa fa-plus"></i></button></a>
                    &nbsp;
                </div><!-- /.box-header -->
				<div class="box-body table-responsive">
                    <form action="?module=<?= $_REQUEST['module'] ?>&task=student_view" method="GET">
                        <input type="hidden" value="<?= $_REQUEST['module'] ?>" name="module" />
                        <div class="row box-body">
                            <div class="col-md-4 ">
                                <input class="form-control" name="keyword" id="keyword" value="<?= $_REQUEST['keyword'] ?>" placeholder="Thông tin người dùng..." type="text">
                            </div>

                            <div class="col-md-2 ">
                                <input class="form-control datepicker" name="start_date" id="start_date" value="<?= $_REQUEST['start_date'] ?>" placeholder="Tạo từ ngày..." type="text">
                            </div>
                            <div class="col-md-2 ">
                                <input class="form-control datepicker" name="end_date" id="end_date" value="<?= $_REQUEST['end_date'] ?>" placeholder="Đến ngày..." type="text">
                            </div>

                            <div class="col-md-2 ">
                                <input type="submit" class="form-control btn btn-primary " value="Lọc danh sách" />
                            </div>
                        </div>
                    </form>
					<table class="table table-bordered table-hover">
						<thead>
							<tr>
								<th>STT</th>
                                <th>
                                    <a href="
                                    <?php if($_REQUEST['sort'] == 'masv' && $_REQUEST['sort_type'] = 'asc')
                                        echo $link . '&sort=masv&sort_type=desc';
                                    else if($_REQUEST['sort'] == 'masv' && $_REQUEST['sort_type'] = 'desc')
                                        echo $link . '&sort=masv&sort_type=asc';
                                    else
                                        echo $link . '&sort=masv&sort_type=asc';
                                    ?>">
                                        Mã sinh viên
                                    </a>
                                </th>
                                <th><a href="<?php if($_REQUEST['sort'] == 'fullname' && $_REQUEST['sort_type'] = 'asc')
                                        echo $link . '&sort=fullname&sort_type=desc';
                                   else  if($_REQUEST['sort'] == 'fullname' && $_REQUEST['sort_type'] = 'desc')
                                        echo $link . '&sort=fullname&sort_type=asc';
                                    else
                                        echo $link . '&sort=fullname&sort_type=asc';
                                    ?>">Tên sinh viên</a></th>
								<th>
                                    <a href="<?php if($_REQUEST['sort'] == 'time_update' && $_REQUEST['sort_type'] = 'asc')
                                        echo $link . '&sort=time_update&sort_type=desc';
                                   else if($_REQUEST['sort'] == 'time_update' && $_REQUEST['sort_type'] = 'desc')
                                        echo $link . '&sort=time_update&sort_type=asc';
                                    else
                                        echo $link . '&sort=time_update&sort_type=asc';
                                    ?>">
                                        Thời gian mượn
                                    </a>
                                    </th>
								<th>Thao tác</th>
							</tr>
						</thead>
						<tbody>
							<?php
							$i = 0;
							foreach ($carts as $cart) {
								$i++;
							?>
								<tr class="<?= ($i % 2 == 1) ? 'bg-gray-light' : ''; ?> valign-middle">
									<td><?= $i ?></td>
									<td><?= $cart->masv ?></td>
									<td><?= $cart->fullname ?></td>
                                    <td><?= Date("H:i:s d/m/Y", $cart->time_update )?></td>
								<td><?= Model::cart_view_link($cart) ?></td>
								</tr>
							<?php
							}
							?>
						</tbody>
					</table>
					<div class="row">
						<div class="col-sm-5">
							<div aria-live="polite" role="status" id="example1_info" class="dataTables_info">Hiển thị từ <?php echo $curPg * $maxRows - $maxRows + 1 ?> đến <?php echo ($curPg * $maxRows > $totalRows) ? $totalRows : $curPg * $maxRows; ?> trong số <?php echo $totalRows ?> bản ghi</div>
						</div>
						<div class="col-sm-7">
							<div id="example1_paginate" class="dataTables_paginate paging_simple_numbers">
								<ul class="pagination">
									<?= $ariacms->paginationAdmin($totalRows, $maxRows, 5) ?>
								</ul>
							</div>
						</div>
					</div>
				</div><!-- /.box-body -->
			</div><!-- /.box -->
		</div><!-- /.col -->
	</div><!-- /.row -->
</section>