<?php
    $array = ['name' => 'Victorr', 'surname' => 'Zinchenko', 'city' => 'Zhytomr'];

    $result = serialize($array);

    setcookie('arr', $result);
    // var_dump($result);