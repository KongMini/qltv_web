<?php
global $ariacms;
?>
<section class="content">
	<div class="row">
		<div class="col-xs-12">
			<form method="POST" action="?module=book_author&task=book_author_add" name="book_author_add" id="book_author_add" class="form-horizontal">
				<div class="box">
					<div class="box-header">
						<h4 class="box-title">Thêm thông tin tác giả</h4>
					</div><!-- /.box-header -->
					<div class="box-body ">
						<div class="nav-tabs-custom">

							<div class="tab-content">
								<div class="active tab-pane" id="info_general">
									<div class="form-group">
										<div class="col-md-12">
											<div class="form-group">
												<div class="col-md-12">
													<label class="text-danger" for="tentacgia">Tên tác giả <span class="text-red">*</span></label>
													<input class="form-control" name="tentacgia" id="tentacgia" type="text" required value="" />
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="box-footer">
						<div class="form-group">
							<div class="col-md-12 text-center">
								<button type="submit" class="btn btn-success" name="submit" value="book_author_add">Thêm mới</button>
							</div>
						</div>
					</div>
				</div>
			</form>
		</div>
</section>
<style>
    div.ck-editor__editable {
        height: 200px !important;
        overflow: scroll;
    }
</style>
