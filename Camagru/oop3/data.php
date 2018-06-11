<?php

require_once 'classes.php';

$publications = array();

$publications[] = new NewsPublication;
$publications[] = new NewsPublication;
$publications[] = new NewsPublication;

echo '<pre>';
print_r($publications);
