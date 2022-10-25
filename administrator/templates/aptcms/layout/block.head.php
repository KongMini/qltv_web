<?php
global $ariacms;
?>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>SYSTEM - ADMINISTRATOR</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.5 -->
    <link rel="stylesheet" href="templates/aptcms/bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="templates/aptcms/font-awesome-4.4.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="templates/aptcms/font-awesome-4.4.0/css/font-awesome.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="templates/aptcms/ionicons/css/ionicons.min.css">
    <!-- Select2 -->
    <link rel="stylesheet" href="templates/aptcms/plugins/select2/select2.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="templates/aptcms/dist/css/AdminXKT.min.css">
    <!-- AdminXKT Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="templates/aptcms/dist/css/skins/_all-skins.min.css">
    <!-- iCheck -->
    <link rel="stylesheet" href="templates/aptcms/plugins/iCheck/flat/blue.css">
    <!-- Date Picker -->
    <link rel="stylesheet" href="templates/aptcms/plugins/datepicker/datepicker3.css">
    <!-- Bootstrap time Picker -->
    <link rel="stylesheet" href="templates/aptcms/plugins/timepicker/bootstrap-timepicker.min.css">
    <!-- DataTables -->
    <link rel="stylesheet" href="templates/aptcms/plugins/datatables/dataTables.bootstrap.css">
    <script>
        filemanageUrl = '<?php echo $ariacms->actual_link ?>plugins/FileManager';
    </script>
    <!-- jQuery 2.1.4 -->
    <script src="templates/aptcms/plugins/jQuery/jQuery-2.1.4.min.js"></script>

    <!-- Bootstrap 3.3.5 -->
    <script src="templates/aptcms/bootstrap/js/bootstrap.min.js"></script>
    <script src="templates/aptcms/js/fcall.js"></script>
    <script src="<?=$ariacms->actual_link ?>plugins/editor/ckeditor5/build/ckeditor.js"></script>
    <script src="<?=$ariacms->actual_link ?>plugins/editor/ckfinder/ckfinder.js"></script>
    <script>
        // $(document).ready(function(){
        //     $('#images1').change(function(){
        //         if($(this)[0].files.length > 0){
        //             document.getElementById('remove').value  ="";
        //             $("#frames").html('');
        //             for (var i = 0; i < $(this)[0].files.length; i++) {
        //                 $("#frames").append('<div class="col-md-3" id="'+i+'" ><i class="fa fa-remove" onclick="delete_img('+i+')"  style="cursor:pointer;position: absolute;font-size: 20px;font-size: 20px;margin-top: 2px;margin-left: 4px;display:block;background-color: white;border-radius: 100%;padding: 3px 6px;"></i><img style="margin: 5px"  src="'+window.URL.createObjectURL(this.files[i])+'" width="100%"/></div>');
        //             }
        //         }
        //     });
        // });
        function delete_img(id){
            if(confirm("Bạn có muốn xóa ảnh này")){
                $("#"+id).remove();
                document.getElementById('remove').value  += ","+id;
            }
        }
        var index = 0;
        function openPopupMultiImg(id) {
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
                                    '<div class="col-md-6" style="padding-left:0px;">' +
                                    '<input class="form-control" type="text" name="imagelist['+ index +']" id="imagelist_'+ index +'" txthide="imagelist_'+ index +'" ondblclick="fcall.fcChoiceImg(this);" placeholder="Đường dẫn ảnh '+ index +' cho sản phẩm" value="'+ file.getUrl() +'" />' +
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


        function openPopupImg(id) {
            CKFinder.popup( {
                chooseFiles: true,
                onInit: function( finder ) {
                    finder.on( 'files:choose', function( evt ) {
                        var file = evt.data.files.first();
                        console.log(evt.data.files);
                        document.getElementById( id ).value = file.getUrl();
                        document.getElementById( "new" + id ).src = file.getUrl();
                    } );
                    finder.on( 'file:choose:resizedImage', function( evt ) {
                        document.getElementById( id ).value = evt.data.resizedUrl;
                    } );
                }
            } );
        }

        function openPopupImg2(id) {
            CKFinder.popup( {
                chooseFiles: true,
                onInit: function( finder ) {
                    finder.on( 'files:choose', function( evt ) {
                        var file = evt.data.files.first();
                        console.log(evt.data.files);

                        document.getElementById( "imagelist_" + id ).value = file.getUrl();
                        document.getElementById( "srcImage_" + id ).src = file.getUrl();


                    } );
                    finder.on( 'file:choose:resizedImage', function( evt ) {
                        document.getElementById( id ).value = evt.data.resizedUrl;
                    } );
                }
            } );
        }

    </script>
<!--    <script type="text/javascript" src="../plugins/editor/ckeditor/ckeditor.js"></script>-->
</head>