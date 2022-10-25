<?php
class Model
{
	static function viewhome()
	{
		unset($_SESSION['filter']);
		global $database;
		$query = "SELECT a.* from e4_web_home a where a.parent = 0 order by a.order ";
		$database->setQuery($query);
		$home_configs = $database->loadObjectList();

		$query = "SELECT a.* from e4_web_home a where a.parent > 0 order by a.order ";
		$database->setQuery($query);
		$home_config_details = $database->loadObjectList();

		View::viewhome($home_configs, $home_config_details);
	}
}
