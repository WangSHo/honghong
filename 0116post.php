<?php
?>
<script>
   function num1Blur(){ 
   if(!isNaN(document.myform.num1.value)&& !isNaN(document.myform.num2.value)){
         }
   else{
     alert("必须是数字");
	   }
	  } 
  
</script>
<form name="myform" action="0116post2.php" method="post">
  <table>
    <tr>
      <td>数一</td>
      <td><input name="num1" value="<?php if (isset($_GET['a'])){echo $_GET['a'];}?>" onblur="num1Blur()"></td>
    </tr>
    <tr>
      <td>运算符</td>
      <td>
        <select name="op">'这是我的演示代码'
          <option value="0">--请选择运算符--</option>
          <option value="@" <?php if(isset($_GET['op'])){echo $_GET['op']=="@"?"selected":"";}?>>+</option>
          <option value="-" <?php if(isset($_GET['op'])){echo $_GET['op']=="-"?"selected":"";}?>>-</option>
          <option value="*" <?php if(isset($_GET['op'])){echo $_GET['op']=="*"?"selected":"";}?>>*</option>
          <option value="/" <?php if(isset($_GET['op'])){echo $_GET['op']=="/"?"selected":"";}?>>/</option>
        </select>
        </td>
    </tr>
    <tr>
      <td>数二</td>
      <td><input name="num2" value="<?php if (isset($_GET['b'])){echo $_GET['b'];}?>"  onblur="num1Blur()"></td>
    </tr>
    <tr>
      <td colspan="2" align="center"><input type="submit"  value="=="></td>
    </tr>
    <tr>
      <td>结果：</td>
      <td><input name="total" value="<?php if (isset($_GET['c'])){echo $_GET['c'];}?>"></td>
    </tr>
  </table>
</form>