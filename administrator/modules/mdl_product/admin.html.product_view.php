<?php
global $ariacms;
?>
<section class="content">
	<div class="row">
		<div class="col-xs-12">
			<div class="box">
				<div class="box-header">
					<h4 class="box-title">Danh sách sản phẩm</h4>
					<a href="index.php?module=<?php echo $_REQUEST['module'] ?>&task=product_add"><button class="btn btn-warning pull-right">Thêm mới <i class="fa fa-plus"></i></button></a>
				</div><!-- /.box-header -->
				<div class="box-body table-responsive">

					<table class="table table-bordered table-hover">
						<thead>
							<tr>
								<th class="col-md-1">
									<span class="form-control btn btn-danger hide-price">Ẩn giá</span>
									<span class="form-control btn btn-success show-price">Hiện giá</span>
								</th>
								<th>STT</th>
								<th class="col-md-3">Tiêu đề</th>
								<th>Người tạo</th>
								<th class="col-md-2">Danh mục</th>
								<th class="col-md-1">Hiển thị giá</th>
								<th class="col-md-1">Trạng thái</th>
								<th class="col-md-1">Sắp xếp</th>
								<th class="col-md-1">Thao tác</th>
							</tr>
						</thead>
						<tbody>
							<form method="get" action="index.php" name="form_product_search" id="form_product_search">
								<input type="hidden" name="module" id="module" value="<?php echo $_REQUEST['module'] ?>" />
								<input type="hidden" name="task" id="task" value="product_view" />
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
										<select class="form-control select2" id="category" name="category">
											<option value="">- Chọn danh mục -</option>
											<?php
											foreach ($taxonomies as $taxonomy) {
												if ($taxonomy->taxonomy == 'product_category' && $taxonomy->parent == 0) {
													$selected = ($_REQUEST['category'] == $taxonomy->id) ? 'selected' : '';
													echo '<option ' . $selected . ' value="' . $taxonomy->id . '">' . $taxonomy->title_vi . '</option>';
													if ($taxonomy->sub > 0) {
														foreach ($taxonomies as $taxonomy_sub) {
															if ($taxonomy->id == $taxonomy_sub->parent) {
																$selected = ($_REQUEST['category'] == $taxonomy_sub->id) ? 'selected' : '';
																echo '<option ' . $selected . ' value="' . $taxonomy_sub->id . '">- - ' . $taxonomy_sub->title_vi . '</option>';
															}
														}
													}
												}
											}
											?>
										</select>
									</td>
									<td>
										<select id="price_status" name="price_status" class="form-control " onchange="this.form.submit();">
											<option value="">- Trạng thái giá -</option>
											<option value="active" <?php echo ($_REQUEST['price_status'] == 'active') ? 'selected="selected"' : '' ?>>Hiển thị giá</option>
											<option value="deactive" <?php echo ($_REQUEST['price_status'] == 'deactive') ? 'selected="selected"' : '' ?>>Ẩn giá</option>
										</select>
									</td>
									<td>
										<select id="post_status" name="post_status" class="form-control " onchange="this.form.submit();">
											<option value="">- Chọn -</option>
											<option value="active" <?php echo ($_REQUEST['post_status'] == 'active') ? 'selected="selected"' : '' ?>>Đã xuất bản</option>
											<option value="waiting" <?php echo ($_REQUEST['post_status'] == 'waiting') ? 'selected="selected"' : '' ?>>Chờ duyệt</option>
											<option value="processed" <?php echo ($_REQUEST['post_status'] == 'processed') ? 'selected="selected"' : '' ?>>Đã kiểm duyệt</option>
											<option value="deactive" <?php echo ($_REQUEST['post_status'] == 'deactive') ? 'selected="selected"' : '' ?>>Không được duyệt</option>
										</select>

									</td>
									<td></td>
									<td>
										<button class="btn btn-primary" name="input_submit_search" type="submit" value="Tìm kiếm">Lọc <i class="fa fa-filter"></i>
										</button>
									</td>
								</tr>
							</form>

							<?php
							$i = 0;
							foreach ($product as $new) {
								$i++;
							?>
								<tr class="<?php echo ($i % 2 == 1) ? 'bg-gray-light' : ''; ?> valign-middle">
									<td style="text-align: center;">
										<input type="checkbox" name="check-price" value="<?= $new->id ?>" />
									</td>
									<td>
										<?php echo $i ?>
									</td>
									<td><?php echo $new->title_vi ?></td>
									<td><?php echo $new->fullname ?></td>
									<td><?php echo $new->category ?></td>
									<td><?= ($new->price_status == "deactive") ? '<span class="label label-default">Ẩn giá</span>' : '<span class="label label-success">Hiện thị giá</span>'; ?></td>
									<td>
										<?= ($new->post_status == 'active') ? '<span class="label label-success">Đã xuất bản</span>' : (($new->post_status == 'waiting') ? '<span class="label label-warning">Đang chờ duyệt</span>' : (($new->post_status == 'deactive') ? '<span class="label label-danger">Không được duyệt</span>' : (($new->post_status == 'processed') ? '<span class="label label-primary">Đã kiểm duyệt</span>' : '<span class="label label-default">Không xác định</span>'))) ?> <br />
										<?php echo ($new->post_created) ? $ariacms->unixToDate($new->post_created, '/') : ''; ?>
									</td>
									<td>
										<input type="number" class="form-control" name="order" id="order" value="<?php echo  $new->order ?>" onchange="update_value_by_id('e4_posts', 'order', '<?php echo $new->id ?>', this.value);" />
									</td>
									<td><?= Model::product_view_link($new) ?></td>
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
			var idProduct = "";
			$('input[name="check-price"]:checked').each(function() {
				idProduct = idProduct + $(this).val() + ',';
			});
			idProduct = idProduct.substr(0, idProduct.length - 1);

			if (idProduct == '') {
				alert("Bạn chưa chọn sản phẩm nào!");
			} else {
				var _url = 'ajax/product/ajax.update_price_status.php';
				$.ajax({
					url: _url,
					data: "idProduct=" + idProduct + "&type=hide",
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
			var idProduct = "";
			$('input[name="check-price"]:checked').each(function() {
				idProduct = idProduct + $(this).val() + ',';
			});
			idProduct = idProduct.substr(0, idProduct.length - 1);

			if (idProduct == '') {
				alert("Bạn chưa chọn sản phẩm nào!");
			} else {
				var _url = 'ajax/product/ajax.update_price_status.php';
				$.ajax({
					url: _url,
					data: "idProduct=" + idProduct + "&type=show",
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