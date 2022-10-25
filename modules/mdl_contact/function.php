
<?php
class Model
{
  static function viewhome()
  {
    unset($_SESSION['filter']);
    global $database;
    global $ariacms;
    switch ($_POST['btnSubmit']) {
      case 'contact':
        $name     = $_POST['txtName'];
        $phone    = $_POST['txtPhone'];
        $address  = $_POST['txtAddress'];
        $email    = $_POST['txtEmail'];
        $content  = $_POST['txtContent'];
        $row = new stdClass;
        $row->id = null;
        $row->name = $name;
        $row->phone = $phone;
        $row->email = $email;
        $row->address = $address;
        $row->content = $content;
        $row->date_created  = time();
        if ($database->insertObject("e4_contacts", $row, "id")) {
          $to_name = $ariacms->web_information->name_vi;
          $to_email = $ariacms->web_information->admin_email;
          $subject = "Bạn nhận được liên hệ của khách hàng từ hệ thống";
          $content_mail = "Thông tin chi tiết: <br />";
          $content_mail .= "Tên : " . $name . "<br />";
          $content_mail .= "Điện thoại: " . $phone . "<br />";
          $content_mail .= "Địa chỉ: " . $address . "<br />";
          $content_mail .= "Email: " . $email . "<br />";
          $content_mail .= "Nội dung: " . $content . "<br />";
          $ariacms->sendMail($to_email, $to_name, $subject, $content_mail);
          $ariacms->redirect("Gửi liên hệ thành công. Chúng tôi sẽ liên hệ lại cho quý khách sớm nhất.", $ariacms->web_information->actual_link . "trang-chu.html");
        } else {
          echo $database->stderr();
        }
        break;
      case 'newsletter':
        $query = "SELECT a.* FROM e4_contacts a  WHERE a.email = '" . $_POST['txtEmail'] . "' AND a.type = 'newsletter'";
        $database->setQuery($query);
        $check = $database->loadRow();
        if ($check) {
          $ariacms->redirect("Email bạn vừa nhập đã được đăng ký!", "javascript:history.back();");
          break;
        }
        $row = new stdClass;
        $row->id = null;
        $row->email = $_POST['txtEmail'];
        $row->type = 'newsletter';
        $row->date_created = time();
        if ($database->insertObject("e4_contacts", $row, "id")) {
          $ariacms->redirect("Đăng ký thành công", "javascript:history.back();");
        } else {
          echo $database->stderr();
        }
        break;

      case 'contact-event':
        $name     = $_POST['txtName'];
        $phone    = $_POST['txtPhone'];
        $department  = $_POST['department'];
        $email    = $_POST['txtEmail'];
        $content  = $_POST['txtContent'];
        $row = new stdClass;
        $row->id = null;
        $row->name = $name;
        $row->phone = $phone;
        $row->email = $email;
        $row->department = $department;
        $row->content = $content . "<br/>Đăng ký tư vấn: <b>" . $department . "</b>";
        $row->date_created  = time();
        $row->type = 'contact-event';
        if ($database->insertObject("e4_contacts", $row, "id")) {
          $to_name = $ariacms->web_information->name_vi;
          $to_email = $ariacms->web_information->admin_email;
          $subject = "Bạn nhận được đăng ký tư vấn của khách hàng từ hệ thống";
          $content_mail = "Thông tin chi tiết: <br />";
          $content_mail .= "Tên : " . $name . "<br />";
          $content_mail .= "Điện thoại: " . $phone . "<br />";
          $content_mail .= "Đăng ký tư vấn về : <b>" . $department . "</b><br />";
          $content_mail .= "Email: " . $email . "<br />";
          $content_mail .= "Nội dung: " . $content . "<br />";
          $ariacms->sendMail($to_email, $to_name, $subject, $content_mail);
          $ariacms->redirect("Gửi đăng ký thành công. Chúng tôi sẽ liên hệ lại cho quý khách sớm nhất.", $ariacms->web_information->actual_link . "trang-chu.html");
        } else {
          echo $database->stderr();
        }
        break;

      default:
        View::viewhome();
        break;
    }
  }
}


?>