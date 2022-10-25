<?php
class VIew
{
	static function profileManagerFront()
	{
?>
		<section class="content-header">
			<h1>Quản lý Tài khoản cá nhân</h1>
		</section>
<?php
	}
	static function profile_view($profile)
	{
		include("admin.html.profile_view.php");
	}
}
?>