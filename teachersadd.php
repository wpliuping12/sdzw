<?php require_once("header.php")?>
<link rel="stylesheet" href="kindeditor/themes/default/default.css" />
<link rel="stylesheet" href="kindeditor/plugins/code/prettify.css" />
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css"/>
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
		if (document.form1.logid.value == "") {
			window.alert("请输入登录账号!")
			return false;
		}
		if (document.form1.logpwd.value == "") {
			window.alert("请输入登录密码!")
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
		<title>
			计算机学院教师个人信息修改
		</title>
	</head>
	<body bgcolor="#ffffff"  >
		<div class="hd">
			
		</div>
		<div class="container">
			 <div class="row-fluid">
			<form action="teachersave.php" name="form1" method="POST" onSubmit="return validateform( this.form )" enctype="multipart/form-data">
				<input name="initcode" id="initcode" type="hidden" value="-1">
				<input name="act" id="act" type="hidden" value="add">
			    <div class="offset1 span5">
				<div class="form-group">
					<label for="logid">登录账号：</label>
					<input name="logid" type="text" id="logid" style="width:250px;" class=" form-control" value="" >
					*必填
				</div>
				<div class="form-group">
					<label for="logid">登录密码：</label>
					<input name="logpwd" type="password" id="logpwd" style="width:250px;" class=" form-control" value="">
					*必填
					<br/>
				</div>
				<div class="form-group">
					<label for="logid">教师姓名：</label>
					<input name="name" type="text" id="name" style="width:250px;" class=" form-control"  value="">
					*必填
					<br/>
				</div>
				<div class="form-group">
					<label for="logid">职称：</label>
					<select name="zhicheng" id="zhicheng" style="width:250px;" class=" form-control" >
						<option value="助教" >
							助教
						</option>
						<option value="讲师" >
							讲师
						</option>
						<option value="副教授" >
							副教授
						</option>
						<option value="教授" >
							教授
						</option>
						<option value="实验师" >
							实验师
						</option>
						<option value="高级实验师" >
							高级实验师
						</option>
						<option value="工程师" >
							工程师
						</option>
						<option value="高级工程师" >
							高级工程师
						</option>
					</select>
					<br/>
				</div>
				<div class="form-group">
					<label for="logid">职务：</label>
					<input name="zhiwu" type="text" id="zhiwu" style="width:250px;" class=" form-control"  value="">
					<br/>
				</div>
				<div class="form-group">
					<label for="logid">毕业院校：</label>
					<input name="biyeyuanxiao" type="text" id="biyeyuanxiao" style="width:250px;" class=" form-control"  value="">
					<br/>
				</div>
		    </div>
		    <div class="offset1 span4">
				<div class="form-group">
					<label for="logid">学位：</label>
					<select name="xuewei" id="xuewei" style="width:250px;" class=" form-control" >
						<option value="学士" >
							学士
						</option>
						<option value="硕士" >
							硕士
						</option>
						<option value="博士" >
							博士
						</option>
					</select>填最高学位
					<br/>
				</div>
				<div class="form-group">
					<label for="logid">学历：</label>
					<select name="xuewei" id="xuewei" style="width:250px;" class=" form-control" >
						<option value="学士" >
							学士
						</option>
						<option value="硕士" >
							硕士
						</option>
						<option value="博士" >
							博士
						</option>
					</select>填最高学位
					<br/>
				</div>
				<div class="form-group">
					<label for="logid">专业：</label>
					<input name="zhuanye" type="text" id="zhuanye" style="width:250px;" class=" form-control"  value="">
					<br/>
				</div>
				<div class="form-group">
					<label for="logid">主讲课程：</label>
					<input name="kecheng" type="text" id="kecheng" style="width:250px;" class=" form-control"  value="">
					<br/>
				</div>
				<div class="form-group">
					<label for="logid">E-Mail：</label>
					<input name="email" type="text" id="email" style="width:250px;" class=" form-control"  value="">
					<br/>
				</div>
				<div class="span5">
					
					<label >首席教师：</label>
					<input name="ifShouxi" id="ifShouxi" type="checkbox" value="1"  >
					<label >客座教授:</label>
				    <input name="ifKezuo" id="ifKezuo" type="checkbox"  value="1"  >
				</div>
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
			<div class="span5">
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
		 <div class="hd">
		 	
		 </div>
		 <?php require_once('footer.php'); ?>
	</body>
</html>
