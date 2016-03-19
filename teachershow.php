<?php require_once('conn.php'); ?>
<?php require_once('header.php'); ?>
<?php
if(!empty($_GET["id"]) && isset($_GET["id"]))
{
	 $sql = 'SELECT * FROM `teacherlist` WHERE `initcode` = \''.$_GET["id"].'\'  limit 1  ';
	 $list = $db->getOneRow($sql);
	 if (empty($list) || !isset($list))
		die("没有检索到数据");
		}
else 
    die("没有检索到数据");
?>


<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf8">
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css"/>
<link rel="stylesheet" type="text/css" href="css/style.css"/>
<title>计算机学院教师个人信息修改</title>
</head>
<body bgcolor="#ffffff"  >
<div class="container">
	<div class="hd">
	</div>	
	 <div class="row">
	 	  <div class="col-md-2 title">
	 	  	  <div class="ico1">
	 	  	  </div><?php echo $list['zhicheng']; ?>
	 	  </div>
	 </div>
	 <div class="row">
	 	<div class="col-md-12">
	 		<hr />
	 	</div>
	 </div>
	<div class="row">
    <div class="col-md-1">
    	<img alt="个人照片" src="upload/<?php  echo $list["zhaopian"];?>" height="160px" width="120px">
    </div>
	<div class="col-md-4" style="margin-left: 2%;" >
		<ul class="fol">
			  <li>教师姓名：<?php echo $list['name']; ?></li>
			  <li>职称：<?php echo $list['zhicheng']; ?></li>
	          <li>职务：<?php echo $list['zhiwu']; ?></li>
	          <li>毕业院校：<?php echo $list['biyeyuanxiao']; ?></li>
	          <li>学位：<?php echo $list['xuewei']; ?></li>
	          <li>学历：<?php echo $list['xueli']; ?></li>
	          <li>专业：<?php echo $list['zhuanye']; ?></li>
	          <li>主讲课程：<?php echo $list['kecheng']; ?></li>
	          <li>E-Mail：<?php echo $list['email']; ?></li>
		</ul>
	 </div>
	</div>
	<div class="pad">
	</div>
	<div class="row">
	<div class="col-md-12 ">
		<h3><div class="ico1"></div>研究领域</h3>
		
	    <?php echo $list['yanjiu']; ?>
	</div>
	<div class="col-md-12">
		<h3> <div class="ico1"></div>个人简介</h3>
		<?php  echo $list["jianjie"];?>
	</div>
	<div class="col-md-12 ">
		<h3><div class="ico1"></div>学术成果 </h3>
		<?php  echo $list["xueshu"];?>
	</div>
	</div>
</div>
<div class="hd"></div>
<?php require_once('footer.php');?>
</body>
</html>

