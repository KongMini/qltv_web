<section class="content">
	<div class="row">
		<div class="col-xs-12">
			<div class="box">
				<div class="box-header">
					<h4 class="box-title">Danh sách nhóm menu website</h4>
					<button class="btn btn-warning pull-right" data-toggle="modal" data-target="#showCNTT" onclick="showCNTT('','ajax/web_menu/ajax.web_menu_add.php');">
						Thêm nhóm menu <i class="fa fa-plus"></i>
					</button>
				</div>
				<div class="box-body table-responsive">
					<table class="table table-bordered table-hover">
						<thead>
							<tr>
								<th class="col-md-8">Tiêu đề</th>
								<th class="col-md-2">Vị trí hiển thị</th>
								<th class="col-md-1">Sắp xếp</th>
								<th class="col-md-1">Thao tác</th>
							</tr>
						</thead>
						<tbody>
							<?php
							$i = 0;
							foreach ($rows as $row) {
								$i++;
							?>
								<tr class="valign-middle">
									<td>
										<strong><?= $row->title_vi ?></strong>
										<?= '</br><small>' . $row->description . '</small>' ?>
									</td>
									<td>
										<select class="form-control" name="position" id="position" onchange="update_value_by_id('e4_web_menu', 'position', '<?php echo $row->id ?>', this.value);">
											<option value="">Chọn vị trí</option>
											
											<option value="main" <?php echo ($row->position == 'main') ? 'selected="selected"' : '' ?>>Menu chính</option>
											<option value="left" <?php echo ($row->position == 'left') ? 'selected="selected"' : '' ?>>Menu trái</option>
											<option value="right" <?php echo ($row->position == 'right') ? 'selected="selected"' : '' ?>>Menu phải</option>
											<option value="footer" <?php echo ($row->position == 'footer') ? 'selected="selected"' : '' ?>>Cuối trang</option>
											<option value="top" <?php echo ($row->position == 'top') ? 'selected="selected"' : '' ?>>Menu phụ đầu trang</option>
										</select>
									</td>
									<td>
										<input type="number" class="form-control" name="order" id="order" value="<?php echo  $row->order ?>" onchange="update_value_by_id('e4_web_menu', 'order', '<?php echo $row->id ?>', this.value);" />
									</td>
									<td>
										<?php

										echo '<a href="?module=web_menu&task=web_menu_edit&id=' . $row->id . '&tab=info_list"><i class="fa fa-list" data-toggle="tooltip" title="Danh sách link - liên kết"></i></a>&nbsp;&nbsp;';
										echo '<a href="?module=web_menu&task=web_menu_edit&id=' . $row->id . '"><i class="fa fa-pencil-square-o" data-toggle="tooltip" title="Cập nhật thông tin"></i></a>&nbsp;&nbsp;';
										if ($row->status == 'active') {
											echo '<a onclick="update_value_by_id(\'e4_web_menu\', \'status\', \'' . $row->id . '\', \'deactive\');" data-toggle="tooltip" href="javascript:void(0);" title="Nhấn để ẩn"><i class="fa fa-eye"></i></a>&nbsp;&nbsp;';
										} else {
											echo '<a onclick="update_value_by_id(\'e4_web_menu\', \'status\', \'' . $row->id . '\', \'active\');" data-toggle="tooltip" href="javascript:void(0);" title="Nhấn để hiển thị"><i class="fa fa-eye-slash text-black"></i></a>&nbsp;&nbsp;';
										}
										if ($row->submenu > 0) {
											echo '<a data-toggle="tooltip" href="javascript:void(0);" title="Không thể xóa menu khi có chứa link"><i class="fa fa-trash text-black"></i></a>&nbsp;&nbsp;';
										} else {
											echo '<a href="?module=web_menu&task=web_menu_delete&id=' . $row->id . '" onclick="return confirmAction();"><i class="fa fa-trash text-red" data-toggle="tooltip"  title="Xóa"></i></a>&nbsp;&nbsp;';
										}
										?>
									</td>
								</tr>
							<?php
							}
							?>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
</section>