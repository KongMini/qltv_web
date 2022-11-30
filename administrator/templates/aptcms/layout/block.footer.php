<!-- Select2 -->
<script src="templates/aptcms/plugins/select2/select2.full.min.js"></script>
<!-- datepicker -->
<script src="templates/aptcms/plugins/datepicker/bootstrap-datepicker.js"></script>
<!-- bootstrap time picker -->
<script src="templates/aptcms/plugins/timepicker/bootstrap-timepicker.min.js"></script>
<!-- Slimscroll -->
<script src="templates/aptcms/plugins/slimScroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="templates/aptcms/plugins/fastclick/fastclick.min.js"></script>
<script src="templates/aptcms/plugins/chartjs/Chart1.js"></script>
<!-- AdminLTE App -->
<script src="templates/aptcms/dist/js/app.min.js"></script>
<script src="templates/aptcms/js/custom.js"></script>
<script language="javascript" type="text/javascript">
	function update_value_by_id(t, c, i, v) {
		var _url = "ajax/ajax.update_value_by_id.php";
		var f = "t=" + t + "&c=" + c + "&i=" + i + "&v=" + v;
		$.ajax({
			url: _url,
			data: f,
			cache: false,
			context: document.body,
			success: function(data) {
				window.location.reload(true);
			}
		});
	}

	function showCNTT(id, ajax_file) {
		var _url = ajax_file;
		$.ajax({
			url: _url,
			data: "id=" + id,
			cache: false,
			context: document.body,
			success: function(data) {
				$("#showCNTT").html(data);
			}
		});
	}

	function check_value_exist(value, input, t, c, id_result, error, id_btn) {
		var input = $(input).val();
		var _url = "ajax/ajax.check_value_exist.php";
		$.ajax({
			url: _url,
			data: "input=" + input + "&t=" + t + "&c=" + c + "&error=" + error + "&value=" + value,
			cache: false,
			context: document.body,
			success: function(data) {
				$(id_result).html(data);
			}
		});
	}

	function confirmAction() {
		return confirm("Bạn chắc chắn muốn thực hiện thao tác?");
	}

	function checked_by_list(list, element) {
		var Array = list.split(",");
		$(element).each(function() {
			for (i = 0; i < Array.length; i++) {
				if ($(this).val() == Array[i]) {
					$(this).attr('checked', 'checked');
				}
			}
		});
	}

	function set_list_to_element(condition, element) {
		var List = "";
		$(condition).each(function() {
			List = List + $(this).val() + ',';
		});

		List = List.substr(0, List.length - 1);
		$(element).val(List);
	}

	function set_sidebar_config() {
		var cname = 'sidebar_config';
		var cvalue = 'sidebar-collapse';
		var sidebar_config = getCookie(cname);
		var exdays = 30;
		if (sidebar_config === cvalue) exdays = -30;
		setCookie(cname, cvalue, exdays);
	}

	function setCookie(cname, cvalue, exdays) {
		var d = new Date();
		d.setTime(d.getTime() + (exdays * 24 * 60 * 60 * 1000));
		var expires = "expires=" + d.toUTCString();
		document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
	}

	function getCookie(cname) {
		var name = cname + "=";
		var decodedCookie = decodeURIComponent(document.cookie);
		var ca = decodedCookie.split(';');
		for (var i = 0; i < ca.length; i++) {
			var c = ca[i];
			while (c.charAt(0) == ' ') {
				c = c.substring(1);
			}
			if (c.indexOf(name) == 0) {
				return c.substring(name.length, c.length);
			}
		}
		return "";
	}
	/** Delay function after action */
	var delay = (function() {
		var timer = 0;
		return function(callback, ms) {
			clearTimeout(timer);
			timer = setTimeout(callback, ms);
		};
	})();
	/** Add remove function to array */
	Array.prototype.remove = function(v) {
		this.splice(this.indexOf(v) == -1 ? this.length : this.indexOf(v), 1);
	}
</script>


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
        .create( document.querySelector( '.ckeditor' ), {

            toolbar: {
                items: [

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