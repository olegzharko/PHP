<?php
/**
 * Created by PhpStorm.
 * User: ozharko
 * Date: 6/14/18
 * Time: 3:10 PM
 */

class Db
{

	public static function getConnection()
	{
		$paramsPath = ROOT . '/config/db_params.php';
		$params = include($paramsPath);

		$dsn = "mysql:host={$params['host']};dbname={$params['dbname']}";
		$db = new PDO($dsn, $params['user'], $params['password']);

		return $db;
	}
}