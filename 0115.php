<title>基本语法</title>
<?php
//自由转换类型
/* $a="132bdhssb";
$b="122";
echo $a+$b; */

//变量
//强制转换类型
$a="123.22352sbdvlf";
$b=(bool)$a;
$c=(float)$a;
$d=(array)$a;
$str=floatval($a);
settype($a, "bool");   //用settype()来设置变量的类型；


var_dump($b);
echo "<br />";
var_dump($c);
echo "<br />";
var_dump($d);
echo "<br />";
var_dump($str);
echo "<br />";
var_dump($a);
echo "<br />";

//可变变量
$h="hello";
$$h="word";
echo $h.$$h;
echo "<br />";

//预定义变量
echo ($_SERVER['REMOTE_ADDR']);
echo "<br />";
echo ($_SERVER['REMOTE_PORT']);
echo "<br />";

//全局变量   global
$a=123;
function a(){
 global $a;
 echo $a;
}
a();

//静态变量
/* function a(){
	static $i=0;   // 静态变量
	$i+=1;
	echo $i;
}
for($i=0; $i<10;$i++){
	a();

} */
echo "<hr />";
?>

<form action="0115test.php" method="get">   <!--method="post"   get:不安全    post:安全  -->
 <input type="text" name="txt1">
 <input type="password" name="txt2">
 <input type="submit" value="提交" name="btn_ok">
</form>

<?php 
echo "<hr />";
//常量
define("ABC", 100);
echo ABC;
echo "<br />";
//define($name, $value,boool)  bool为true时不区分大小写

//系统中的预定义常量
echo PHP_OS;
echo "<br />";
echo PHP_VERSION;
echo "<br />";
echo TRUE;
echo "<br />";
echo "<br />";


//PHP中的魔术常量 
echo __FILE__;  //当前文件名
echo "<br />";
echo __LINE__;   //当前行数 
echo "<br />";
?>














