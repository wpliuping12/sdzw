<?php
require_once('../conn.php');

//$manager_type = $_SESSION['supermanager'] + 1;

   $sqlstr=get_sql("select * from teacherlist ");

$manager_list = $db->select ($sqlstr);

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
<link href="../css/admin_css.css" rel="stylesheet" type="text/css" />

</head>
<body>
<table width="98%" height="42" border="0" cellpadding="0" cellspacing="0" bgcolor="#cccccc" style="margin:0 auto;padding-top:10px;">
   <tr>
     <td width="80" height="22"  align="left"  bgcolor="#f8f8f8">
     <a href="teacherlist_add.php" ><img src="../images/a_add.png" border="0" /></a>
     </td>
  </tr>
</table>
<table width="98%"  border="0" cellpadding="3" cellspacing="1" bgcolor="#cccccc" style="margin:0 auto;padding-top:0px;">
 
  <tr style="background-color:#555555;color:#FFFFFF;font-weight:bold;" >
    <td width="5%" height="24" align="center" valign="middle" >initcode</td>
    <td width="6%" height="24" align="center" valign="middle" >姓名</td>
    <td width="9%" height="24" align="center" valign="middle">登录账号</td>
    <td width="20%" height="24" align="center" valign="middle">是否显示</td>
    <td height="24" width="100px"  align="center" valign="middle" >操作</td>
  </tr>
  <?php
	foreach ($manager_list as $list){
  ?>
  <tr onMouseOver="this.style.background='#D7E4F7'" onMouseOut="this.style.background='#EBF2F9';"  bgcolor="#EBF2F9">
    <td width="5%" height="24" align="center" valign="middle" bgcolor="#f8f8f8"><?php echo $list['initcode']; ?></td>
    <td height="24" align="center" valign="middle" bgcolor="#f8f8f8"><?php echo $list['name']; ?></td>
    <td height="24" align="center" valign="middle" bgcolor="#f8f8f8"><?php echo $list['logid']; ?></td>
    <td height="24" width="40px" align="center" valign="middle" bgcolor="#f8f8f8">
     <?php
        if($list['isshow']==1)
            echo '<input name="isshow" type="checkbox" checked="checked" value="" disabled="true"/>';
           else if ($list['isshow']==0)
            echo '<input name="isshow" type="checkbox" value=""  disabled="true"/>';
        ?>
    </td>
    <td height="24" width="190px" align="left" valign="middle" bgcolor="#f8f8f8">
    <a href="teacherlist_mod.php?id=<?php echo $list['initcode']; ?>">修改</a>&nbsp;
       <a href="teacherlist_ok.php?id=<?php echo $list['initcode']; ?>&act=del" onClick="javascript:return confirm('确实要删除吗?')">删除</a>
       </td>

  </tr>
  <?php
  	}
  ?>

</table>
</body>
</html>
