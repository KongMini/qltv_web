<?php
global $ariacms;
?>
<section class="content">
	<div class="row">
		<div class="col-xs-12">
			<div class="box">
				<div class="box-header">
					<h4 class="box-title">Danh sách sản phẩm</h4>
					<a href="index.php?module=<?php echo $_REQUEST['module'] ?>&task=book_add"><button class="btn btn-warning pull-right">Thêm mới <i class="fa fa-plus"></i></button></a>
				</div><!-- /.box-header -->
				<div class="box-body table-responsive">

					<table class="table table-bordered table-hover">
						<thead>
							<tr>
								<th class="col-md-1">
									<span class="form-control btn btn-danger hide-price">Xóa mục đã chọn</span>
								</th>
								<th class="col-md-2">STT</th>
								<th class="col-md-3">Tiêu đề</th>
								<th class="col-md-1">Người tạo</th>
								<th class="col-md-2">Danh mục</th>
								<th class="col-md-1">Tác giả</th>
								<th class="col-md-1">NXB</th>
								<th class="col-md-1">Giá sách</th>
								<th class="col-md-1">Số lượng</th>
								<th class="col-md-1">Thao tác</th>
							</tr>
						</thead>
						<tbody>
							<form method="get" action="index.php" name="form_book_search" id="form_book_search">
								<input type="hidden" name="module" id="module" value="<?php echo $_REQUEST['module'] ?>" />
								<input type="hidden" name="task" id="task" value="book_view" />
								<tr>
									<td>
										<span class="checkAll btn btn-primary form-control">Check All</span>
									</td>
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
									<td>
										<select class="form-control select2" id="user_created" name="user_created">
											<option value="">- Chọn -</option>
											<?php
											foreach ($users as $user) {
												if ($user->id == $_REQUEST['user_created']) {
													echo '<option selected="selected" value="' . $user->id . '">' . $user->fullname . '</option>';
												} else {
													echo '<option value="' . $user->id . '">' . $user->fullname . '</option>';
												}
											}
											?>
										</select>
									</td>
									<td>
										<select class="form-control select2" id="danhmucsach" name="danhmucsach">
											<option value="">- Chọn danh mục -</option>
											<?php
											foreach ($book_category as $value) { ?>
												<option <?php if($value->id == $_REQUEST['danhmucsach'] ) echo 'selected'?> value="<?=$value->id?>"><?=$value->tieude?></option>

											<?php }
											?>
										</select>
									</td>
									<td>
										<select id="tacgia" name="tacgia" class="form-control select2" onchange="this.form.submit();">
											<option value="">- Chọn tác giả-</option>
                                            <?php

                                            foreach ($book_author as $value) { ?>
                                                <option <?php if($value->id == $_REQUEST['tacgia'] ) echo 'selected'?> value="<?=$value->id?>"><?=$value->tentacgia?></option>

                                            <?php }
                                            ?>
                                        </select>
									</td>
                                    <td>
                                        <select id="nhaxuatban" name="nhaxuatban" class="form-control select2" onchange="this.form.submit();">
                                            <option value="">- Chọn nhà xuất bản-</option>
                                            <?php

                                            foreach ($book_nxb as $value) { ?>
                                                <option <?php if($value->id == $_REQUEST['nhaxuatban'] ) echo 'selected'?> value="<?=$value->id?>"><?=$value->tennhaxuatban?></option>

                                            <?php }
                                            ?>
                                        </select>
                                    </td>
									<td><input type="number" class="form-control" name="giasach" id="giasach" type="text" value="<?php echo $_REQUEST['giasach'] ?>" /></td>
									<td><input type="number" class="form-control" name="soluong" id="soluong" type="text" value="<?php echo $_REQUEST['soluong'] ?>" /></td>

									<td>
										<button class="btn btn-primary" name="input_submit_search" type="submit" value="Tìm kiếm">Lọc <i class="fa fa-filter"></i>
										</button>
									</td>
								</tr>
							</form>

							<?php
							$i = 0;
							foreach ($book as $value) {
								$i++;
							?>
								<tr class="<?php echo ($i % 2 == 1) ? 'bg-gray-light' : ''; ?> valign-middle">
									<td style="text-align: center;">
										<input type="checkbox" name="check-price" value="<?= $value->id ?>" />
									</td>
									<td>
										<?php echo $i ?>
									</td>
									<td><?php echo $value->tensach ?></td>
									<td><?php echo $value->fullname ?></td>
									<td><?php echo $value->tieude ?></td>
									<td><?php echo $value->tentacgia ?></td>
									<td><?php echo $value->tennhaxuatban ?></td>
									<td><?php echo number_format($value->giasach, 0,' ', '.') ?></td>
									<td><?php echo $value->soluong ?></td>
									<td><?= Model::book_view_link($value) ?></td>
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
<script>
	$(document).ready(function() {
		$('.checkAll').click(function() {
			var el = $(this);
			if (el.text() == 'Check All') {
				$('input[name="check-price"]').each(function() {
					this.checked = true;
				});
				el.text("UnCheck All");
			} else {
				$('input[name="check-price"]').each(function() {
					this.checked = false;
				});
				el.text("Check All");
			}
		});

		/** Hide price */
		$(".hide-price").click(function() {
			var idbook = "";
			$('input[name="check-price"]:checked').each(function() {
				idbook = idbook + $(this).val() + ',';
			});
			idbook = idbook.substr(0, idbook.length - 1);

			if (idbook == '') {
				alert("Bạn chưa chọn sản phẩm nào!");
			} else {
				var _url = 'ajax/book/ajax.update_price_status.php';
				$.ajax({
					url: _url,
					data: "idbook=" + idbook + "&type=hide",
					cache: false,
					context: document.body,
					success: function(data) {
						alert("Ẩn giá thành công!");
						window.location.reload(true);
					}
				});
			}
		});
		/** Show price */
		$(".show-price").click(function() {
			var idbook = "";
			$('input[name="check-price"]:checked').each(function() {
				idbook = idbook + $(this).val() + ',';
			});
			idbook = idbook.substr(0, idbook.length - 1);

			if (idbook == '') {
				alert("Bạn chưa chọn sản phẩm nào!");
			} else {
				var _url = 'ajax/book/ajax.update_price_status.php';
				$.ajax({
					url: _url,
					data: "idbook=" + idbook + "&type=show",
					cache: false,
					context: document.body,
					success: function(data) {
						alert("Hiển thị giá thành công!");
						window.location.reload(true);
					}
				});
			}
		});


	})
</script>