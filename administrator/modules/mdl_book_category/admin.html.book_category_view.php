<?php
global $ariacms;
?>
<section class="content">
	<div class="row">
		<div class="col-xs-12">
			<div class="box">
				<div class="box-header">
					<h4 class="box-title">Danh sách danh mục sách</h4>
					<a href="index.php?module=<?php echo $_REQUEST['module'] ?>&task=book_category_add"><button class="btn btn-warning pull-right">Thêm mới <i class="fa fa-plus"></i></button></a>
				</div><!-- /.box-header -->
				<div class="box-body table-responsive">

					<table class="table table-bordered table-hover">
						<thead>
							<tr>

								<th>STT</th>
								<th class="col-md-5">Tên danh mục sách</th>
								<th class="col-md-4">Vị trí</th>
								<th class="col-md-2">Thao tác</th>
							</tr>
						</thead>
						<tbody>
							<form method="get" action="index.php" name="form_product_search" id="form_product_search">
								<input type="hidden" name="module" id="module" value="<?php echo $_REQUEST['module'] ?>" />
								<input type="hidden" name="task" id="task" value="product_view" />
								<tr>

									<td>
										<select name="page_size" id="page_size" class="form-control" onchange="this.form.submit();">
											<option value="">Hiển thị</option>
											<option value="10" <?php echo ($_REQUEST['page_size'] == '10') ? 'selected="selected"' : '' ?>>- - 10 - -</option>
											<option value="15" <?php echo ($_REQUEST['page_size'] == '15') ? 'selected="selected"' : '' ?>>- - 15 - -</option>
											<option value="20" <?php echo ($_REQUEST['page_size'] == '20') ? 'selected="selected"' : '' ?>>- - 20 - -</option>
											<option value="30" <?php echo ($_REQUEST['page_size'] == '30') ? 'selected="selected"' : '' ?>>- - 30 - -</option>
											<option value="50" <?php echo ($_REQUEST['page_size'] == '50') ? 'selected="selected"' : '' ?>>- - 50 - -</option>
											<option value="100" <?php echo ($_REQUEST['page_size'] == '100') ? 'selected="selected"' : '' ?>>- - 100 - -</option>
											<option value="999999999" <?php echo ($_REQUEST['page_size'] == '999999999') ? 'selected="selected"' : '' ?>>- - Tất cả - -</option>
										</select>
									</td>
                                    <td><input class="form-control" name="keysearch" id="keysearch" type="text" value="<?php echo $_REQUEST['keysearch'] ?>" /></td>
									<td></td>
                                    <td>
										<button class="btn btn-primary" name="input_submit_search" type="submit" value="Tìm kiếm">Lọc <i class="fa fa-filter"></i>
										</button>
									</td>
								</tr>
							</form>

							<?php
							$i = 0;
							foreach ($book_category as $value) {
								$i++;
							?>
								<tr class="<?php echo ($i % 2 == 1) ? 'bg-gray-light' : ''; ?> valign-middle">

									<td class="text-center">
										<?php echo $i ?>
									</td>
									<td><?php echo $value->tieude ?></td>
									<td><?php echo $value->vitri ?></td>

									<td><?= Model::book_category_view_link($value) ?></td>
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