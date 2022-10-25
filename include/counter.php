<?php
class Counter
{
	var $timeoutSeconds;
	var $ip;
	var	$user_id;
	var $referer_url;

	public function __construct()
	{
		global $ariacms;
		$this->timeoutSeconds = $ariacms->web_information->timeout_session * 60;
		$this->ip = $_SERVER['REMOTE_ADDR'];
		$this->user_id = $_SESSION["user_public"]['id'];
		$this->referer_url = $_SERVER['HTTP_REFERER'];
		$this->refresh();
	}

	function getCounterOnline()
	{
		global $database;
		$timeout = time() - $this->timeoutSeconds;
		/** Get user online */
		$sql = "SELECT DISTINCT ip FROM e4_counter_visited WHERE timestamp >= $timeout";
		$database->setQuery($sql);
		$result = $database->loadObjectList();
		return count($result);
	}

	function getSearchEngine()
	{
		global $database;
		$searchE = 'google.';
		$timeout = time() - $this->timeoutSeconds;
		/** Get user online */
		$sql = "SELECT DISTINCT ip FROM e4_counter_visited WHERE timestamp >= $timeout AND referer_url LIKE '%$searchE%' ";
		$database->setQuery($sql);
		$result = $database->loadObjectList();
		return count($result);
	}

	function getCounterInTime($timeout)
	{
		global $database;
		$sql = "SELECT * FROM e4_counter_visited WHERE timestamp >= $timeout ";
		$database->setQuery($sql);
		$result = $database->loadObjectList();
		return count($result);
	}

	function refresh()
	{
		global $database;
		global $ariacms;
		$currentTime = time();
		$timeout = $currentTime - $this->timeoutSeconds;
		/** Check to insert new row if timeout */
		$sql = "SELECT * FROM e4_counter_visited WHERE `ip`='$this->ip' AND timestamp >= $timeout ";
		$database->setQuery($sql);
		$check = $database->loadObjectList();
		if (count($check) < 1) {
			$sql = "INSERT INTO e4_counter_visited (`timestamp`,`ip`,`url`,`user_id`, referer_url) VALUES ('$currentTime','$this->ip','$ariacms->c_url', '$this->user_id', '$this->referer_url')";
			$database->setQuery($sql);
			$database->query();
		}
	}
}
