<title>�����﷨</title>
<?php
//����ת������
/* $a="132bdhssb";
$b="122";
echo $a+$b; */

//����
//ǿ��ת������
$a="123.22352sbdvlf";
$b=(bool)$a;
$c=(float)$a;
$d=(array)$a;
$str=floatval($a);
settype($a, "bool");   //��settype()�����ñ��������ͣ�


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

//�ɱ����
$h="hello";
$$h="word";
echo $h.$$h;
echo "<br />";

//Ԥ�������
echo ($_SERVER['REMOTE_ADDR']);
echo "<br />";
echo ($_SERVER['REMOTE_PORT']);
echo "<br />";

//ȫ�ֱ���   global
$a=123;
function a(){
 global $a;
 echo $a;
}
a();

//��̬����
/* function a(){
	static $i=0;   // ��̬����
	$i+=1;
	echo $i;
}
for($i=0; $i<10;$i++){
	a();

} */
echo "<hr />";
?>

<form action="0115test.php" method="get">   <!--method="post"   get:����ȫ    post:��ȫ  -->
 <input type="text" name="txt1">
 <input type="password" name="txt2">
 <input type="submit" value="�ύ" name="btn_ok">
</form>

<?php 
echo "<hr />";
//����
define("ABC", 100);
echo ABC;
echo "<br />";
//define($name, $value,boool)  boolΪtrueʱ�����ִ�Сд

//ϵͳ�е�Ԥ���峣��
echo PHP_OS;
echo "<br />";
echo PHP_VERSION;
echo "<br />";
echo TRUE;
echo "<br />";
echo "<br />";


//PHP�е�ħ������ 
echo __FILE__;  //��ǰ�ļ���
echo "<br />";
echo __LINE__;   //��ǰ���� 
echo "<br />";
?>














