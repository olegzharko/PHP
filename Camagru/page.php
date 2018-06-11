<?php

	$str = $_COOKIE['arr'];

	$array = unserialize($str);
	print_r($array);