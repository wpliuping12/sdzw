<?php 
require_once('../conn.php'); 
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3c.org/TR/1999/REC-html401-19991224/loose.dtd">
<HTML xmlns="http://www.w3.org/1999/xhtml">
<HEAD>
<TITLE>网站管理中心</TITLE>
<META content="text/html; charset=utf-8" http-equiv=Content-Type>

<style>
	form {
		margin: 0;
	}
	textarea {
		display: block;
	}
</style>
<script language="javascript">  
function checkreg() 
{ 
	if(document.myform.isshow.checked)
		document.myform.isS.value=1;
	else
		document.myform.isS.value=0;
	return true; 
}  
</script>
</HEAD>
<body>
<?php
$id = getvar('id');
$list = $db->getOneRow(get_sql("select * from teacherlist where initcode = " . $id));
?>
<table width="98%" height="101" border="0" cellpadding="3" cellspacing="1" bgcolor="#CCCCCC" style="margin:0 auto;padding-top:10px;">
  <form name="myform" action="teacherlist_ok.php?act=mod" method="post" onSubmit="return checkreg();"  >
    <tr>
      <td height="22" colspan="4" bgcolor="#555555"><font color="#FFFFFF">&nbsp;<strong>修改教师信息</strong></font></td>
    </tr>
    <tr>
     <td width="13%" height="24" align="right" valign="middle" bgcolor="#f8f8f8">是否显示：</td>
      <td colspan='3' width="17%" height="24" align="left" valign="middle" bgcolor="#f8f8f8">
        <?php
            if($list['isshow']=="1")
            echo '<input id="isshow" name="isshow" type="checkbox" checked="checked" value=""/>';
           else if ($list['isshow']=="0")
            echo '<input id="isshow" name="isshow" type="checkbox" value="" />';
        ?>
      </td>
    </tr>
    <tr> 
      <td width="13%" height="24" align="right" valign="middle" bgcolor="#f8f8f8">logid：</td>
      <td colspan="3" width="87%" height="24" align="left" valign="middle" bgcolor="#f8f8f8"><input name="logid" type="text" id="logid" size="50" value="<?php echo $list['logid']; ?>" /></td>
    </tr>
     <tr> 
      <td width="13%" height="24" align="right" valign="middle" bgcolor="#f8f8f8">name：</td>
      <td colspan="3" width="87%" height="24" align="left" valign="middle" bgcolor="#f8f8f8"><input name="name" type="text" id=""name" size="50" value="<?php echo $list['name']; ?>" /></td>
    </tr>
     <tr> 
      <td width="13%" height="24" align="right" valign="middle" bgcolor="#f8f8f8">logpwd：</td>
      <td colspan="3" width="87%" height="24" align="left" valign="middle" bgcolor="#f8f8f8"><input name="logpwd" type="text" id="logpwd" size="50" value="<?php echo $list['logpwd']; ?>" /></td>
    </tr>
    <tr><input type="hidden" id="isS" name="isS" value=""><input type="hidden" name="id" value="<?php echo $list['initcode']; ?>">
      <td height="24" bgcolor="#f8f8f8">&nbsp;</td>
      <td colspan="3" height="24" bgcolor="#f8f8f8"><input type="submit" name="button" id="button" value="提交" /> <input type="button" name="back" id="back" value="返回" onclick="javascript:window.history.go(-1);" /></td>
    </tr>
  </form>
</table>
</body>
</html>
