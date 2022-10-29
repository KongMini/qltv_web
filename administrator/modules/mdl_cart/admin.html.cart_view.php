<?php
global $ariacms;
?>
<section class="content">
	<div class="row">
		<div class="col-xs-12">
			<div class="box">
				<div class="box-header">
					<h4 class="box-title">Danh sách Mượn trả</h4>
                    &nbsp;
                    <a href="index.php?module=<?php echo $_REQUEST['module'] ?>&task=cart_mail"><button class="btn btn-danger pull-right"> Gửi mail thông báo sách quá hạn</button></a>
                    &nbsp;

                    <a href="index.php?module=<?php echo $_REQUEST['module'] ?>&task=cart_add"><button class="btn btn-warning pull-right">Thêm mới <i class="fa fa-plus"></i></button></a>
                    &nbsp;
                </div><!-- /.box-header -->
				<div class="box-body table-responsive">
					<table class="table table-bordered table-hover">
						<thead>
							<tr>
								<th>STT</th>
								<th>Mã sinh viên</th>
								<th>Tên sinh viên</th>
								<th>Thời gian mượn</th>
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