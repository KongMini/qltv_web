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


/** Get data */
$id_book = $_REQUEST['id_book'];
$id= $_REQUEST['id'];

/** Query book selected*/
$query = "SELECT * FROM `e4_book` WHERE id =" .$id_book;
$database->setQuery($query);
$book = $database->loadRow();

/** Query all book*/
$query = "SELECT * FROM `e4_book`   ORDER BY id DESC";
$database->setQuery($query);
$books = $database->loadObjectList();

?>

    <td><?= $id + 1?></td>
     <td class="text-center">
         <select id="idsach<?= $id?>" name="id_sach[<?=$id?>][id_sach]" class="form-control select2" onchange="chooseBook(0)" required>
             <option value="">-Chọn sách-</option>
             <?php foreach ($books as $value){?>
                 <option <?php if($value -> id == $id_book) echo 'selected'?>  value="<?= $value -> id?>"><?= $value -> masach .'-'. $value -> tensach?></option>
             <?php }?>
         </select>
    </td>
    <td>
            <img src="<?= $book['image'] ?>" style="height:100px" />
    </td>
    <td>
        <?= $book['giasach'] ?>
    </td>
    <td>
       Mược sách
    </td>
    <td> <?= $book['soluong'] ?> </td>
    <td>
       <a onclick="delete_img(<?= $id?>)"><i class="fa fa-trash text-red" data-toggle="tooltip" title="Xóa" data-original-title="Xóa"></i></a>
    </td>