<?php

require_once 'data.php';

foreach ($publications as $item) {
	echo '<pre>';
	echo 'В переменной $item находится объект класса '.get_class($item);
	print_r($item->printItem());
	echo '</pre>';
}