<?php
/**
 * Created by PhpStorm.
 * User: zhangxingyu
 * Date: 2018/11/13
 * Time: 8:13 PM
 */
//用来连接数据库
$server="localhost";
$db_username="homework";
$db_password="wyjzxy8125";

$con = mysql_connect($server,$db_username,$db_password);
if(!$con){
    die("can't connect".mysql_error());
}

mysql_select_db('homework',$con);

?>
