<?php
echo "<pre>";
print_r($_POST);
echo "</pre>";
$num1=$_POST['num1'];
$op=$_POST['op'];
$num2=$_POST['num2'];
$total=0;
//switch语句
/* switch ($op){
 case "+":$total=$num1+$num2; break;
case "-":$total=$num1-$num2; break;
case "*":$total=$nsum1*$num2; break;
case "/":if ($num2!==0){$total=$num1/$num2;} break;
} */
if($op=="@"){
	$total=$num1+$num2;
}
else if($op=="-"){
	$total=$num1-$num2;
}
else if($op=="*"){
	$total=$num1*$num2;
}
else if($op=="/"){
	if($num2=="0"){
		echo "分母不能为零";
	}
	else {
		$total=$num1/$num2;
	}
}
echo $total;
//重定向
header("location:0116post.php?a={$num1}&b={$num2}&c={$total}&op={$op}");