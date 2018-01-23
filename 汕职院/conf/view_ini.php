<?php
	$view_title1 = "艺<br>术<br>文<br>化";
	$view_title2 = "宿<br>舍<br>文<br>化";
	$view_title3 = "学<br>生<br>社<br>团";
	$view_title4 = "体<br>育<br>健<br>康";

	$view_head1 = set_view_head("艺术文化",3);
	$view_head2 = set_view_head("宿舍文化",3);
	$view_head3 = set_view_head("学生社团",3);
	$view_head4 = set_view_head("体育健康",3);

	$row1 = "view_art_img";
	$row2 = "view_cul_img";
	$row3 = "view_stu_img";
	$row4 = "view_pe_img";
	$table1 = "view_art";
	$table2 = "view_cul";
	$table3 = "view_stu";
	$table4 = "view_pe";
	$condition1 = "top8";
	$condition2 = "top4";
	$condition3 = "top4";
	$condition4 = "top6";
	$img_view0 = "conf/draw_picture.php?num=0&row=$row1&table=$table1&condition=$condition1";
	$img_view1 = "conf/draw_picture.php?num=1&row=$row1&table=$table1&condition=$condition1";
	$img_view2 = "conf/draw_picture.php?num=2&row=$row1&table=$table1&condition=$condition1";
	$img_view3 = "conf/draw_picture.php?num=3&row=$row1&table=$table1&condition=$condition1";
	$img_view4 = "conf/draw_picture.php?num=4&row=$row1&table=$table1&condition=$condition1";
	$img_view5 = "conf/draw_picture.php?num=5&row=$row1&table=$table1&condition=$condition1";
	$img_view6 = "conf/draw_picture.php?num=6&row=$row1&table=$table1&condition=$condition1";
	$img_view7 = "conf/draw_picture.php?num=7&row=$row1&table=$table1&condition=$condition1";
	$img_view8 = "conf/draw_picture.php?num=0&row=$row2&table=$table2&condition=$condition2";
	$img_view9 = "conf/draw_picture.php?num=1&row=$row2&table=$table2&condition=$condition2";
	$img_view10 = "conf/draw_picture.php?num=2&row=$row2&table=$table2&condition=$condition2";
	$img_view11 = "conf/draw_picture.php?num=3&row=$row2&table=$table2&condition=$condition2";
	$img_view12 = "conf/draw_picture.php?num=0&row=$row3&table=$table3&condition=$condition3";
	$img_view13 = "conf/draw_picture.php?num=1&row=$row3&table=$table3&condition=$condition3";
	$img_view14 = "conf/draw_picture.php?num=2&row=$row3&table=$table3&condition=$condition3";
	$img_view15 = "conf/draw_picture.php?num=3&row=$row3&table=$table3&condition=$condition3";
	$img_view16 = "conf/draw_picture.php?num=0&row=$row4&table=$table4&condition=$condition4";
	$img_view17 = "conf/draw_picture.php?num=1&row=$row4&table=$table4&condition=$condition4";
	$img_view18 = "conf/draw_picture.php?num=2&row=$row4&table=$table4&condition=$condition4";
	$img_view19 = "conf/draw_picture.php?num=3&row=$row4&table=$table4&condition=$condition4";
	$img_view20 = "conf/draw_picture.php?num=4&row=$row4&table=$table4&condition=$condition4";
	$img_view21 = "conf/draw_picture.php?num=5&row=$row4&table=$table4&condition=$condition4";


	// 艺术文化图片
	$view_img01 = set_view_img($img_view0);
	$view_img02 = set_view_img($img_view1);
	$view_img03 = set_view_img($img_view2);
	$view_img04 = set_view_img($img_view3);
	$view_img05 = set_view_img($img_view4);
	$view_img06 = set_view_img($img_view5);
	$view_img07 = set_view_img($img_view6);
	$view_img08 = set_view_img($img_view7);
	//宿舍文化图片
	$view_img21 = set_view_img($img_view8);
	$view_img22 = set_view_img($img_view9);
	$view_img23 = set_view_img($img_view10);
	$view_img24 = set_view_img($img_view11);
	
	//学生社团
	$view_img31 = set_view_img($img_view12);
	$view_img32 = set_view_img($img_view13);
	$view_img33 = set_view_img($img_view14);
	$view_img34 = set_view_img($img_view15);
	//体育健康
	$view_img41 = set_view_img($img_view16);
	$view_img42 = set_view_img($img_view17);
	$view_img43 = set_view_img($img_view18);
	$view_img44 = set_view_img($img_view19);
	$view_img45 = set_view_img($img_view20);
	$view_img46 = set_view_img($img_view21);

	$sql1 = 'select view_art_mes from view_art';
	$sql2 = 'select view_cul_mes from view_cul';
	$sql3 = 'select view_stu_mes from view_stu';
	$sql4 = 'select view_pe_mes from view_pe';	
	
	$view_art_mes = array();
	$view_cul_mes = array();
	$view_stu_mes = array();
	$view_pe_mes = array();
	$result = $mysqli->query($sql1);
	if ($result) {
	    if($result->num_rows>0){                                               //判断结果集中行的数目是否大于0
    		$i = 0;
	        while($row =$result->fetch_array() ){                        //循环输出结果集中的记录
	            	$view_art_mes[$i] = $row[0];
	            	$i++;
	            }
	         }
	} else {
	    echo "查询失败";
	}
	$result = $mysqli->query($sql2);
	if ($result) {
	    if($result->num_rows>0){                                               //判断结果集中行的数目是否大于0
    		$i = 0;
	        while($row =$result->fetch_array() ){                        //循环输出结果集中的记录
	            	$view_cul_mes[$i] = $row[0];
	            	$i++;
	            }
	         }
	} else {
	    echo "查询失败";
	}
	$result = $mysqli->query($sql3);
	if ($result) {
	    if($result->num_rows>0){                                               //判断结果集中行的数目是否大于0
    		$i = 0;
	        while($row =$result->fetch_array() ){                        //循环输出结果集中的记录
	            	$view_stu_mes[$i] = $row[0];
	            	$i++;
	            }
	         }
	} else {
	    echo "查询失败";
	}
	$result = $mysqli->query($sql4);
	if ($result) {
	    if($result->num_rows>0){                                               //判断结果集中行的数目是否大于0
    		$i = 0;
	        while($row =$result->fetch_array() ){                        //循环输出结果集中的记录
	            	$view_pe_mes[$i] = $row[0];
	            	$i++;
	            }
	         }
	} else {
	    echo "查询失败";
	}
	$result->free();
	$mysqli->close();



	//艺术文化内容
	$view_mes01 = set_view_mes($view_art_mes[0]);
	$view_mes02 = set_view_mes($view_art_mes[1]);
	$view_mes03 = set_view_mes($view_art_mes[2]);
	$view_mes04 = set_view_mes($view_art_mes[3]);
	$view_mes05 = set_view_mes($view_art_mes[4]);
	$view_mes06 = set_view_mes($view_art_mes[5]);
	$view_mes07 = set_view_mes($view_art_mes[6]);
	$view_mes08 = set_view_mes($view_art_mes[7]);
	//宿舍文化内容
	$view_mes21 = set_view_mes($view_cul_mes[0]);
	$view_mes22 = set_view_mes($view_cul_mes[1]);
	$view_mes23 = set_view_mes($view_cul_mes[2]);
	$view_mes24 = set_view_mes($view_cul_mes[3]);
	//学生社团内容
	$view_mes31 = set_view_mes($view_stu_mes[0]);
	$view_mes32 = set_view_mes($view_stu_mes[1]);
	$view_mes33 = set_view_mes($view_stu_mes[2]);
	$view_mes34 = set_view_mes($view_stu_mes[3]);
	//体育健康
	$view_mes41 = set_view_mes($view_pe_mes[0]);
	$view_mes42 = set_view_mes($view_pe_mes[1]);
	$view_mes43 = set_view_mes($view_pe_mes[2]);
	$view_mes44 = set_view_mes($view_pe_mes[3]);
	$view_mes45 = set_view_mes($view_pe_mes[4]);
	$view_mes46 = set_view_mes($view_pe_mes[5]);



?>