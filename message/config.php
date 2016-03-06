<?php
/**
 * Created by PhpStorm.
 * User: lenovo
 * Date: 2015/11/16
 * Time: 23:20
 */

$coon = @mysql_connect('localhost','root','') or die("Connect Database erro!");
mysql_select_db('test',$coon);
?>
