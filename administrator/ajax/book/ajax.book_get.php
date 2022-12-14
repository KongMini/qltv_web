<?php
session_start();
if (file_exists("../../../configuration.php")) {
	require_once("../../../configuration.php");
} else {
	echo "Missing Configuration File";
	exit();
}
//Include Database Controller
if (file_exists("../../../include/database.php")) {
	require_once("../../../include/database.php");
} else {
	echo "Missing Database File";
	exit();
}
//Include System File
if (file_exists("../../../include/ariacms.php")) {
	require_once("../../../include/ariacms.php");
} else {
	echo "Missing System File";
	exit();
}
$database = new database($ariaConfig_server, $ariaConfig_username, $ariaConfig_password, $ariaConfig_database);
$ariacms = new ariacms();
$id = $_REQUEST['id'];
$query = "SELECT a.*, b.term_taxonomy_id_list FROM e4_posts a 
		LEFT JOIN ( 
				SELECT t1.object_id, GROUP_CONCAT(t1.term_taxonomy_id) AS term_taxonomy_id_list
				FROM e4_term_relationships t1 
				LEFT JOIN e4_term_taxonomy t2 ON t1.term_taxonomy_id = t2.id GROUP BY t1.object_id
				) b ON a.id = b.object_id
	WHERE a.id = $id";
$database->setQuery($query);
$book_detail = $database->loadRow();

$query = "SELECT * FROM e4_posts_meta WHERE post_id = $id";
$database->setQuery($query);
$term_metas = $database->loadObjectList();

foreach ($term_metas as $term_meta) {
	$book_detail['meta']->{$term_meta->meta_key} = $term_meta->meta_value;
}

$query = "SELECT a.*, count(b.parent) sub FROM e4_term_taxonomy a 
	LEFT JOIN (SELECT parent FROM e4_term_taxonomy ) b ON a.id = b.parent 
	GROUP BY a.id ORDER BY a.order ";
$database->setQuery($query);
$taxonomies = $database->loadObjectList();

$term_taxonomy_id_list = explode(",", $book_detail['term_taxonomy_id_list']);

$query = "SELECT a.id, a.fullname, a.status_public 
	FROM e4_users a 
	WHERE a.status_public != '' AND a.publish = 1 
	ORDER BY a.status_public, a.fullname";
$database->setQuery($query);
$users = $database->loadObjectList();
?>
<div class="modal-dialog modal-wide">
	<form method="POST" action="?module=book&task=book_edit&id=<?php echo $id ?>" name="book_edit" id="book_edit" class="form-horizontal">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">??</span></button>
				<h4 class="modal-title">C???p nh???t th??ng tin chi ti???t</h4>
			</div>
			<div class="modal-body modal-scroll">
				<div class="nav-tabs-custom">
					<ul class="nav nav-tabs">
						<li class="active"><a aria-expanded="true" href="#info_general" data-toggle="tab">Th??ng tin chung <font class="text-red">*</font></a></li>
						<li><a aria-expanded="false" href="#info_document" data-toggle="tab">Th??ng tin t??i li???u</a></li>
						<li><a aria-expanded="false" href="#info_other" data-toggle="tab">Th??ng tin SEO</a></li>
					</ul>
					<div class="tab-content">
						<div class="active tab-pane" id="info_general">
							<div class="form-group">
								<label for="title_vi" class="col-sm-6 col-md-6 col-lg-6">Ti??u ????? Ti???ng Vi???t <span class="text-red">*</span></label>
								<label for="title_en" class="col-sm-6 col-md-6 col-lg-6">Ti??u ????? Ti???ng Anh</label>
								<div class="col-sm-6 col-md-6 col-lg-6">
									<input class="form-control" name="title_vi" id="title_vi" type="text" required value="<?= $book_detail['title_vi'] ?>" />
								</div>
								<div class="col-sm-6 col-md-6 col-lg-6">
									<input class="form-control" name="title_en" id="title_en" type="text" value="<?= $book_detail['title_en'] ?>" />
								</div>
							</div>
							<div class="form-group">
								<label for="brief_vi" class="col-sm-6 col-md-6 col-lg-6">Gi???i thi???u Ti???ng Vi???t</label>
								<label for="brief_en" class="col-sm-6 col-md-6 col-lg-6">Gi???i thi???u Ti???ng Anh</label>
								<div class="col-sm-6 col-md-6 col-lg-6">
									<textarea class="form-control" rows="3" name="brief_vi" id="brief_vi" placeholder="T??m t???t gi???i thi???u b???n tin..."><?= $book_detail['brief_vi'] ?></textarea>
								</div>
								<div class="col-sm-6 col-md-6 col-lg-6">
									<textarea class="form-control" rows="3" name="brief_en" id="brief_en" placeholder="T??m t???t gi???i thi???u b???n tin..."><?= $book_detail['brief_en'] ?></textarea>
								</div>
							</div>
							<div class="form-group">
								<label for="product_price" class="col-sm-4 col-md-4 col-lg-4">Gi?? b??n</label>
								<label for="meta_year_public" class="col-sm-4 col-md-4 col-lg-4">N??m ph??t h??nh</label>
								<label for="meta_page" class="col-sm-4 col-md-4 col-lg-4">S??? trang</label>
								<div class="col-sm-4 col-md-4 col-lg-4">
									<input class="form-control" name="product_price" id="product_price" type="number" value="<?= $book_detail['product_price'] ?>" />
								</div>
								<div class="col-sm-4 col-md-4 col-lg-4">
									<input class="form-control" name="meta_year_public" id="meta_year_public" type="number" value="<?= $book_detail['meta']->meta_year_public ?>" />
								</div>
								<div class="col-sm-4 col-md-4 col-lg-4">
									<input class="form-control" name="meta_page" id="meta_page" type="number" value="<?= $book_detail['meta']->meta_page ?>" />
								</div>
							</div>
							<div class="form-group">
								<label for="content_vi" class="col-sm-12 col-md-12 col-lg-12">N???i dung Ti???ng Vi???t</label>
								<div class="col-sm-12 col-md-12 col-lg-12">
									<textarea class="form-control" name="content_vi" id="content_vi"><?= $book_detail['content_vi'] ?></textarea>
								</div>
								<script type="text/javascript">
									CKEDITOR.replace('content_vi', {
										// Reset toolbar settings, so full toolbar will be generated automatically.
										toolbarGroups: [{
												name: 'insert'
											},
											{
												name: 'others'
											},
											{
												name: 'paragraph',
												groups: ['align']
											},
											{
												name: 'basicstyles',
												groups: ['basicstyles']
											},
											{
												name: 'document',
												groups: ['mode', 'document', 'doctools']
											},
											{
												name: 'styles'
											}
										],
										removeButtons: null,
										height: 500,
										entities: false,
										fullPage: true,
										// Image browser
										filebrowserImageBrowseUrl: filemanageUrl,
										filebrowserImageUploadUrl: filemanageUrl,
										// allow style and css
										allowedContent: true,
										// auto wrap content in p tag
										autoParagraph: false
									});
								</script>
							</div>
							<div class="form-group">
								<label for="content_en" class="col-sm-12 col-md-12 col-lg-12">N???i dung Ti???ng Anh</label>
								<div class="col-sm-12 col-md-12 col-lg-12">
									<textarea class="form-control" name="content_en" id="content_en"><?= $book_detail['content_en'] ?></textarea>
								</div>
								<script type="text/javascript">
									CKEDITOR.replace('content_en', {
										// Reset toolbar settings, so full toolbar will be generated automatically.
										toolbarGroups: [{
												name: 'insert'
											},
											{
												name: 'others'
											},
											{
												name: 'paragraph',
												groups: ['align']
											},
											{
												name: 'basicstyles',
												groups: ['basicstyles']
											},
											{
												name: 'document',
												groups: ['mode', 'document', 'doctools']
											},
											{
												name: 'styles'
											}
										],
										removeButtons: null,
										height: 500,
										entities: false,
										fullPage: true,
										// Image browser
										filebrowserImageBrowseUrl: filemanageUrl,
										filebrowserImageUploadUrl: filemanageUrl,
										// allow style and css
										allowedContent: true,
										// auto wrap content in p tag
										autoParagraph: false
									});
								</script>
							</div>
						</div>

						<div class=" tab-pane" id="info_document">
							<div class="form-group">
								<div class="col-sm-6 col-md-6 col-lg-6">
									<label for="image">???nh ?????i di???n:</label>
									<?php if ($book_detail['image'] != '') { ?>
										<img style="height:75px;" id="newImg" txthide="image" class="choiceImg cursor margin" src="<?php echo $book_detail['image'] ?>" onclick="fcall.fcChoiceImg(this);" data-toggle="tooltip" title="Nh???n ????? ?????i ???nh ?????i di???n" />
									<?php } else { ?>
										<img style="height:75px;" id="newImg" txthide="image" class="choiceImg cursor margin" src="templates/aptcms/dist/img/noimage.png" onclick="fcall.fcChoiceImg(this);" data-toggle="tooltip" title="Nh???n ????? ch???n ???nh ?????i di???n" />
									<?php } ?>

									<input class="form-control " id="image" name="image" type="text" placeholder="???????ng d???n ???nh..." value="<?= $book_detail['image'] ?>" />
								</div>
								<div class="col-sm-6 col-md-6 col-lg-6">
									<label for="image_thumb">???nh thumb thu nh???:</label>
									<?php if ($book_detail['image_thumb'] != '') { ?>
										<img style="height:75px;" id="newImgThumb" txthide="image_thumb" class="choiceImg cursor margin" src="<?php echo $book_detail['image_thumb'] ?>" onclick="fcall.fcChoiceImg(this);" data-toggle="tooltip" title="Nh???n ????? ?????i ???nh ?????i di???n" />
									<?php } else { ?>
										<img style="height:75px;" id="newImgThumb" txthide="image_thumb" class="choiceImg cursor margin" src="templates/aptcms/dist/img/noimage.png" onclick="fcall.fcChoiceImg(this);" data-toggle="tooltip" title="Nh???n ????? ch???n ???nh ?????i di???n" />
									<?php } ?>
									<input class="form-control " id="image_thumb" name="image_thumb" type="text" placeholder="???????ng d???n ???nh..." value="<?= $book_detail['image_thumb'] ?>" />
								</div>
							</div>

							<div class="form-group">
								<div class="col-sm-6 col-md-6 col-lg-6">
									<label for="meta_file_audio">File audio:</label>
									<input class="btn btn-info margin" id="audio" txthide="meta_file_audio" class="choiceFile cursor margin" onclick="fcall.fcChoiceImg(this);" data-toggle="tooltip" title="Nh???n ????? ch???n file tr??n h??? th???ng" type="button" value="Ch???n file audio" />
									<input class="form-control " id="meta_file_audio" name="meta_file_audio" type="text" placeholder="???????ng d???n file..." value="<?= $book_detail['meta']->meta_file_audio ?>" />
								</div>
								<div class="col-sm-6 col-md-6 col-lg-6">
									<label for="meta_file_pdf">File PDF:</label>
									<input class="btn btn-info margin" id="pdf" txthide="meta_file_pdf" class="choiceFile cursor margin" onclick="fcall.fcChoiceImg(this);" data-toggle="tooltip" title="Nh???n ????? ch???n file tr??n h??? th???ng" type="button" value="Ch???n file PDF" />
									<input class="form-control " id="meta_file_pdf" name="meta_file_pdf" type="text" placeholder="???????ng d???n file..." value="<?= $book_detail['meta']->meta_file_pdf ?>" />
								</div>
							</div>

							<div class="form-group">
								<div class="col-sm-6 col-md-6 col-lg-6">
									<label>Danh m???c - Category</label>
									<select class="form-control select2" id="category" name="taxonomy[]" multiple="multiple" data-placeholder="Ch???n danh m???c..." style="width: 100%;">
										<?php
										foreach ($taxonomies as $taxonomy) {
											if ($taxonomy->taxonomy == 'book_category' && $taxonomy->parent == 0) {
												$selected = (in_array($taxonomy->id, $term_taxonomy_id_list)) ? 'selected' : '';
												echo '<option ' . $selected . ' value="' . $taxonomy->id . '">' . $taxonomy->title_vi . '</option>';
												if ($taxonomy->sub > 0) {
													foreach ($taxonomies as $taxonomy_sub) {
														if ($taxonomy->id == $taxonomy_sub->parent) {
															$selected = (in_array($taxonomy_sub->id, $term_taxonomy_id_list)) ? 'selected' : '';
															echo '<option ' . $selected . ' value="' . $taxonomy_sub->id . '">- - ' . $taxonomy_sub->title_vi . '</option>';
														}
													}
												}
											}
										}
										?>
									</select>
								</div>
								<div class="col-sm-6 col-md-6 col-lg-6">
									<label>Ch???n t??c gi??? cho s??ch</label>
									<select class="form-control select2" id="user_created" name="user_created" style="width: 100%;">
										<?php
										foreach ($users as $user) {
											if ($user->id == $_SESSION["user"]['id']) {
												echo '<option selected="selected" value="' . $user->id . '">' . $user->fullname . ' - T??i kho???n ??ang d??ng</option>';
											} else if ($user->id == $book_detail['user_created']) {
												echo '<option selected="selected" value="' . $user->id . '">' . $user->fullname . '</option>';
											} else {
												echo '<option value="' . $user->id . '">' . $user->fullname . '</option>';
											}
										}
										?>
									</select>
								</div>
							</div>

							<!-- <div class="form-group">
								<div class="col-sm-6 col-md-6 col-lg-6">
									<label>Ph??n lo???i - Type</label>
									<select class="form-control select2" id="type" name="taxonomy[]" multiple="multiple" data-placeholder="Ch???n danh m???c..." style="width: 100%;">
										<?php
										foreach ($taxonomies as $taxonomy) {
											if ($taxonomy->taxonomy == 'type' && $taxonomy->parent == 0) {
												$selected = (in_array($taxonomy->id, $term_taxonomy_id_list)) ? 'selected' : '';
												echo '<option ' . $selected . ' value="' . $taxonomy->id . '">' . $taxonomy->title_vi . '</option>';
												if ($taxonomy->sub > 0) {
													foreach ($taxonomies as $taxonomy_sub) {
														if ($taxonomy->id == $taxonomy_sub->parent) {
															$selected = (in_array($taxonomy_sub->id, $term_taxonomy_id_list)) ? 'selected' : '';
															echo '<option ' . $selected . ' value="' . $taxonomy_sub->id . '">- - ' . $taxonomy_sub->title_vi . '</option>';
														}
													}
												}
											}
										}
										?>
									</select>
								</div>
								<div class="col-sm-6 col-md-6 col-lg-6">
									<label>Chuy??n ????? - Topic</label>
									<select class="form-control select2" id="topic" name="taxonomy[]" multiple="multiple" data-placeholder="Ch???n nh??m..." style="width: 100%;">
										<?php
										foreach ($taxonomies as $taxonomy) {
											if ($taxonomy->taxonomy == 'topic' && $taxonomy->parent == 0) {
												$selected = (in_array($taxonomy->id, $term_taxonomy_id_list)) ? 'selected' : '';
												echo '<option ' . $selected . ' value="' . $taxonomy->id . '">' . $taxonomy->title_vi . '</option>';
												if ($taxonomy->sub > 0) {
													foreach ($taxonomies as $taxonomy_sub) {
														if ($taxonomy->id == $taxonomy_sub->parent) {
															$selected = (in_array($taxonomy_sub->id, $term_taxonomy_id_list)) ? 'selected' : '';
															echo '<option ' . $selected . ' value="' . $taxonomy_sub->id . '">- - ' . $taxonomy_sub->title_vi . '</option>';
														}
													}
												}
											}
										}
										?>
									</select>
								</div>
							</div> -->

							<div class="form-group">

								<div class="col-sm-6 col-md-6 col-lg-6">
									<label for="post_status">Tr???ng th??i v?? hi???n th???:</label>
									<select id="post_status" name="post_status" class="form-control">
										<option value="">- Ch???n -</option>
										<option <?= ($book_detail['post_status'] == 'active') ? 'selected' : ''; ?> value="active">???? xu???t b???n</option>
										<option <?= ($book_detail['post_status'] == 'waiting') ? 'selected' : ''; ?> value="waiting">Ch??? duy???t</option>
										<option <?= ($book_detail['post_status'] == 'deactive') ? 'selected' : ''; ?> value="deactive">Kh??ng ???????c duy???t</option>
									</select>
								</div>
								<div class="col-sm-6 col-md-6 col-lg-6">
									<!-- <label>Nh??m ???n ph???m</label>
									<select class="form-control select2" id="post_tags" name="taxonomy[]" multiple="multiple" data-placeholder="Ch???n nh??m..." style="width: 100%;">
										<?php
										foreach ($taxonomies as $taxonomy) {
											if ($taxonomy->taxonomy == 'book_group' && $taxonomy->parent == 0) {
												$selected = (in_array($taxonomy->id, $term_taxonomy_id_list)) ? 'selected' : '';
												echo '<option ' . $selected . ' value="' . $taxonomy->id . '">' . $taxonomy->title_vi . '</option>';
												if ($taxonomy->sub > 0) {
													foreach ($taxonomies as $taxonomy_sub) {
														if ($taxonomy->id == $taxonomy_sub->parent) {
															$selected = (in_array($taxonomy_sub->id, $term_taxonomy_id_list)) ? 'selected' : '';
															echo '<option ' . $selected . ' value="' . $taxonomy_sub->id . '">- - ' . $taxonomy_sub->title_vi . '</option>';
														}
													}
												}
											}
										}
										?>
									</select> -->
								</div>
							</div>

						</div>

						<div class="tab-pane" id="info_other">
							<p id="error_url_part" class="col-sm-9 col-md-9 col-lg-9 col-sm-offset-3 col-md-offset-3 col-lg-offset-3 text-danger"></p>
							<div class="form-group">
								<label for="url_part" class="col-sm-3 col-md-3 col-lg-3 control-label">???????ng d???n URL:</label>
								<div class="col-sm-9 col-md-9 col-lg-9">
									<input class="form-control" name="url_part" id="url_part" type="text" onblur="check_value_exist('<?= $book_detail['url_part'] ?>', '#url_part', 'e4_posts', 'url_part', '#error_url_part', '???????ng d???n URL');" value="<?= $book_detail['url_part'] ?>" />
								</div>

							</div>

							<div class="form-group">
								<label for="meta_title_vi" class="col-sm-3 col-md-3 col-lg-3 control-label">Meta Title Ti???ng Vi???t:</label>
								<div class="col-sm-9 col-md-9 col-lg-9">
									<input class="form-control" name="meta_title_vi" id="meta_title_vi" type="text" value="<?= $book_detail['meta']->meta_title_vi ?>" />
								</div>
							</div>
							<div class="form-group">
								<label for="meta_title_en" class="col-sm-3 col-md-3 col-lg-3 control-label">Meta Title Ti???ng Anh:</label>
								<div class="col-sm-9 col-md-9 col-lg-9">
									<input class="form-control" name="meta_title_en" id="meta_title_en" type="text" value="<?= $book_detail['meta']->meta_title_en ?>" />
								</div>
							</div>
							<div class="form-group">
								<label for="meta_keyword_vi" class="col-sm-3 col-md-3 col-lg-3 control-label">Meta Keyword Ti???ng Vi???t:</label>
								<div class="col-sm-9 col-md-9 col-lg-9">
									<input class="form-control" name="meta_keyword_vi" id="meta_keyword_vi" type="text" value="<?= $book_detail['meta']->meta_keyword_vi ?>" />
								</div>
							</div>
							<div class="form-group">
								<label for="meta_keyword_en" class="col-sm-3 col-md-3 col-lg-3 control-label">Meta Keyword Ti???ng Anh:</label>
								<div class="col-sm-9 col-md-9 col-lg-9">
									<input class="form-control" name="meta_keyword_en" id="meta_keyword_en" type="text" value="<?= $book_detail['meta']->meta_keyword_en ?>" />
								</div>
							</div>
							<div class="form-group">
								<label for="meta_description_vi" class="col-sm-3 col-md-3 col-lg-3 control-label">Meta Description Ti???ng Vi???t:</label>
								<div class="col-sm-9 col-md-9 col-lg-9">
									<input class="form-control" name="meta_description_vi" id="meta_description_vi" type="text" value="<?= $book_detail['meta']->meta_description_vi ?>" />
								</div>
							</div>
							<div class="form-group">
								<label for="meta_description_en" class="col-sm-3 col-md-3 col-lg-3 control-label">Meta Description Ti???ng Anh:</label>
								<div class="col-sm-9 col-md-9 col-lg-9">
									<input class="form-control" name="meta_description_en" id="meta_description_en" type="text" value="<?= $book_detail['meta']->meta_description_en ?>" />
								</div>
							</div>
						</div>

					</div>
				</div>
			</div>
			<div class="modal-footer">
				<div class="form-group">
					<div class="col-md-12 text-center">
						<button type="submit" class="btn btn-primary " name="submit" value="book_edit">C???p nh???t</button>
						<button type="button" class="btn btn-default " data-dismiss="modal">????ng l???i</button>
					</div>
				</div>
			</div>
		</div><!-- /.modal-content -->
	</form>
</div><!-- /.modal-dialog -->
<script>
	$(".select2").select2();
</script>