<?php
global $ariacms;
?>
<section class="content">
	<div class="row">
		<div class="col-xs-12">
			<form method="POST" action="?module=book&task=book_edit&id=<?= $book_detail['id'] ?>" name="book_edit" id="book_edit" class="form-horizontal">
				<div class="box">
					<div class="box-header">
						<h4 class="box-title">Thông tin chi tiết</h4>
					</div><!-- /.box-header -->
					<div class="box-body ">
						<div class="nav-tabs-custom">

							<div class="tab-content">
								<div class="active tab-pane" id="info_general">
                                    <div class="form-group">
                                        <div class="col-md-8">
                                            <div class="form-group">
                                                <div class="col-md-12">
                                                    <label class="text-danger" for="tensach">Tên sách <span class="text-red">*</span></label>
                                                    <input class="form-control" name="tensach" id="tensach" type="text" required value="" />
                                                </div>

                                            </div>
                                            <div class="form-group">
                                                <div class="col-sm-6 col-md-6 col-lg-6">
                                                    <label class="text-danger" for="image">Ảnh đại diện<span class="text-red">*</span>:</label>
                                                    <img style="height:75px;" id="newimage" txthide="image" class="choiceImg cursor margin" src="templates/aptcms/dist/img/noimage.png"  onclick="openPopupImg('image')" data-toggle="tooltip" title="Nhấn để chọn ảnh đại diện" />
                                                </div>
                                                <div class="col-sm-6 col-md-6 col-lg-6">
                                                    <input class="form-control " id="image" name="image" type="text" placeholder="Đường dẫn ảnh..." value="" required />
                                                </div>
                                            </div>

                                            <div class="form-group">

                                                <div class="col-md-12">
                                                    <label for="content_vi" class="text-danger">Mô tả</label>
                                                    <textarea class="form-control ckeditor" name="mota" id="mota"></textarea>
                                                </div>
                                            </div>

                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <div class="col-md-12">
                                                    <label class="text-danger" for="masach">Mã sản phẩm<span class="text-red">*</span></label>
                                                    <input class="form-control" name="masach" id="masach" type="text" value="" required/>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="col-md-12">
                                                    <label class="text-danger" for="giasach">Giá sách<span class="text-red">*</span></label>
                                                    <input class="form-control" name="giasach" id="giasach" type="number" value="" required />
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="col-md-12">
                                                    <label class="text-danger" for="soluong">Số lượng<span class="text-red">*</span></label>
                                                    <input class="form-control" name="soluong" id="soluong" type="number" value="" required/>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="col-md-12">
                                                    <label class="text-danger">Danh mục sách <span class="text-red">*</span></label>
                                                    <select class="form-control select2" id="danhmucsach" name="danhmucsach"  data-placeholder="Chọn danh mục..." style="width: 100%;" required>
                                                        <option value="">- Chọn -</option>
                                                        <?php
                                                        foreach ($book_category as $value) {
                                                            echo '<option value="' . $value->id . '">' . $value->tieude . '</option>';
                                                        }
                                                        ?>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="col-md-12">
                                                    <label class="text-danger">Tác giả <span class="text-red">*</span></label>
                                                    <select class="form-control select2" id="tacgia" name="tacgia"  data-placeholder="Chọn tác giả..." style="width: 100%;" required>
                                                        <option value="">- Chọn -</option>
                                                        <?php
                                                        foreach ($book_author as $value) {
                                                            echo '<option value="' . $value->id . '">' . $value->tentacgia . '</option>';
                                                        }
                                                        ?>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="col-md-12">
                                                    <label class="text-danger">Nhà xuất bản<span class="text-red">*</span></label>
                                                    <select class="form-control select2" id="nhaxuatban" name="nhaxuatban"  data-placeholder="Chọn nhà xuất bản..." style="width: 100%;" required>
                                                        <option value="">- Chọn -</option>
                                                        <?php
                                                        foreach ($book_nxb as $value) {
                                                            echo '<option value="' . $value->id . '">' . $value->tennhaxuatban . '</option>';
                                                        }
                                                        ?>
                                                    </select>
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
								<button type="submit" class="btn btn-primary" name="submit" value="book_edit">Cập nhật</button>
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
	var list_related_book = [<?= $book_detail['meta']->meta_list_related_book ?>];
	$(".btn_search").click(function() {
		var title_post = $("#title_post").val();
		var _url = "ajax/book/ajax.book_search.php";
		$.ajax({
			url: _url,
			data: "title_post=" + title_post + "&list_related_book=" + list_related_book + "&id=" + <?= $book_detail['id'] ?>,
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

	function addRelatedbook(id) {
		var parent = $("#book_search_" + id);
		var content = "";
		/** Check add an item for related_list */
		if (parent.parent().hasClass("search_result")) {
			list_related_book.push(id);
			parent.find("span").html("Xóa");
			parent.find("span").addClass("btn-danger");
			parent.find("span").removeClass("btn-success");
			content = '<tr id="book_search_' + id + '">' + parent.html() + '</tr>';
			$(".related_list").append(content);
		} else {
			/** Check add an item for search_result */
			list_related_book.remove(id);
			parent.find("span").html("Thêm");
			parent.find("span").addClass("btn-success");
			parent.find("span").removeClass("btn-danger");
			content = '<tr id="book_search_' + id + '">' + parent.html() + '</tr>';
			$(".search_result").append(content);
		}
		/** Remove item */
		parent.remove();
		/** Update array for input */
		$("#list_related_book").val(list_related_book);
	}

	/** Add tags */
	$("#btn_add_tags").click(function() {
		var tags = $("#tags_title").val();
		if (tags.trim() == '') return;
		var _url = "ajax/book/ajax.book_add_tags.php";
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
					$("#book_tags option[value='" + obj.id + "']").prop('selected', true);
				} else if (!obj.exist) {
					/** Tags is created */
					appendContent = '<option value="' + obj.id + '" selected>' + obj.title_vi + '</option>';
					$("#book_tags").append(appendContent);
				} else {
					console.log("Has error in progress update DB");
				}
				$("#book_tags").select2();
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

	var index_image = <?php echo count($images) ?>;

	function AddNewImage() {
		index_image++;
		var value_append = '<div class="form-group"><div class="col-md-2" style="padding-left:0px;"><input class="btn btn-info form-control" onclick="fcall.fcChoiceImg(this);" txthide="imagelist_' + index_image + '" type="button" value="Chọn file ảnh ' + index_image + '" name="imageadd[' + index_image + ']" id="imageadd_' + index_image + '" /></div><div class="col-md-10" style="padding-left:0px;"><input class="form-control" type="text" name="imagelist[' + index_image + ']" id="imagelist_' + index_image + '" txthide="imagelist_' + index_image + '" ondblclick="fcall.fcChoiceImg(this);" placeholder="Đường dẫn ảnh ' + index_image + ' cho sản phẩm" /></div></div>';
		$('#imagelist').append(value_append);
	}
</script>