<?php
/**
 * Created by PhpStorm.
 * User: nhat
 * Date: 2019-05-21
 * Time: 11:16
 */

class Calculator
{
    public function add($first, $second) {
        if($first/2 + $second/2 >= PHP_INT_MAX/2)
            throw new Exception('Value out of range');
        if($first/2 + $second/2 <= PHP_INT_MIN/2)
            throw new Exception('Value out of range');
        return $first + $second;
    }
}