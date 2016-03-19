<?php require_once('conn.php'); ?>
<?php

session_start();
if (trim($_REQUEST["user"]) != "" && trim($_REQUEST["pwd"]) !="" )
    {
	 $sql = 'SELECT initcode,logid,logpwd,name FROM `teacherlist` WHERE `logid` = \''.trim($_REQUEST["user"]).'\' and `logpwd` = \''.md5(trim($_REQUEST["pwd"])).'\' limit 1  ';
	 $list = $db->getOneRow($sql);
     if (!empty($list) && isset($list))
		{
		   $_SESSION["logid"]=$list["logid"]; 
           $_SESSION["initcode"]=$list["initcode"];
	       header("Location:teachers.php");
           exit();
		}
	 else
		{
           session_unset();
           session_destroy();
		   header("Location:login.htm");
           exit();
		}
    }

//echo $result, "---",$rowsnumber,"--",$row["id"],"---";
//echo $_REQUEST["user"],"+++",$_REQUEST["pwd"],"+++",$_SESSION["teacherusr"],"+++",$_SESSION["teacherid"];
?>