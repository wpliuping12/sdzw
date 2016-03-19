<?php 
require_once('../conn.php'); 

$act = trim($_GET['act']);
$id = getvar('id');
$isshow = getvar("isS");
$logpwd = getvar("logpwd");
$logid = getvar("logid");
$name = getvar("name");


//error_log("\r\n  ishow=".$isshow.";",3,"d://debug.log");
//修改
if ($act=='mod'){
   
    	$record = array(
    	    'logid'		=>$logid,
    		'isshow'		=>$isshow,
    	    'name'		=>$name,
    	);
    	if(!empty($logpwd) && $logpwd !="")
    	{
    	    $record["logpwd"]=md5($logpwd);
    	}
    	//error_log("\r\n  record=".$record['isshow'].";",3,"d://debug.log");
	$db->update('teacherlist',$record,'initcode='.$id);
	echo "<script>alert('修改成功!');window.location='teacherlist_manage.php';</script>";
}

//删除
if ($act=='del') {	
	//$where = "id=".$id;
	$db->delete('teacherlist','initcode='.$id);
	echo "<script>alert('删除成功!');window.location='teacherlist_manage.php';</script>";
}

function check_username($username){
	global $db;
	return $db->getRowsNum(get_sql("select shopname from teacherlist where shopname='".$username."'"));
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
        $pic_path = "../webftp/storage/". $pics;
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
