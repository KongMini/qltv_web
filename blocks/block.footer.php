<?php
global $database;
global $ariacms;
global $params;
global $web_menus;
global $type_menus;
global $taxonomies;
$i = 0;
$home_taxonomies = array();
foreach ($taxonomies as $taxonomy) {
	if ($taxonomy->taxonomy == 'group' && $taxonomy->position == 'footer' && $taxonomy->status == 'active' && $taxonomy->count > 0) {
		$home_taxonomies[$i] = $taxonomy;
		$i++;
	}
}
$query = "SELECT a.*, GROUP_CONCAT(b.term_taxonomy_id) AS groups
							FROM e4_posts a
								JOIN e4_term_relationships b ON b.term_taxonomy_id = " .  $home_taxonomies[0]->id . " AND a.id = b.object_id
							WHERE a.post_type = 'post' AND a.post_status = 'active'
							GROUP BY a.id
							ORDER by a.id desc
							LIMIT 0,2
							";
$database->setQuery($query);
$posts = $database->loadObjectList();
?>
<div class="container-fluid wp-ft">
    <!--Begin footer-->
    <div id="footerview">

        <div class="row border-br"></div>
        <div class="row" id="footer">

            <?php
            //print_r($web_menus);die;
            if ($type_menus->footer->status == 'active') {
                foreach ($web_menus as $key  =>  $web_menu_1) {
                    if ($web_menu_1->parent == $type_menus->footer->id) {
                        unset($web_menus[$key]);
                        ?>
                        <div class="col-md-3 col-xs-12 item" id="footer-col-<?= $key + 1?>">
                            <ul>
                                <li class="heading-ft">
                                    <i class="arrow up">
                                    </i><i class="arrow down"></i>
                                    <a href="javascript://"><?=$web_menu_1-> title_vi ?></a>
                                </li>
                        <?php
                        foreach ($web_menus as $key2 => $web_menu_2){
                            if ($web_menu_2->parent == $web_menu_1->id) {
                                unset($web_menus[$key2]);
                                $url_link = $ariacms->urlStandardizedMenu($web_menu_2->url_html); ?>
                                <li class="child-ft">
                                    <a href="<?=$web_menu_2->url_html ?>" alt="<?=$web_menu_2-> title_vi ?>"><?=$web_menu_2-> title_vi ?></a>
                                </li>
                                <?php
                            }
                        }?>
                            </ul>
                        </div>
                        <?php }
                }
            }
            ?>


            <div class="col-md-3 col-xs-12 item" id="footer-col-4">
                <ul>
                    <li class="heading-ft">
                        <i class="arrow up">
                        </i><i class="arrow down"></i>
                        <a href="javascript://">FOLLOW D.CHIC</a>
                    </li>
                    <li class="child-ft">
                        <a href="<?= $ariacms->web_information->facebook ?>" alt="Facebook">Facebook</a>
                    </li>
                    <li class="child-ft">
                        <a href="<?= $ariacms->web_information->youtube?>" alt="Youtube">Youtube</a>
                    </li>
                    <li class="child-ft">
                        <a href="<?= $ariacms->web_information->twitter?>" alt="Instagram">Instagram</a>
                    </li>


                </ul>
            </div>
            <div class="col-md-3 col-xs-12 item noti-government">
                <ul>
                    <li>
                        <a href="" target="_blank" class="icon-bct">
                            <img alt="Đã thông báo Bộ Công Thương" title="Đã thông báo Bộ Công Thương" src="upload/images/dathongbao-bocongthuong.png" style="width: 100%; float: left; opacity: 0.5; max-width: 85px!important;">
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="row border-br"></div>
        <!--Fangepage D.CHIC Live shopping-->
        <!-- Messenger Chat plugin Code -->
        <!-- Your Chat plugin code -->
        <!--Fanpage D.CHIC-->
        <!-- Load Facebook SDK for JavaScript -->
        <div id="fb-root"></div>
        <script>
            window.fbAsyncInit = function () {
                FB.init({
                    xfbml: true,
                    version: 'v8.0'
                });
            };
            (function (d, s, id) {
                var js, fjs = d.getElementsByTagName(s)[0];
                if (d.getElementById(id)) return;
                js = d.createElement(s); js.id = id;
                js.src = '../connect.facebook.net/en_US/sdk/xfbml.customerchat.js';
                fjs.parentNode.insertBefore(js, fjs);
            }(document, 'script', 'facebook-jssdk'));
        </script>

        <!-- Your Chat Plugin code -->
        <div class="fb-customerchat"
             attribution=setup_tool
             page_id="1609554822652187">
        </div>

        <!-- Dat phia duoi the <body> -->


        <script>

            /*ft mobile*/
            jQuery(document).ready(function () {
                var toggle = false;
                $(".heading-ft").click(function () {
                    if (window.innerWidth <= 768) {
                        if (!toggle) {
                            $(this).find(".up").css("display", "block");
                            $(this).find(".down").css("display", "none");
                            //$(this).css("margin-bottom", 15);
                            $(this).parent().find(".child-ft").slideToggle("fast");
                            toggle = true;
                        } else {
                            $(this).find(".up").css("display", "none");
                            $(this).find(".down").css("display", "block");
                            $(this).css("margin-bottom", 0);
                            $(this).parent().find(".child-ft").slideToggle("fast");
                            toggle = false;
                        }
                    }
                });
            });
        </script>
    </div>
    <!--End footer-->
</div>
<div class="container-fluid">
    <!-- Copyright -->
    <div class="row">
        <div class="col-md-12 col-xs-12">
            <div class="footer-copyright">
                ® 2019. <?= $ariacms->web_information->{$params->name}?>. Điện thoại: <?= $ariacms->web_information->phone ?> . Địa chỉ: <?= $ariacms->web_information->{$params->address}?>. Do Sở Kế hoạch &amp; Đầu tư TP Hà Nội cấp lần đầu ngày 24 tháng 6 năm 2014.
            </div>
        </div>
    </div>
    <!-- Copyright -->
</div>