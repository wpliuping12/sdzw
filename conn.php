<?php
header('Content-Type: text/html; charset=utf-8');


$dbhost = "localhost"; //数据库地址 
$dbuser = "root"; //MySql数据库用户名 
$dbpass = "root"; //MySql数据库密码 
$dbname = "ytyz"; //MySql数据库名称
$dbcharset = "utf8"; //数据库读写所采用的编码,utf8或gb2312

if(empty($dbname)){
	die ('数据库参数错误');
}

require_once 'db_function.php';	//数据库操作类
require_once 'function.php';   //引用函数
//require_once 're_dim_image.php';   //生成缩略图类,调用方法 $resizeimage = new resizeimage("图片源文件地址", "生成宽度", "生成高度", "0","生成文件地址");
//require_once 'template_function.php';      //引用模板管理类



/*------------------------------------------------
 * 数据库连接
 *-----------------------------------------------*/
$db = new db_mysql();
$db->connect($dbhost,$dbuser,$dbpass,$dbname,$dbcharset);
//mysql_query("set names utf8") 

/*防止 PHP 5.1.x 使用时间函数报错*/
if(function_exists('date_default_timezone_set')) date_default_timezone_set('PRC');
?>
