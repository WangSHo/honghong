<?php
if (isset($_GET['submit'])){
	$num1=$_GET['num1'];
	$op=$_GET['op'];
	$num2=$_GET['num2'];
	$total=0;
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

	}

?>
<form name="myform" action="" method="get">
  <table>
    <tr>
      <td>数一</td>
      <td><input name="num1" value="<?php if (isset($_GET['submit'])){echo $_GET['num1'];}?>" onblur="num1Blur()"></td>
    </tr>
    <tr>
      <td>运算符</td>
      <td>
        <select name="op">
          <option value="0">--请选择运算符--</option>
          <option value="@" <?php if(isset($_GET['submit'])){echo $_GET['op']=="@"?"selected":"";}?>>+</option>
          <option value="-" <?php if(isset($_GET['submit'])){echo $_GET['op']=="-"?"selected":"";}?>>-</option>
          <option value="*" <?php if(isset($_GET['submit'])){echo $_GET['op']=="*"?"selected":"";}?>>*</option>
          <option value="/" <?php if(isset($_GET['submit'])){echo $_GET['op']=="/"?"selected":"";}?>>/</option>
        </select>
        </td>
    </tr>
    <tr>
      <td>数二</td>
      <td><input name="num2" value="<?php if (isset($_GET['submit'])){echo $_GET['num2'];}?>"></td>
    </tr>
    <tr>
      <td colspan="2" align="center"><input type="submit" name="submit" value="=="></td>
    </tr>
    <tr>
      <td>结果：</td>
      <td><input name="total" value="<?php if (isset($_GET['submit'])){echo $total;}?>"></td>
    </tr>
  </table>
</form>

