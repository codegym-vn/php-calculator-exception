<?php
/**
 * Created by PhpStorm.
 * User: nhat
 * Date: 2019-05-21
 * Time: 11:17
 */

require_once './src/Calculator.php';

$calculator = new Calculator();

try{
    $result = $calculator->add(1, PHP_INT_MAX);
    echo $result;
} catch (Exception $e) {
    echo 'Error: '. $e->getMessage();
}


try{
    $result = $calculator->add(-1, PHP_INT_MIN);
    echo $result;
} catch (Exception $e) {
    echo 'Error: '. $e->getMessage();
}
