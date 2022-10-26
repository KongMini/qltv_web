<?php
global $ariacms;
?>
<section class="content">
	<div class="row">
		<div class="col-xs-12">
			<form method="POST" action="?module=book_author&task=book_author_edit&id=<?= $book_author_detail['id'] ?>" name="product_edit" id="product_edit" class="form-horizontal">
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
                                                    <label class="text-danger" for="tentacgia">Tên tác giả <span class="text-red">*</span></label>
                                                    <input class="form-control" name="tentacgia" id="tentacgia" type="text" required value="<?= $book_author_detail['tentacgia']?>" />
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
								<button type="submit" class="btn btn-primary" name="submit" value="book_author_edit">Cập nhật</button>
							</div>
						</div>
					</div>
				</div><!-- /.box -->
			</form>
		</div><!-- /.col -->
	</div><!-- /.row -->
</section>