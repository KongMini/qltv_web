<?php
global $database;
global $ariacms;
global $params;
global $taxonomies;
?>
<div class="wp-menu-product">
    <div class="wp-link-cate w-100 float-left">
        <div class="category-toolbar w-100 float-left">
            <ul>
            </ul>
        </div>
    </div>
    <div class="menu-category-product w-100 float-left">
        <div class="menu-category-product-list w-100">
            <ul class="ma-submenu-col w-100 float-left" style="margin-top: 25px;">

                <?php
                foreach ($taxonomies as $taxonomy) {
                    if ($taxonomy->taxonomy == 'product_category' && $taxonomy->parent == 0) {
                        if ($taxonomy->submenu == 0) {
                            ?>
                            <li class="ma-menu-box w-100 float-left">
                                <div class="wp-text-category-product">
                                    <span class="float-left ma-submenu-icon"><i class="fa fa-angle-down" aria-hidden="true"></i></span>
                                    <a class="ma-submenu-title float-left" href="javascript://"><?=$taxonomy->{$params->title}?></a>
                                </div>
                                <ul class="sub-category-product w-100 float-left">
                                    <li class="ma-menu-li w-100 float-left"><a class="ma-category-link w-100 float-left" href="<?= $ariacms->actual_link . 'san-pham/' . $taxonomy->url_part . '.html'; ?>"> Tất cả</a></li>
                                </ul>
                            <?php
                        } else {
                            ?>
                            <li class="ma-menu-box w-100 float-left">
                                <div class="wp-text-category-product">
                                    <span class="float-left ma-submenu-icon"><i class="fa fa-angle-down" aria-hidden="true"></i></span>
                                    <a class="ma-submenu-title float-left" href="javascript://"><?=$taxonomy->{$params->title}?></a>
                                </div>
                                <ul class="sub-category-product w-100 float-left">
                                    <li class="ma-menu-li w-100 float-left"><a class="ma-category-link w-100 float-left" href="<?= $ariacms->actual_link . 'san-pham/' . $taxonomy->url_part . '.html'; ?>"> Tất cả</a></li>
                                    <?php
                                    foreach ($taxonomies as $taxonomy_sub) {
                                        if ($taxonomy->id == $taxonomy_sub->parent) {
                                            ?>
                                            <li class="ma-menu-li w-100 float-left"><a class="ma-category-link w-100 float-left" href="<?= $ariacms->actual_link . 'san-pham/' . $taxonomy_sub->url_part . '.html'; ?>"> <?= $taxonomy_sub->{$params->title} ?></a></li>

                                            <?php
                                        }
                                    }
                                    ?>
                                </ul>
                            </li>
                            <?php
                        }
                    }
                }
                ?>

            </ul>
        </div>
    </div>
</div>
