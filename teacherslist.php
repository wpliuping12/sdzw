<?php require_once('conn.php'); ?>
<?php require_once('header.php');?>
<?php

    $sql = 'SELECT name,zhaopian,initcode FROM `teacherlist`  where zhicheng=\'教授\'  and isshow=1 ';
	 $list = $db->select($sql);
	 if ( isset($list) && count($list)>0)
	 {
	?>
	<div class="container">
	<table width="200" class="table table-striped">
      <tr>
        <td colspan="3">教授&nbsp;</td>
      </tr>
      <tr>
      <?php
      $num =1;
      foreach ($list as $row ){
         if($num % 3 ==0)
              echo "<tr>";
         echo '<td><a href="teachershow.php?id='.$row['initcode'].'"><img alt="个人照片" src="upload/'.$row["zhaopian"].'" height="160px" width="120px"></a>
	             <a href="teachershow.php?id='.$row['initcode'].'">'.$row["name"].'</a></td>';
         if($num % 3 ==0)
             echo "</tr>";
      } 
	 }
      ?>
      </tr>
    </table>
   </div>
<?php
    $sql = 'SELECT name,zhaopian,initcode FROM `teacherlist` where zhicheng=\'副教授\'  and isshow=1 ';
	 $list = $db->select($sql);
	 if ( isset($list) && count($list)>0)
	 {
	?>
<div class="container">
	<table width="200" class="table table-striped">
      <tr>
        <td colspan="3">副教授&nbsp;</td>
      </tr>
      <tr>
      <?php
      $num =1;
      foreach ($list as $row ){
         if($num % 3 ==0)
              echo "<tr>";
         echo '<td><a href="teachershow.php?id='.$row['initcode'].'"><img alt="个人照片" src="upload/'.$row["zhaopian"].'" height="160px" width="120px"></a>
	             <a href="teachershow.php?id='.$row['initcode'].'">'.$row["name"].'</a></td>';
         if($num % 3 ==0)
             echo "</tr>";
      }
	  }
      ?>
      </tr>
    </table>
    </div>
  <?php

    $sql = 'SELECT name,zhaopian,initcode FROM `teacherlist` where xuewei=\'博士\' and isshow=1 ';
	 $list = $db->select($sql);
	 if ( isset($list) && count($list)>0)
	 {
	?>
	<div class="container">
		
	
	<table width="200" class="table table-striped">
      <tr>
        <td colspan="3">博士&nbsp;</td>
      </tr>
      <tr>
      <?php
      $num =1;
      foreach ($list as $row ){
         if($num % 3 ==0)
              echo "<tr>";
         echo '<td><a href="teachershow.php?id='.$row['initcode'].'"><img alt="个人照片" src="upload/'.$row["zhaopian"].'" height="160px" width="120px"></a>
	             <a href="teachershow.php?id='.$row['initcode'].'">'.$row["name"].'</a></td>';
         if($num % 3 ==0)
             echo "</tr>";
      }
	  }
      ?>
      </tr>
    </table>
    </div> 
    <?php

    $sql = 'SELECT name,zhaopian,initcode FROM `teacherlist` where zhicheng=\'讲师\'  and isshow=1 ';
	 $list = $db->select($sql);
	 if ( isset($list) && count($list)>0)
	 {
	?>
	<div class="container">
		

	<table width="200" class="table table-striped">
      <tr>
        <td colspan="3">讲师&nbsp;</td>
      </tr>
      <tr>
      <?php
      $num =1;
      foreach ($list as $row ){
         if($num % 3 ==0)
              echo "<tr>";
         echo '<td><a href="teachershow.php?id='.$row['initcode'].'"><img alt="个人照片" src="upload/'.$row["zhaopian"].'" height="160px" width="120px"></a>
	             <a href="teachershow.php?id='.$row['initcode'].'">'.$row["name"].'</a></td>';
         if($num % 3 ==0)
             echo "</tr>";
      } }
      ?>
      </tr>
    </table>
    	</div>
    <?php

    $sql = 'SELECT name,zhaopian,initcode FROM `teacherlist` where zhicheng=\'助教\' and isshow=1  ';
	 $list = $db->select($sql);
	 if ( isset($list) && count($list)>0)
	 {
	?>
	<div class="container">
	<table width="200" class="table table-striped">
      <tr>
        <td colspan="3">助教&nbsp;</td>
      </tr>
      <tr>
      <?php
      $num =1;
      foreach ($list as $row ){
         if($num % 3 ==0)
              echo "<tr>";
         echo '<td><a href="teachershow.php?id='.$row['initcode'].'"><img alt="个人照片" src="upload/'.$row["zhaopian"].'" height="160px" width="120px"></a>
	             <a href="teachershow.php?id='.$row['initcode'].'">'.$row["name"].'</a></td>';
         if($num % 3 ==0)
             echo "</tr>";
      } }
      ?>
      </tr>
    </table>
    	</div>
     <?php

    $sql = 'SELECT name,zhaopian,initcode FROM `teacherlist` where zhicheng=\'高级实验师\'  and isshow=1 ';
	 $list = $db->select($sql);
	 if ( isset($list) && count($list)>0)
	 {
	?>
	<div class="container">
	<table width="200" class="table table-striped">
      <tr>
        <td colspan="3">高级实验师&nbsp;</td>
      </tr>
      <tr>
      <?php
      $num =1;
      foreach ($list as $row ){
         if($num % 3 ==0)
              echo "<tr>";
         echo '<td><a href="teachershow.php?id='.$row['initcode'].'"><img alt="个人照片" src="upload/'.$row["zhaopian"].'" height="160px" width="120px"></a>
	             <a href="teachershow.php?id='.$row['initcode'].'">'.$row["name"].'</a></td>';
         if($num % 3 ==0)
             echo "</tr>";
      } }
      ?>
      </tr>
    </table>
    </div>
      <?php

    $sql = 'SELECT name,zhaopian,initcode FROM `teacherlist` where zhicheng=\'实验师\'  and isshow=1 ';
	 $list = $db->select($sql);
	 if ( isset($list) && count($list)>0)
	 {
	?>
	<div class="container">
	   <div class="row-fluid">
	      <div class="span3" style="margin-top:20px; margin-right:20px;">
	      	   <div class="well sidebar-nav">
            <ul class="nav nav-list">
              <li class="nav-header">师资队伍</li>
              <li><a href="#">实验员</a></li>
              <li><a href="#">实验员</a></li>
              <li><a href="#">实验员</a></li>
            </ul>
          </div><!--/.well -->
	      </div>
	    <h2><div class="ico1"></div> 实验师 <hr /></h2>
	    	<div class="span4">
	   		 <div class="row-fluid">
        		<?php
      $num =1;
      foreach ($list as $row ){
         if($num % 3 ==0)
              echo "<tr>";
         echo '<td><a href="teachershow.php?id='.$row['initcode'].'"></a>
	             <a href="teachershow.php?id='.$row['initcode'].'">'.$row["name"].'</a></td>';
         if($num % 3 ==0)
             echo "</tr>";
      } }
      ?>
             </div>
            </div>
           <div class="span4">
             <div class="row-fluid">
        	  	   <ul>
        	  	  	<li  class="fol">
        	  	  	  <div class="lead_1">
        	  	         <img width="120px;"height="160px" src="upload/20150912172323705.jpg"/>
        	          </div>
        	          <div class="name1">
        	          	    张三
        	          </div>
        	           <div class="jieshao">
        	           	    <div class="call">
        	           	    	专业111111111
        	           	    </div>
        	           	    <div class="call">
        	           	    	专业111111111
        	           	    </div>
        	           	    <div class="call">
        	           	    	专业111111111
        	           	    </div>
        	           	    <div class="call">
        	           	    	专业111111111
        	           	    </div>
        	           </div>
        	  	  	</li>
        	  	   </ul>
             </div>
             <div class="row-fluid">
        	  	   <ul>
        	  	  	<li  class="fol">
        	  	  	  <div class="lead_1">
        	  	         <img width="120px;"height="160px" src="upload/20150912172323705.jpg"/>
        	          </div>
        	          <div class="name1">
        	          	    张三
        	          </div>
        	           <div class="jieshao">
        	           	    <div class="call">
        	           	    	专业111111111
        	           	    </div>
        	           	    <div class="call">
        	           	    	专业111111111
        	           	    </div>
        	           	    <div class="call">
        	           	    	专业111111111
        	           	    </div>
        	           	    <div class="call">
        	           	    	专业111111111
        	           	    </div>
        	           </div>
        	  	  	</li>
        	  	   </ul>
             </div>
             <div class="row-fluid">
        	  	   <ul>
        	  	  	<li  class="fol">
        	  	  	  <div class="lead_1">
        	  	         <img width="120px;"height="160px" src="upload/20150912172323705.jpg"/>
        	          </div>
        	          <div class="name1">
        	          	    张三
        	          </div>
        	           <div class="jieshao">
        	           	    <div class="call">
        	           	    	专业111111111
        	           	    </div>
        	           	    <div class="call">
        	           	    	专业111111111
        	           	    </div>
        	           	    <div class="call">
        	           	    	专业111111111
        	           	    </div>
        	           	    <div class="call">
        	           	    	专业111111111
        	           	    </div>
        	           </div>
        	  	  	</li>
        	  	   </ul>
             </div>
    	</div>
    </div>
      <?php

    $sql = 'SELECT name,zhaopian,initcode FROM `teacherlist` where zhicheng=\'高级工程师\'  and isshow=1 ';
	 $list = $db->select($sql);
	 if ( isset($list) && count($list)>0)
	 {
	?>
	<div class="container">
	<table width="200" class="table table-striped">
      <tr>
        <td colspan="3">高级工程师&nbsp;</td>
      </tr>
      <tr>
      <?php
      $num =1;
      foreach ($list as $row ){
         if($num % 3 ==0)
              echo "<tr>";
         echo '<td><a href="teachershow.php?id='.$row['initcode'].'"><img alt="个人照片" src="upload/'.$row["zhaopian"].'" height="160px" width="120px"></a>
	             <a href="teachershow.php?id='.$row['initcode'].'">'.$row["name"].'</a></td>';
         if($num % 3 ==0)
             echo "</tr>";
      } }
      ?>
      </tr>
    </table><br>
    </div>
    
       <?php

    $sql = 'SELECT name,zhaopian,initcode FROM `teacherlist` where zhicheng=\'工程师\'  and isshow=1 ';
	 $list = $db->select($sql);
	 if ( isset($list) && count($list)>0)
	 {
	?>
	<div class="container">
	<table width="200" class="table table-striped">
      <tr>
        <td colspan="3">工程师&nbsp;</td>
      </tr>
      <tr>
      <?php
      $num =1;
      foreach ($list as $row ){
         if($num % 3 ==0)
              echo "<tr>";
         echo '<td><a href="teachershow.php?id='.$row['initcode'].'"><img alt="个人照片" src="upload/'.$row["zhaopian"].'" height="160px" width="120px"></a>
	             <a href="teachershow.php?id='.$row['initcode'].'">'.$row["name"].'</a></td>';
         if($num % 3 ==0)
             echo "</tr>";
      } }
      ?>
      </tr>
    </table><br>
   </div>
   <?php require_once('footer.php');?>