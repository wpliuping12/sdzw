<?php 
session_start();
require_once 'conn.php';

$act = getvar('act');
$initcode = getvar('initcode');
$logid = trim(getvar("logid"));
$logpwd = trim(getvar("logpwd"));
$name = trim(getvar("name"));
$zhicheng = getvar("zhicheng");
$zhiwu = getvar("zhiwu");
$biyeyuanxiao = getvar("biyeyuanxiao");
$xueli = getvar("xueli");
$xuewei = getvar("xuewei");
$zhuanye = trim(getvar("zhuanye"));
$email = trim(getvar("email"));
$kecheng = (getvar("kecheng"));
$ifShouxi = getvar("ifShouxi");
$ifKezuo = getvar("ifKezuo");
$jianjie = getvar("jianjie");
$yanjiu = getvar("yanjiu");
$xueshu = getvar("xueshu");

$jianjie =str_replace('\'','"', getvar("jianjie")) ;
$xueshu =str_replace('\'','"', getvar("xueshu")) ;


//添加数据
if ($act=='add') {
	if(check_exists("logid",$logid)){
		exit("<script>alert('登录账号 ".$logid." 已经存在，请再换一个!');window.history.go(-1)</script>");
	}
	if(check_exists("name",$name)){
	    exit("<script>alert('教师姓名为： ".$name." 的信息已经存在，请用您的原来账号登录，不要新建!');window.history.go(-1)</script>");
	}
	$zhaopian = sendImg();  //得到照片的地址
    // error_log("\r\n  upfile=".$upfile.";",3,"d://debug.log");
	$record = array(
	    'name'		=>$name,
	    'zhicheng'		=>$zhicheng,
	    'zhiwu'		=>$zhiwu,
	    'biyeyuanxiao'		=>$biyeyuanxiao,
	    'xueli'		=>$xueli,
	    'xuewei'		=>$xuewei,
	    'zhuanye'		=>$zhuanye,
	    'email'		=>$email,
	    'kecheng'		=>$kecheng,
	    'ifShouxi'		=>$ifShouxi,
	    'ifKezuo'		=>$ifKezuo,
	    'jianjie'		=>$jianjie,
	    'yanjiu'		=>$yanjiu,
	    'xueshu'		=>$xueshu,
	    'logid'		=>$logid,
	);
    
    if(!empty($zhaopian) && $zhaopian !="")
    {
        $record["zhaopian"]=$zhaopian;
    }
    if(!empty($logpwd) && $logpwd !="")
    {
        $record["logpwd"]=md5($logpwd);
    }
	$id = $db->insert('teacherlist',$record);
	if($id)
	{
	    $_SESSION["logid"]=$logid;
	    $_SESSION["initcode"]=$id;
    	echo "<script>alert('添加成功!');window.location='teachers.php';</script>";
	}
}
//修改
if ($act=='mod'){
    $zhaopian = sendImg();  //得到照片的地址
//     error_log("\r\n  upfile=".$zhaopian.";",3,"d://debug.log");
    $record = array(
	    'name'		=>$name,
	    'zhicheng'		=>$zhicheng,
	    'zhiwu'		=>$zhiwu,
	    'biyeyuanxiao'		=>$biyeyuanxiao,
	    'xueli'		=>$xueli,
	    'xuewei'		=>$xuewei,
	    'zhuanye'		=>$zhuanye,
	    'email'		=>$email,
	    'kecheng'		=>$kecheng,
	    'ifShouxi'		=>$ifShouxi,
	    'ifKezuo'		=>$ifKezuo,
	    'jianjie'		=>$jianjie,
	    'yanjiu'		=>$yanjiu,
	    'xueshu'		=>$xueshu,
	    //'logid'		=>$logid,
	);
    if(!empty($zhaopian) && $zhaopian !="")
    {
        $record["zhaopian"]=$zhaopian;
    }
    if(!empty($logpwd) && $logpwd !="")
    {
        $record["logpwd"]=md5($logpwd);
    }
	$db->update('teacherlist',$record,'initcode='.$initcode);
	echo "<script>alert('修改成功!');window.location='teachers.php';</script>";
}

//删除
if ($act=='del') {	
	//$where = "id=".$id;
	$db->delete('teacherlist','initcode='.$initcode);
	echo "<script>alert('删除成功!');window.location='shoplist_manage.php';</script>";
}

function check_exists($field, $value){
	global $db;
	return $db->getRowsNum(get_sql("select initcode from teacherlist where $field='".$value."'"));
}
function sendImg()
{
    if (!is_uploaded_file($_FILES["upfile"]["tmp_name"]))
    //是否存在文件
    {
        return ;
    }
    $picname = $_FILES['upfile']['name'];
    $picsize = $_FILES['upfile']['size'];
    if ($picname != "") {
        if ($picsize > 1024*1024*20) {
            exit("<script>alert('图片大小不能超过 2M!');window.history.go(-1)</script>");
            return;
        }
        $type = strtolower(strstr($picname, '.'));
        if ($type != ".gif" && $type != ".jpg" && $type != ".png" && $type != ".bmp") {
            exit("<script>alert('允许上传的图片类型为:jpg,png,gif,bmp!');window.history.go(-1)</script>");
            return;
        }
        $rand = rand(100, 999);
        $pics = date("YmdHis") . $rand . $type;
        //上传路径
        $pic_path = "upload/". $pics;
        move_uploaded_file($_FILES['upfile']['tmp_name'], $pic_path);
    }
    $size = round($picsize/1024,2);
    return $pics;
//     $arr = array(
//         'name'=>$picname,
//         'pic'=>$pics,
//         'size'=>$size
//     );
}
?>
