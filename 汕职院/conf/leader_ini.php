<?php
	$sql = "select * from leader limit 0,5";
	$result = $mysqli->query($sql);
	$leader_img = array();
	$name = array();
	$mes = array();
	if ($result) {
	    if($result->num_rows>0){                                               //判断结果集中行的数目是否大于0
    		$i = 0;
	        while($row =$result->fetch_array() ){                        //循环输出结果集中的记录
	            	$leader_img[$i] = $row[0];
	            	$name[$i] = $row[1];
	            	$mes[$i] = $row[2];
	            	$i++;
	            }
	         }
	} else {
	    echo "查询失败";
	}
	$result->free();
	$mysqli->close();
	$row = "picture";
	$table = "leader";
	$condition = "top5";
	$img1 = "conf/draw_picture.php?num=0&row=$row&table=$table&condition=$condition";
	$img2 = "conf/draw_picture.php?num=1&row=$row&table=$table&condition=$condition";
	$img3 = "conf/draw_picture.php?num=2&row=$row&table=$table&condition=$condition";
	$img4 = "conf/draw_picture.php?num=3&row=$row&table=$table&condition=$condition";
	$img5 = "conf/draw_picture.php?num=4&row=$row&table=$table&condition=$condition";
	$leader_card1 = set_leader_mes("$img1",$name[0],$mes[0]);
	$leader_card2 = set_leader_mes("$img2",$name[1],$mes[1]);
	$leader_card3 = set_leader_mes("$img3",$name[2],$mes[2]);
	$leader_card4 = set_leader_mes("$img4",$name[3],$mes[3]);
	$leader_card5 = set_leader_mes("$img5",$name[4],$mes[4]);
?>