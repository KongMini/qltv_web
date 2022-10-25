<?php
global $ariacms;
?>
<section class="content">
	<div class="row">
		<div class="col-xs-12">
			<form method="POST" action="?module=product&task=product_add" name="product_add" id="product_add" class="form-horizontal">
				<div class="box">
					<div class="box-header">
						<h4 class="box-title">Thông tin chi tiết </h4>
					</div><!-- /.box-header -->
					<div class="box-body ">
						<div class="nav-tabs-custom">
							<ul class="nav nav-tabs">
								<li class="active"><a aria-expanded="true" href="#info_general" data-toggle="tab">Thông tin chung <font class="text-red">*</font></a></li>
								<li><a aria-expanded="false" href="#info_document" data-toggle="tab">Thêm hình ảnh</a></li>
								<li><a aria-expanded="false" href="#related_post" data-toggle="tab">MIX AND MATCH</a></li>
								<li><a aria-expanded="false" href="#info_other" data-toggle="tab">Thông tin SEO</a></li>
								<li class="pull-right"><button type="submit" class="btn btn-primary" name="submit" value="product_add">Cập nhật</button></li>
							</ul>
							<div class="tab-content">
								<div class="active tab-pane" id="info_general">
									<div class="form-group">
										<div class="col-md-9">
											<div class="form-group">
												<div class="col-md-6">
													<label class="text-danger" for="title_vi">Tiêu đề Tiếng Việt <span class="text-red">*</span></label>
													<input class="form-control" name="title_vi" id="title_vi" type="text" required value="" />
												</div>
												<div class="col-md-6">
													<label class="text-danger" for="title_en">Tiêu đề Tiếng Anh</label>
													<input class="form-control" name="title_en" id="title_en" type="text" value="" />
												</div>
											</div>
											<div class="form-group">
												<div class="col-sm-6 col-md-6 col-lg-6">
													<label class="text-danger" for="image">Ảnh đại diện<span class="text-red">*</span>:</label>
													<img style="height:75px;" id="newimage" txthide="image" class="choiceImg cursor margin" src="templates/aptcms/dist/img/noimage.png"  onclick="openPopupImg('image')" data-toggle="tooltip" title="Nhấn để chọn ảnh đại diện" />
													<input class="form-control " id="image" name="image" type="text" placeholder="Đường dẫn ảnh..." value="" required />
												</div>
												<div class="col-sm-6 col-md-6 col-lg-6">
													<label class="text-danger" for="image_thumb">Ảnh thumb thu nhỏ:</label>
													<img style="height:75px;" id="newimage_thumb" txthide="image_thumb" class="choiceImg cursor margin" src="templates/aptcms/dist/img/noimage.png" onclick="openPopupImg('image_thumb')" data-toggle="tooltip" title="Nhấn để chọn ảnh đại diện" />
													<input class="form-control " id="image_thumb" name="image_thumb" type="text" placeholder="Đường dẫn ảnh..." value="" />
												</div>
											</div>

											<div class="form-group">
												<div class="col-md-6">
													<label class="text-danger" for="brief_vi">Giới thiệu Tiếng Việt</label>
													<textarea class="form-control" rows="3" name="brief_vi" id="brief_vi" placeholder="Tóm tắt giới thiệu bản tin..."></textarea>
												</div>
												<div class="col-md-6">
													<label class="text-danger" for="brief_en">Giới thiệu Tiếng Anh</label>
													<textarea class="form-control" rows="3" name="brief_en" id="brief_en" placeholder="Tóm tắt giới thiệu bản tin..."></textarea>
												</div>
											</div>
											<div class="form-group">

												<div class="col-md-12">
													<label for="content_vi" class="text-danger">Mô tả</label>
													<textarea class="form-control" name="content_vi" id="content_vi"></textarea>
												</div>
											</div>

											<div class="form-group">
												<div class="col-md-12">
													<label for="meta_highlight" class="text-danger">Hướng dẫn bảo quản</label>
													<textarea class="form-control" name="meta_highlight" id="meta_highlight"></textarea>
												</div>
											</div>
										</div>
										<div class="col-md-3">
											<div class="form-group">
												<div class="col-md-12">
													<label class="text-danger">Danh mục - Category <span class="text-red">*</span></label>
													<select class="form-control select2" id="category" name="taxonomy[]" multiple="multiple" data-placeholder="Chọn danh mục..." style="width: 100%;" required>
														<?php
														foreach ($taxonomies as $taxonomy) {
															if ($taxonomy->taxonomy == 'product_category' && $taxonomy->parent == 0) {
																echo '<option value="' . $taxonomy->id . '">' . $taxonomy->title_vi . '</option>';
																if ($taxonomy->sub > 0) {
																	foreach ($taxonomies as $taxonomy_sub) {
																		if ($taxonomy->id == $taxonomy_sub->parent) {
																			echo '<option value="' . $taxonomy_sub->id . '">- - ' . $taxonomy_sub->title_vi . '</option>';
																		}
																	}
																}
															}
														}
														?>
													</select>
												</div>
											</div>
											<div class="form-group">
												<div class="col-md-12">
													<label class="text-danger" for="product_sale">Giá bán ra</label>
													<input class="form-control" name="product_sale" id="product_sale" type="number" value="" />
												</div>
											</div>
											<div class="form-group">
												<div class="col-md-12">
													<label class="text-danger" for="product_price">Giá ban đầu (nếu có)</label>
													<input class="form-control" name="product_price" id="product_price" type="number" value="" />
												</div>
											</div>
											
											<div class="form-group">
												<div class="col-md-12">
													<label class="text-danger" for="meta_product_code">Mã sản phẩm</label>
													<input class="form-control" name="meta_product_code" id="meta_product_code" type="text" value="" />
												</div>
											</div>

											<div class="form-group hidden">
												<div class="col-md-12">
													<label class="text-danger" for="meta_product_brand">Thương hiệu</label>
													<input class="form-control" name="meta_product_brand" id="meta_product_brand" type="text" value="" />
												</div>
											</div>
											<!-- <div class="form-group">
												<div class="col-md-12">
													<label class="text-danger" for="product_price">Đánh giá</label>
													<select id="rating" name="rating" class="form-control">
														<option value="0">- Chọn -</option>
														<option value="1">1 sao</option>
														<option value="2">2 sao</option>
														<option value="3">3 sao</option>
														<option value="4">4 sao</option>
														<option value="5">5 sao</option>
													</select>
												</div>
											</div> -->


											<div class="form-group">
												<div class="col-md-12">
													<label class="text-danger">Nhóm - Group</label>
													<select class="form-control select2" id="group" name="taxonomy[]" multiple="multiple" data-placeholder="Chọn nhóm..." style="width: 100%;">
														<?php
														foreach ($taxonomies as $taxonomy) {
															if ($taxonomy->taxonomy == 'product_group' && $taxonomy->parent == 0) {
																echo '<option value="' . $taxonomy->id . '">' . $taxonomy->title_vi . '</option>';
																if ($taxonomy->sub > 0) {
																	foreach ($taxonomies as $taxonomy_sub) {
																		if ($taxonomy->id == $taxonomy_sub->parent) {
																			echo '<option value="' . $taxonomy_sub->id . '">- - ' . $taxonomy_sub->title_vi . '</option>';
																		}
																	}
																}
															}
														}
														?>
													</select>
												</div>
											</div>

											<div class="form-group hidden">
												<div class="col-md-12">
													<label class="text-danger">Size - Màu sắc</label>
													<select class="form-control select2" id="type" name="taxonomy[]" multiple="multiple" data-placeholder="Chọn thuộc tính..." style="width: 100%;">
														<?php
														foreach ($taxonomies as $taxonomy) {
															if ($taxonomy->taxonomy == 'product_type' && $taxonomy->parent == 0) {
																echo '<option value="' . $taxonomy->id . '" disabled>' . $taxonomy->title_vi . '</option>';
																if ($taxonomy->sub > 0) {
																	foreach ($taxonomies as $taxonomy_sub) {
																		if ($taxonomy->id == $taxonomy_sub->parent) {
																			echo '<option value="' . $taxonomy_sub->id . '">- - ' . $taxonomy_sub->title_vi . '</option>';
																		}
																	}
																}
															}
														}
														?>
													</select>
												</div>
											</div>

											<div class="form-group hidden">
												<div class="col-md-12">
													<label class="text-danger">Gắn thẻ - tags</label>
													<div class="form-group" style="margin-bottom: 0px;">
														<div class="col-md-12">
															<input value="" type="text" placeholder="Thêm tags..." id="tags_title">
															<button type="button" id="btn_add_tags" class="btn btn-sm btn-warning">Thêm</button>
														</div>
													</div>
													<select class="form-control select2" id="product_tags" name="taxonomy[]" multiple="multiple" data-placeholder="Chọn tags..." style="width: 100%;">
														<?php
														foreach ($taxonomies as $taxonomy) {
															if ($taxonomy->taxonomy == 'product_tags' && $taxonomy->parent == 0) {
																echo '<option value="' . $taxonomy->id . '">' . $taxonomy->title_vi . '</option>';
																if ($taxonomy->sub > 0) {
																	foreach ($taxonomies as $taxonomy_sub) {
																		if ($taxonomy->id == $taxonomy_sub->parent) {
																			echo '<option value="' . $taxonomy_sub->id . '">- - ' . $taxonomy_sub->title_vi . '</option>';
																		}
																	}
																}
															}
														}
														?>
													</select>
												</div>
											</div>
											<div class="form-group">
												<div class="col-md-12">
													<label class="text-danger" for="post_status">Trạng thái và hiển thị:</label>
													<select id="post_status" name="post_status" class="form-control">
														<option value="">- Chọn -</option>
														<option value="active">Đã xuất bản</option>
														<option selected value="waiting">Chờ duyệt</option>
														<option value="processed">Đã kiểm duyệt</option>
														<option value="deactive">Không được duyệt</option>
													</select>
												</div>
											</div>

											<div class="form-group hidden">
												<div class="col-md-12">
													<label class="text-danger" for="post_created">Ngày đăng</label>
													<input class="form-control datepicker" name="post_created" id="post_created" type="text" value='<?= $ariacms->unixToDate(time(), '/') ?>' />
													<p class="text-warning text-justify" style="padding-top: 10px;">
														Trong trường hợp muốn hẹn ngày xuất bản sau ngày hiện tại vui lòng chọn Trạng thái "Đã kiểm duyệt" <br />
														Bài viết sẽ tự động xuất bản khi đến ngày hẹn.
													</p>
												</div>
											</div>

										</div>
									</div>
								</div>

								<div class=" tab-pane" id="info_document">
                                    <div class="form-group" >
                                        <div class="col-sm-12 col-md-12 col-lg-12">
                                            <label for="image">Danh sách hình ảnh sản phẩm:</label>
                                            <input class="btn btn-info margin" id="newImgAlbum" txthide="image_album" class="choiceFile cursor margin" onclick="openPopupMultiImg2('image_album')" data-toggle="tooltip" title="Nhấn để chọn ảnh trên hệ thống" type="button" value="Chọn ảnh" />
                                        </div>
                                        <div class="col-sm-12 col-md-12 col-lg-12" id="frames">

                                        </div>
                                    </div>
                                    <script>
                                        var index = 0;
                                        function openPopupMultiImg2(id) {
                                            CKFinder.popup( {
                                                chooseFiles: true,
                                                onInit: function( finder ) {
                                                    finder.on( 'files:choose', function( evt ) {

                                                        // update multifile
                                                        var files = evt.data.files;
                                                        files.forEach( function( file, i ) {

                                                            $("#frames")
                                                                .append('<div class="form-group" id ="'+ index +'">' +
                                                                    '<div class="col-md-2" style="padding-left:0px;">' +
                                                                    '<image id="srcImage_'+ index +'" src="'+ file.getUrl() +'" style="height:100px; width:100%;" />'+
                                                                    '</div>' +
                                                                    '<div class="col-md-4" style="padding-left:0px;">' +
                                                                    '<input class="form-control" type="text" name="imagelist['+ index +'][0]" id="imagelist_'+ index +'" txthide="imagelist_'+ index +'" onclick="openPopupImg2('+ index +')" placeholder="Đường dẫn ảnh '+ index +' cho sản phẩm" value="'+ file.getUrl() +'" />' +
                                                                    '</div>' +
                                                                    '<div class="col-md-2" style="padding-left:0px;">' +

                                                                    '<select required class="form-control" id="type" name="imagelist['+ index +'][1]"  data-placeholder="Chọn thuộc tính..." style="width: 100%;" >'+
                                                                        '<option value="" > Chọn màu</option>' +
                                                                        '<option value="0" > Không có</option>' +
                                                                        '<?php
                                                                        foreach ($taxonomies as $taxonomy) {
                                                                            if ($taxonomy->taxonomy == "product_type" && $taxonomy->parent == 0 && $taxonomy->title_en == "Color") {
                                                                                if ($taxonomy->sub > 0) {
                                                                                    foreach ($taxonomies as $taxonomy_sub) {
                                                                                        if ($taxonomy->id == $taxonomy_sub->parent) {
                                                                                            echo '<option value="' . $taxonomy_sub->id . '">- - ' . $taxonomy_sub->title_vi . '</option>';
                                                                                        }
                                                                                    }
                                                                                }
                                                                            }
                                                                        }
                                                                        ?>' +
                                                                   ' </select>' +


                                                                    '</div>' +
                                                                    '<div class="col-md-2" style="padding-left:0px;">' +
                                                                    '<input class="btn btn-info form-control" onclick="openPopupImg2('+ index +')" txthide="imagelist_'+ index +'" type="button" value="Chọn file ảnh '+ index +'" name="imageadd['+ index +']" id="imageadd_'+ index +'" />' +
                                                                    '</div>' +

                                                                    '<div class="col-md-2" style="padding-left:0px;">' +
                                                                    '<input class="btn btn-danger form-control"  onclick="delete_img('+ index +')" value="Xóa ảnh '+ index +'"/>' +
                                                                    '</div>' +
                                                                    '</div>');
                                                            index++;
                                                        } );
                                                    } );
                                                    finder.on( 'file:choose:resizedImage', function( evt ) {
                                                        document.getElementById( id ).value = evt.data.resizedUrl;
                                                    } );
                                                }
                                            } );
                                        }
                                    </script>
								</div>

								<div class="tab-pane" id="info_other">
									<p id="error_url_part" class="col-sm-9 col-md-9 col-lg-9 col-sm-offset-3 col-md-offset-3 col-lg-offset-3 text-danger"></p>
									<div class="form-group">
										<label for="url_part" class="col-sm-3 col-md-3 col-lg-3 control-label">Đường dẫn URL:</label>
										<div class="col-sm-9 col-md-9 col-lg-9">
											<input class="form-control" name="url_part" id="url_part" type="text" onblur="check_value_exist('', '#url_part', 'e4_posts', 'url_part', '#error_url_part', 'Đường dẫn URL');" value="" />
										</div>

									</div>

									<div class="form-group">
										<label for="meta_title_vi" class="col-sm-3 col-md-3 col-lg-3 control-label">Meta Title Tiếng Việt:</label>
										<div class="col-sm-9 col-md-9 col-lg-9">
											<input class="form-control" name="meta_title_vi" id="meta_title_vi" type="text" value="" />
										</div>
									</div>
									<div class="form-group">
										<label for="meta_title_en" class="col-sm-3 col-md-3 col-lg-3 control-label">Meta Title Tiếng Anh:</label>
										<div class="col-sm-9 col-md-9 col-lg-9">
											<input class="form-control" name="meta_title_en" id="meta_title_en" type="text" value="" />
										</div>
									</div>
									<div class="form-group">
										<label for="meta_keyword_vi" class="col-sm-3 col-md-3 col-lg-3 control-label">Meta Keyword Tiếng Việt:</label>
										<div class="col-sm-9 col-md-9 col-lg-9">
											<input class="form-control" name="meta_keyword_vi" id="meta_keyword_vi" type="text" value="" />
										</div>
									</div>
									<div class="form-group">
										<label for="meta_keyword_en" class="col-sm-3 col-md-3 col-lg-3 control-label">Meta Keyword Tiếng Anh:</label>
										<div class="col-sm-9 col-md-9 col-lg-9">
											<input class="form-control" name="meta_keyword_en" id="meta_keyword_en" type="text" value="" />
										</div>
									</div>
									<div class="form-group">
										<label for="meta_description_vi" class="col-sm-3 col-md-3 col-lg-3 control-label">Meta Description Tiếng Việt:</label>
										<div class="col-sm-9 col-md-9 col-lg-9">
											<input class="form-control" name="meta_description_vi" id="meta_description_vi" type="text" value="" />
										</div>
									</div>
									<div class="form-group">
										<label for="meta_description_en" class="col-sm-3 col-md-3 col-lg-3 control-label">Meta Description Tiếng Anh:</label>
										<div class="col-sm-9 col-md-9 col-lg-9">
											<input class="form-control" name="meta_description_en" id="meta_description_en" type="text" value="" />
										</div>
									</div>
								</div>

								<div class="tab-pane" id="related_post">
									<input type="hidden" value="" id="list_related_product" name="meta_list_related_product">
									<div class="row">
										<div class="col-xs-6">
											<div class="box">
												<div class="box-header">
													<h3 class="box-title">Danh sách MIX AND MATCH</h3>
												</div><!-- /.box-header -->
												<div class="box-body table-responsive no-padding">
													<table class="table table-hover">
														<thead>
															<tr>
																<th class="col-md-1">ID</th>
																<th class="col-md-5">Tiêu đề</th>
																<th class="col-md-2">Tác giả</th>
																<th class="col-md-2">Đăng lúc</th>
																<th class="col-md-2">Thao tác</th>
															</tr>
														</thead>
														<tbody class="related_list">

														</tbody>
													</table>
												</div><!-- /.box-body -->
											</div><!-- /.box -->
										</div>
										<div class="col-xs-6">
											<div class="box">
												<div class="box-header">
													<h3 class="box-title"></h3>
													<div class="box-tools " style="width:90%">
														<div class="input-group">
															<input type="text" id="title_post" class="form-control input-sm pull-right" placeholder="Tiêu đề bản tin...">
															<div class="input-group-btn">
																<button type="button" class="btn btn-sm btn-default btn_search"><i class="fa fa-search"></i></button>
															</div>
														</div>
													</div>
												</div><!-- /.box-header -->
												<div class="box-body table-responsive no-padding">
													<table class="table table-hover">
														<thead>
															<tr>
																<th class="col-md-1">ID</th>
																<th class="col-md-5">Tiêu đề</th>
																<th class="col-md-2">Tác giả</th>
																<th class="col-md-2">Đăng lúc</th>
																<th class="col-md-2">Thao tác</th>
															</tr>
														</thead>
														<tbody class="search_result">
														</tbody>
													</table>
												</div><!-- /.box-body -->
											</div><!-- /.box -->
										</div>
									</div>
								</div>

							</div>
						</div>
					</div><!-- /.box-body -->
					<div class="box-footer">
						<div class="form-group">
							<div class="col-md-12 text-center">
								<button type="submit" class="btn btn-primary" name="submit" value="product_add">Cập nhật</button>
							</div>
						</div>
					</div>
				</div><!-- /.box -->
			</form>
		</div><!-- /.col -->
	</div><!-- /.row -->
</section>
<style>
    div.ck-editor__editable {
        height: 600px !important;
        overflow: scroll;
    }
</style>
<script>
    const customColorPalette = [
        {
            color: 'hsl(4, 90%, 58%)',
            label: 'Red'
        },
        {
            color: 'hsl(340, 82%, 52%)',
            label: 'Pink'
        },
        {
            color: 'hsl(291, 64%, 42%)',
            label: 'Purple'
        },
        {
            color: 'hsl(262, 52%, 47%)',
            label: 'Deep Purple'
        },
        {
            color: 'hsl(231, 48%, 48%)',
            label: 'Indigo'
        },
        {
            color: 'hsl(207, 90%, 54%)',
            label: 'Blue'
        },

        // ...
    ];

    ClassicEditor
        .create( document.querySelector( '#content_vi' ), {

            toolbar: {
                items: [
                    'CKFinder',"|",
                    'heading',
                    'bold',
                    'link',
                    'italic',
                    '|',
                    'blockQuote',
                    'alignment:left', 'alignment:right', 'alignment:center', 'alignment:justify',
                    'insertTable',
                    'undo',
                    'redo',

                    'bulletedList',
                    'numberedList',
                    'mediaEmbed',
                    'fontBackgroundColor',
                    'fontColor',
                    'fontSize',
                    'fontFamily',

                ]
            },
            language: 'vi',
            image: {
                toolbar: [
                    'imageTextAlternative',
                    'imageStyle:full',
                    'imageStyle:side'
                ]
            },
            table: {
                contentToolbar: [
                    'tableColumn', 'tableRow', 'mergeTableCells',
                    'tableProperties', 'tableCellProperties'
                ],

                // Set the palettes for tables.
                tableProperties: {
                    borderColors: customColorPalette,
                    backgroundColors: customColorPalette
                },

                // Set the palettes for table cells.
                tableCellProperties: {
                    borderColors: customColorPalette,
                    backgroundColors: customColorPalette
                }
            },
            licenseKey: '',


        } )
        .then( editor => {
            window.editor = editor;

        } )
        .catch( error => {
            console.error( 'Oops, something went wrong!' );
            console.error( 'Please, report the following error on https://github.com/ckeditor/ckeditor5/issues with the build id and the error stack trace:' );
            console.warn( 'Build id: v10wxmoi2tig-mwzdvmyjd96s' );
            console.error( error );
        } );
    ClassicEditor
        .create( document.querySelector( '#meta_highlight' ), {

            toolbar: {
                items: [
                    'CKFinder',"|",
                    'heading',
                    'bold',
                    'link',
                    'italic',
                    '|',
                    'blockQuote',
                    'alignment:left', 'alignment:right', 'alignment:center', 'alignment:justify',
                    'insertTable',
                    'undo',
                    'redo',

                    'bulletedList',
                    'numberedList',
                    'mediaEmbed',
                    'fontBackgroundColor',
                    'fontColor',
                    'fontSize',
                    'fontFamily',

                ]
            },
            language: 'vi',
            image: {
                toolbar: [
                    'imageTextAlternative',
                    'imageStyle:full',
                    'imageStyle:side'
                ]
            },
            table: {
                contentToolbar: [
                    'tableColumn', 'tableRow', 'mergeTableCells',
                    'tableProperties', 'tableCellProperties'
                ],

                // Set the palettes for tables.
                tableProperties: {
                    borderColors: customColorPalette,
                    backgroundColors: customColorPalette
                },

                // Set the palettes for table cells.
                tableCellProperties: {
                    borderColors: customColorPalette,
                    backgroundColors: customColorPalette
                }
            },
            licenseKey: '',


        } )
        .then( editor => {
            window.editor = editor;

        } )
        .catch( error => {
            console.error( 'Oops, something went wrong!' );
            console.error( 'Please, report the following error on https://github.com/ckeditor/ckeditor5/issues with the build id and the error stack trace:' );
            console.warn( 'Build id: v10wxmoi2tig-mwzdvmyjd96s' );
            console.error( error );
        } );
</script>

<script>
	var list_related_product = [];
	$(".btn_search").click(function() {
		var title_post = $("#title_post").val();
		var _url = "ajax/product/ajax.product_search.php";
		$.ajax({
			url: _url,
			data: "title_post=" + title_post + "&list_related_product=" + list_related_product,
			cache: false,
			context: document.body,
			success: function(data) {
				$(".search_result").html(data);
			}
		});
	});

	$('#title_post').keypress(function(event) {
		if (event.keyCode === 13) {
			// Cancel the default action, if needed
			event.preventDefault();
			delay(function() {
				$(".btn_search").click();
			}, 500);
		}
	});

	function addRelatedProduct(id) {
		var parent = $("#product_search_" + id);
		var content = "";
		/** Check add an item for related_list */
		if (parent.parent().hasClass("search_result")) {
			list_related_product.push(id);
			parent.find("span").html("Xóa");
			parent.find("span").addClass("btn-danger");
			parent.find("span").removeClass("btn-success");
			content = '<tr id="product_search_' + id + '">' + parent.html() + '</tr>';
			$(".related_list").append(content);
		} else {
			/** Check add an item for search_result */
			list_related_product.remove(id);
			parent.find("span").html("Thêm");
			parent.find("span").addClass("btn-success");
			parent.find("span").removeClass("btn-danger");
			content = '<tr id="product_search_' + id + '">' + parent.html() + '</tr>';
			$(".search_result").append(content);
		}
		/** Remove item */
		parent.remove();
		/** Update array for input */
		$("#list_related_product").val(list_related_product);
	}
	/** Add tags */
	$("#btn_add_tags").click(function() {
		var tags = $("#tags_title").val();
		if (tags.trim() == '') return;
		var _url = "ajax/product/ajax.product_add_tags.php";
		$.ajax({
			url: _url,
			data: "tags=" + tags,
			cache: false,
			context: document.body,
			success: function(data) {
				var obj = JSON.parse(data);
				var appendContent;
				if (obj.exist) {
					/** Tags is exist in DB */
					$("#product_tags option[value='" + obj.id + "']").prop('selected', true);
				} else if (!obj.exist) {
					/** Tags is created */
					appendContent = '<option value="' + obj.id + '" selected>' + obj.title_vi + '</option>';
					$("#product_tags").append(appendContent);
				} else {
					console.log("Has error in progress update DB");
				}
				$("#product_tags").select2();
			}
		});
	});
	$("#tags_title").keypress(function(event) {
		// Number 13 is the "Enter" key on the keyboard
		if (event.keyCode === 13) {
			// Cancel the default action, if needed
			event.preventDefault();
			$("#btn_add_tags").click();
		}
	});

	var index_image = 0;

	function AddNewImage() {
		index_image++;
		var value_append = '<div class="form-group"><div class="col-md-2" style="padding-left:0px;"><input class="btn btn-info form-control" onclick="fcall.fcChoiceImg(this);" txthide="imagelist_' + index_image + '" type="button" value="Chọn file ảnh ' + index_image + '" name="imageadd[' + index_image + ']" id="imageadd_' + index_image + '" /></div><div class="col-md-10" style="padding-left:0px;"><input class="form-control" type="text" name="imagelist[' + index_image + ']" id="imagelist_' + index_image + '" txthide="imagelist_' + index_image + '" ondblclick="fcall.fcChoiceImg(this);" placeholder="Đường dẫn ảnh ' + index_image + ' cho sản phẩm" /></div></div>';
		$('#imagelist').append(value_append);
	}
</script>