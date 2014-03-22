<?php

//MySQL date time format
	function get_time(){
	$currenttime = time();
	$mysql_date_time = strftime("%Y-%m-%d", $currenttime);
	$time = $mysql_date_time;
	return $time;
	}

//Elastica function to autoload Elastica
	function autoload_elastica()
	{
	require_once('../chiremba/application/elastica/vendor/autoload.php');
	}
?>