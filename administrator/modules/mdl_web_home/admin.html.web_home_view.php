<section class="content">
	<div class="row">
		<div class="col-xs-12">
			<div class="box">
				<div class="box-header">
					<h4 class="box-title">Danh sách nội dung cấu hình</h4>
					<a href="index.php?module=<?php echo $_REQUEST['module'] ?>&task=web_home_add"><button class="btn btn-warning pull-right">Thêm mới <i class="fa fa-plus"></i></button></a>
				</div><!-- /.box-header -->
				<div class="box-body table-responsive">
					<table id="" class="table table-bordered table-hover">
						<thead>
							<tr>
								<th class="col-md-2">Tiêu đề </th>
								<th class="col-md-4">Giới thiệu ngắn</th>
								<th class="col-md-2">Hình ảnh</th>
								<th class="col-md-2">Vị trí mapping menu</th>
								<th class="col-md-1">Sắp xếp</th>
								<th class="col-md-1">Thao tác</th>
							</tr>
						</thead>
						<tbody>
							<?php Model::PrintMenuAction('e4_web_home', 0, ''); ?>
						</tbody>
					</table>
				</div><!-- /.box-body -->
			</div><!-- /.box -->
		</div><!-- /.col -->
	</div><!-- /.row -->
</section>