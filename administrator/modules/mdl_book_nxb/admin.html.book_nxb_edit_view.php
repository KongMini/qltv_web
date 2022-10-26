<?php
global $ariacms;
?>
<section class="content">
	<div class="row">
		<div class="col-xs-12">
			<form method="POST" action="?module=book_nxb&task=book_nxb_edit&id=<?= $book_nxb_detail['id'] ?>" name="product_edit" id="product_edit" class="form-horizontal">
				<div class="box">
					<div class="box-header">
						<h4 class="box-title">Thông tin chi tiết</h4>
					</div><!-- /.box-header -->
					<div class="box-body ">
						<div class="nav-tabs-custom">
							<div class="tab-content">
								<div class="active tab-pane" id="info_general">
									<div class="form-group">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <div class="col-md-12">
                                                    <label class="text-danger" for="tentacgia">Tên nhà xuất bản <span class="text-red">*</span></label>
                                                    <input class="form-control" name="tennhaxuatban" id="tennhaxuatban" type="text" required value="<?= $book_nxb_detail['tennhaxuatban']?>" />
                                                </div>
                                            </div>
                                        </div>
									</div>
								</div>
							</div>
						</div>
					</div><!-- /.box-body -->
					<div class="box-footer">
						<div class="form-group">
							<div class="col-md-12 text-center">
								<button type="submit" class="btn btn-primary" name="submit" value="book_nxb_edit">Cập nhật</button>
							</div>
						</div>
					</div>
				</div><!-- /.box -->
			</form>
		</div><!-- /.col -->
	</div><!-- /.row -->
</section>