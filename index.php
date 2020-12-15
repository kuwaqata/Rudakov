<?php

use rudakov\MyLog;
use rudakov\RudakovException;
use rudakov\Kvadratnoe;

include "core/EquationInterface.php";
include "core/LogAbstract.php";
include "core/LogInterface.php";
include "rudakov/MyLog.php";
include "rudakov/Lineynoe.php";
include "rudakov/Kvadratnoe.php";
include "rudakov/RudakovException.php";

ini_set("display_errors", 1);
error_reporting(-1);

try {
    $b = new Kvadratnoe();
    $values = array();

    for ($i = 1; $i < 4; $i++) {
        echo "Введите " . $i . " аргумент: ";
        $values[] = readline();
    }
    $va = $values[0];
    $vb = $values[1];
    $vc = $values[2];

    MyLog::log("Введено уравнение " . $va . "x^2 + " . $vb . "x + " . $vc . " = 0");
    $x = $b->solve($va, $vb, $vc);

    $str = implode(", ", $x);
    MyLog::log("Корни уравнения: " . $str);
} catch (RudakovException $e) {
    MyLog::log($e->getMessage());
}

MyLog::write();

?>