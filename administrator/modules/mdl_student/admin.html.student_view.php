<?php
global $ariacms;
?>
<section class="content">
	<div class="row">
		<div class="col-xs-12">
			<div class="box">
				<div class="box-header">
					<h4 class="box-title">Danh sách bản ghi</h4>
					<a href="index.php?module=<?php echo $_REQUEST['module'] ?>&task=student_add"><button class="btn btn-warning pull-right">Thêm mới <i class="fa fa-plus"></i></button></a>

				</div><!-- /.box-header -->
				<div class="box-body">
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
								<th>Mã SV</th>
								<th>Tên đầy đủ</th>
								<th>Email</th>
								<th>Tạo lúc</th>
								<th>Thao tác</th>
							</tr>
						</thead>
						<tbody>
							<?php
							if ($totalRows > 0) {
								$cl = 1;
								while ($curRow < count($students) && ($curRow < $curPg * $maxRows)) {
									$i++;
									$student = $students[$curRow];
									$curRow++;
							?>
									<tr>
										<td><?= $i ?></td>
										<td><?= $student->masv ?></td>
										<td><?= $student->fullname ?></td>
										<td><?= $student->email ?></td>
										<!-- <td><?= $student->total_book ?></td> -->
										<td><?= $ariacms->unixToDate($student->date_created, "/") . " " . $ariacms->unixToTime($student->date_created, ":") ?></td>
										<td>
											<?php if ($student->publish == "1") {
											?>
												<a data-toggle="tooltip" title="Nhấn để hủy kích hoạt" href="index.php?module=student&task=student_unpublish&id=<?= $student->id ?>">
													<i style="font-size: 24px" class="fa fa-eye"></i>
												</a>&nbsp;
											<?php
											} else {
											?>
												<a data-toggle="tooltip" title="Nhấn để kích hoạt" href="index.php?module=student&task=student_publish&id=<?= $student->id ?>">
													<i style="font-size: 24px" class="fa fa-eye-slash text-black"></i>
												</a>&nbsp;
											<?php
											}
											?>
											<a href="index.php?module=student&task=student_edit&id=<?= $student->id ?>">
												<i class="fa fa-edit" data-toggle="tooltip" title="Cập nhật thông tin" style="font-size: 24px"></i>
											</a>&nbsp;

											<a data-toggle="tooltip" title="Xóa" href="index.php?module=student&task=student_delete&id=<?= $student->id ?>" onclick="return confirmAction();">
												<i style="font-size: 24px" class="fa fa-trash text-red"></i>
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