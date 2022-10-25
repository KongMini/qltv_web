<?php
global $ariacms;
?>
<section class="content">
	<div class="row">
		<div class="col-xs-12">
			<div class="box">
				<div class="box-header">
					<h4 class="box-title">Danh sách bản ghi</h4>
					<a href="index.php?module=<?php echo $_REQUEST['module'] ?>&task=user_add"><button class="btn btn-warning pull-right">Thêm mới <i class="fa fa-plus"></i></button></a>

				</div><!-- /.box-header -->
				<div class="box-body">
					<form action="?module=<?= $_REQUEST['module'] ?>&task=user_view" method="GET">
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
								<select name="status" class="form-control">
									<option value="">Trạng thái</option>
									<option value="2" <?= ($_REQUEST['status'] == 2) ? "selected" : "" ?>>Đang tạm khóa</option>
									<option value="1" <?= ($_REQUEST['status'] == 1) ? "selected" : "" ?>>Đang sử dụng</option>
								</select>
							</div>
							<div class="col-md-2 ">
								<input type="submit" class="form-control btn btn-primary " value="Lọc danh sách" />
							</div>
						</div>
					</form>
					<table id="" class="table table-bordered table-hover">
						<thead>
							<tr>
								<th>STT</th>
								<th>Hệ thống</th>
								<!-- <th>Nhóm người dùng</th> -->
								<th>Tên đầy đủ</th>
								<th>Account</th>
								<th>Nhóm Quyền</th>
								<th>Đã đăng</th>
								<!-- <th>Sách</th> -->
								<th>Tạo lúc</th>
								<th>Thao tác</th>
							</tr>
						</thead>
						<tbody>
							<?php
							if ($totalRows > 0) {
								$cl = 1;
								while ($curRow < count($users) && ($curRow < $curPg * $maxRows)) {
									$i++;
									$user = $users[$curRow];
									$curRow++;
							?>
									<tr>
										<td><?= $i ?></td>
										<td><?= ($user->user_type == 'admin') ? 'Admin Web' : (($user->user_type == 'public') ? 'Public Web' : 'Không xác định') ?></td>
										<!-- <td><?= ($user->status_public == 'vietnam') ? 'Việt Nam' : (($user->status_public == 'danhnhan') ? 'Danh nhân' : (($user->status_public == 'quocte') ? "Quốc tế" : "Mặc định")) ?></td> -->
										<td><?= $user->fullname ?></td>
										<td><?= $user->email ?></td>
										<td><?= $user->role_code ?></td>
										<td><?= $user->total_post ?></td>
										<!-- <td><?= $user->total_book ?></td> -->
										<td><?= $ariacms->unixToDate($user->date_created, "/") . " " . $ariacms->unixToTime($user->date_created, ":") ?></td>
										<td>
											<?php if ($user->publish == "1") {
											?>
												<a data-toggle="tooltip" title="Nhấn để hủy kích hoạt" href="index.php?module=user&task=user_unpublish&id=<?= $user->id ?>">
													<i class="fa fa-eye"></i>
												</a>&nbsp;
											<?php
											} else {
											?>
												<a data-toggle="tooltip" title="Nhấn để kích hoạt" href="index.php?module=user&task=user_publish&id=<?= $user->id ?>">
													<i class="fa fa-eye-slash text-black"></i>
												</a>&nbsp;
											<?php
											}
											?>
											<a href="index.php?module=user&task=user_edit&id=<?= $user->id ?>">
												<i class="fa fa-edit" data-toggle="tooltip" title="Cập nhật thông tin"></i>
											</a>&nbsp;

											<a data-toggle="tooltip" title="Xóa" href="index.php?module=user&task=user_delete&id=<?= $user->id ?>" onclick="return confirmAction();">
												<i class="fa fa-trash text-red"></i>
											</a>&nbsp;
										</td>
									</tr>
							<?php
								}
							}
							?>
						</tbody>
					</table>

					<div class="row">
						<div class="col-sm-5">
							<div aria-live="polite" role="status" id="example1_info" class="dataTables_info">Hiển thị từ <?= $curPg * $maxRows - $maxRows + 1 ?> đến <?= ($curPg * $maxRows > $totalRows) ? $totalRows : $curPg * $maxRows; ?> trong số <?= $totalRows ?> bản ghi</div>
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