<?php
?>
<script>
   function num1Blur(){ 
   if(!isNaN(document.myform.num1.value)&& !isNaN(document.myform.num2.value)){
         }
   else{
     alert("����������");
	   }
	  } 
  
</script>
<form name="myform" action="0116post2.php" method="post">
  <table>
    <tr>
      <td>��һ</td>
      <td><input name="num1" value="<?php if (isset($_GET['a'])){echo $_GET['a'];}?>" onblur="num1Blur()"></td>
    </tr>
    <tr>
      <td>�����</td>
      <td>
        <select name="op">
          <option value="0">--��ѡ�������--</option>
          <option value="@" <?php if(isset($_GET['op'])){echo $_GET['op']=="@"?"selected":"";}?>>+</option>
          <option value="-" <?php if(isset($_GET['op'])){echo $_GET['op']=="-"?"selected":"";}?>>-</option>
          <option value="*" <?php if(isset($_GET['op'])){echo $_GET['op']=="*"?"selected":"";}?>>*</option>
          <option value="/" <?php if(isset($_GET['op'])){echo $_GET['op']=="/"?"selected":"";}?>>/</option>
        </select>
        </td>
    </tr>
    <tr>
      <td>����</td>
      <td><input name="num2" value="<?php if (isset($_GET['b'])){echo $_GET['b'];}?>"  onblur="num1Blur()"></td>
    </tr>
    <tr>
      <td colspan="2" align="center"><input type="submit"  value="=="></td>
    </tr>
    <tr>
      <td>�����</td>
      <td><input name="total" value="<?php if (isset($_GET['c'])){echo $_GET['c'];}?>"></td>
    </tr>
  </table>
</form>