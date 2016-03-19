<?php
require_once ('conn.php');
?>
<?php
require_once ('header.php');
?>
<?php
session_start();
if (!isset($_SESSION["logid"]) || $_SESSION["logid"] == "" || $_SESSION["logid"] == null) {
	header("Location:login.htm");
	exit();
} else {
	$sql = 'SELECT * FROM `teacherlist` WHERE `initcode` = \'' . $_SESSION["initcode"] . '\'  limit 1  ';
	$list = $db -> getOneRow($sql);
	if (empty($list) || !isset($list))
		die("没有检索到数据");
}
?>
<link rel="stylesheet" href="kindeditor/themes/default/default.css" />
<link rel="stylesheet" href="kindeditor/plugins/code/prettify.css" />
<script charset="utf-8" src="kindeditor/kindeditor.js"></script>
<script charset="utf-8" src="kindeditor/lang/zh_CN.js"></script>
<script charset="utf-8" src="kindeditor/plugins/code/prettify.js"></script>
<script>//个人简介
var editor1;
KindEditor.ready(function(K) {
	var editor1 = K.create('textarea[name="jianjie"]', {
		cssPath: 'kindeditor/plugins/code/prettify.css',
		uploadJson: 'kindeditor/php/upload_json.php',
		fileManagerJson: 'kindeditor/php/file_manager_json.php',
		allowFileManager: true,
		afterCreate: function() {
			var self = this;
			K.ctrl(document, 13, function() {
				self.sync();
				K('form[name=myform]')[0].submit();
			});
			K.ctrl(self.edit.doc, 13, function() {
				self.sync();
				K('form[name=myform]')[0].submit();
			});
		},
		afterBlur: function() {
			this.sync();
		}
	});
	prettyPrint();
});
//学术成果
var editor2;
KindEditor.ready(function(K) {
	var editor2 = K.create('textarea[name="xueshu"]', {
		cssPath: 'kindeditor/plugins/code/prettify.css',
		uploadJson: 'kindeditor/php/upload_json.php',
		fileManagerJson: 'kindeditor/php/file_manager_json.php',
		allowFileManager: true,
		afterCreate: function() {
			var self = this;
			K.ctrl(document, 13, function() {
				self.sync();
				K('form[name=myform]')[0].submit();
			});
			K.ctrl(self.edit.doc, 13, function() {
				self.sync();
				K('form[name=myform]')[0].submit();
			});
		},
		afterBlur: function() {
			this.sync();
		}
	});
	prettyPrint();
});</script>
<script><!--
function validateform() {
		if (document.form1.name.value == "") {
			window.alert("请输入姓名!")
			return false;
		}
		// 			if(document.form1.ifShouxi.checked)
		// 				document.form1.ifShouxi1.value=1;
		// 			else
		// 				document.form1.ifShouxi.value=0;
		// 			if(document.form1.isShow.checked)
		// 				document.form1.isS.value=1;
		// 			else
		// 				document.form1.isS.value=0;
	}
	//--></script>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf8">
		<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css"/>
		<title>
			计算机学院教师个人信息修改
		</title>
	</head>
	<body bgcolor="#ffffff"  >
		<div class="hd">
			
		</div>
		<form action="teachersave.php" name="form1" method="POST" onSubmit="return validateform( this.form )" enctype="multipart/form-data">
			<input name="initcode" id="initcode" type="hidden" value="<?php echo $list['initcode']; ?>">
			<input name="act" id="act" type="hidden" value="mod">
			<div class="container">
			  <div class="row-fluid">
			   <div class="offset1 span5">
				<div class="form-group">
					<label >登录账号：</label>
					<input name="logid" type="text" id="logid" style="width:250px;" class=" form-control" value="<?php echo $list['logid']; ?> " disabled="disabled">
				</div>
				<div class="form-group">
					<label >
						登录密码：
					</label>
					<input name="logpwd" type="password" id="logpwd" style="width:250px;" class=" form-control" value="">
					如不修改登录密码，此处不要填写
				</div>
				<div class="form-group">
					<label >
						教师姓名：
					</label>
					<input name="name" type="text" id="name" style="width:250px;" class=" form-control" value="<?php echo $list['name']; ?>">
					*必填
				</div>
				<div class="form-group">
					<label >
						职称：
					</label>
					<select name="zhicheng" id="zhicheng" style="width:250px;" class=" form-control">
						<option value="助教" <?php
						if ("助教" == $list['zhicheng']) {echo "selected";
						}
						?>>
							助教
						</option>
						<option value="讲师" <?php
						if ("讲师" == $list['zhicheng']) {echo "selected";
						}
						?>>
							讲师
						</option>
						<option value="副教授" <?php
						if ("副教授" == $list['zhicheng']) {echo "selected";
						}
						?>>
							副教授
						</option>
						<option value="教授" <?php
						if ("教授" == $list['zhicheng']) {echo "selected";
						}
						?>>
							教授
						</option>
						<option value="实验师" <?php
						if ("实验师" == $list['zhicheng']) {echo "selected";
						}
						?>>
							实验师
						</option>
						<option value="高级实验师" <?php
						if ("高级实验师" == $list['zhicheng']) {echo "selected";
						}
						?>>
							高级实验师
						</option>
						<option value="工程师" <?php
						if ("工程师" == $list['zhicheng']) {echo "selected";
						}
						?>>
							工程师
						</option>
						<option value="高级工程师" <?php
						if ("高级工程师" == $list['zhicheng']) {echo "selected";
						}
						?>>
							高级工程师
						</option>
					</select>
				</div>
				<div class="form-group">
					<label >
						职务：
					</label>
					<input name="zhiwu" type="text" id="zhiwu" style="width:250px;" class=" form-control" value="<?php echo $list['zhiwu']; ?>">
				</div>
				<div class="form-group">
					<label >
						毕业院校：
					</label>
					<input name="biyeyuanxiao" type="text" id="biyeyuanxiao" style="width:250px;" class=" form-control" value="<?php echo $list['biyeyuanxiao']; ?>">
				</div>
		   </div> 
		   <div class="span5">
				<div class="form-group">
					<label >学位： </label>
					<select name="xuewei" id="xuewei" style="width:250px;" class=" form-control">
						<option value="学士" <?php
						if ("学士" == $list['xuewei']) {echo "selected";
						}
						?>>
							学士
						</option>
						<option value="硕士" <?php
						if ("硕士" == $list['xuewei']) {echo "selected";
						}
						?>>
							硕士
						</option>
						<option value="博士" <?php
						if ("博士" == $list['xuewei']) {echo "selected";
						}
						?>>
							博士
						</option>
					</select>填最高学位
				</div>
				<div class="form-group">
					<label >学历： </label>
					<select name="xueli" id="xueli" style="width:250px;" class=" form-control">
						<option value="专科" <?php
						if ("专科" == $list['xueli']) {echo "selected";
						}
						?>>
							专科
						</option>
						<option value="本科" <?php
						if ("本科" == $list['xueli']) {echo "selected";
						}
						?>>
							本科
						</option>
						<option value="硕士" <?php
						if ("硕士" == $list['xueli']) {echo "selected";
						}
						?>>
							硕士
						</option>
						<option value="博生" <?php
						if ("博士" == $list['xueli']) {echo "selected";
						}
						?>>
							博士
						</option>
						<option value="博士后" <?php
						if ("博士后" == $list['xueli']) {echo "selected";
						}
						?>>
							博士后
						</option>
					</select>填最高学历
				</div>
				
				<div class="form-group">
					<label >专业：</label>
					<input name="zhuanye" type="text" id="zhuanye" style="width:250px;" class=" form-control" value="<?php echo $list['zhuanye']; ?>">
				</div>
				<div class="form-group">
					<label >主讲课程：</label>
					<input name="kecheng" type="text" id="kecheng" style="width:250px;" class=" form-control" value="<?php echo $list['kecheng']; ?>">
					<br/>
				</div>
				<div class="form-group">
					<label >E-Mail：</label>
					<input name="email" type="text" id="email" style="width:250px;" class=" form-control" value="<?php echo $list['email']; ?>">
					<br/>
				</div>
				<div class="span5">
					<label >首席教师：</label>
					<input name="ifShouxi" id="ifShouxi"   type="checkbox" value="1"  <?php
					if ($list['ifShouxi'] == 1)
						echo "checked";
					?>>
					<label >客座教授：</label>
					<input name="ifKezuo" id="ifKezuo" type="checkbox" value="1"  <?php
					if ($list['ifKezuo'] == 1)
						echo "checked";
					?>>
				</div>
		     </div>
				<div class="row-fluid">
				 <div class="offset1 span11">
				 	<h3>研究领域：</h3>
					<textarea name="yanjiu" cols="80" rows="5" id="yanjiu" class=" form-control"  ></textarea>
					<div class="hd">
					</div>
					<div class="row-fluid">
						<div class="span3">
						照片：
				<img alt="个人照片" src="upload/<?php  echo $list["zhaopian"]; ?>" height="160px" width="120px">
				<div class="hd">
				</div>
				<input name="upfile"  type="file"  >
				<br>
					</div>
			<div class="offset1 span5">
				<font color="red">允许上传 gif/jpg/png/bmp 格式的图片
					<br>
					图片大小不能超过2M
					<br>
					高度宽度比例为4:3，否则显示的时候容易变形</font>
			</div>
					</div>
				       <h3> 个人简介：</h3>
				<textarea name="jianjie" id="jianjie" style="width:80%;height:350px;visibility: hidden;" style="width:250px;" class=" form-control" ></textarea>
<br/>				<h3>学术成果：</h3>
				<textarea name="xueshu" id="xueshu" style="width:80%;height:350px;visibility: hidden;" style="width:250px;" class=" form-control" ></textarea>
				 <div class="hd">
				 	
				 </div>
				 <div class="offset3">
				 	<input name="submit" type="submit" value="保存修改">
				 </div>
				 </div>
<br/>				
			</form>
		 	  </div>
		</div>
		   	</div>
		   	<div class="hd">
		   		
		   	</div>
		   	<?php require_once('footer.php');?>
	</body>
</html>
