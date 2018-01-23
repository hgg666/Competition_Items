<?php
	/*轮播标题和图片*/
	$title1 = "汕头职业技术学院";
	$title2 = "知行合一,德技双馨";
	/*图片*/
	$row = "body_new_img";
	$table = "body_new";
	$condition = "order by body_new_date desc limit 0,3";
	$img1 = "conf/draw_picture.php?num=0&row=$row&table=$table&condition=$condition";
	$img2 = "conf/draw_picture.php?num=1&row=$row&table=$table&condition=$condition";
	$img3 = "conf/draw_picture.php?num=2&row=$row&table=$table&condition=$condition";
	/*近期消息*/
	$sql_title = "select body_new_title from body_new order by body_new_date desc limit 0,3";
	$sql_mes = "select body_new_mes from body_new order by body_new_date desc limit 0,3";
	$title = display_row($sql_title);
	$mes = display_row($sql_mes);
	$mes1 = $title[0];
	$mes3 = $title[1];
	$mes5 = $title[2];
	$mes2 = $mes[0];
	$mes4 = $mes[1];
	$mes6 = $mes[2];
	/*学院要闻*/ 
	$sql_new = "select distinct body_college_mes from body_college order by body_college_date desc limit 0,12";
	$sql_part = "select distinct body_part_mes from body_part order by body_part_date desc limit 0,10";
	$new = display_row($sql_new);
	$part = display_row($sql_part);
	$new1 = $new[0];
	$new2 = $new[1];
	$new3 = $new[2];
	$new4 = $new[3];
	$new5 = $new[4];
	$new6 = $new[5];
	$new7 = $new[6];
	$new8 = $new[7];
	$new9 = $new[8];
	$new10 = $new[9];
	$new11 = $new[10];
	$new12 = $new[11];
	$new13 = $part[0];
	$new14 = $part[1];
	$new15 = $part[2];
	$new16 = $part[3];
	$new17 = $part[4];
	$new18 = $part[5];
	$new19 = $part[6];
	$new20 = $part[7];
	$new21 = $part[8];
	$new22 = $part[9];


	/*学院要闻链接*/
	$new_link1 = "mes/new_mes1.php";
	$new_link2 = "mes/new_mes2.php";
	$new_link3 = "mes/new_mes3.php";
	$new_link4 = "mes/new_mes4.php";
	$new_link5 = "mes/new_mes5.php";
	$new_link6 = "mes/new_mes6.php";
	$new_link7 = "mes/new_mes7.php";
	$new_link8 = "mes/new_mes8.php";
	$new_link9 = "mes/new_mes9.php";
	$new_link10 = "mes/new_mes10.php";
	$new_link11 = "mes/new_mes11.php";
	$new_link12 = "mes/new_mes12.php";
	$new_link13 = "mes/part_mes1.php";
	$new_link14 = "mes/part_mes2.php";
	$new_link15 = "mes/part_mes3.php";
	$new_link16 = "mes/part_mes4.php";
	$new_link17 = "mes/part_mes5.php";
	$new_link18 = "mes/part_mes6.php";
	$new_link19 = "mes/part_mes7.php";
	$new_link20 = "mes/part_mes8.php";
	$new_link21 = "mes/part_mes9.php";
	$new_link22 = "mes/part_mes10.php";
	/*通知标题*/
	$sql_mes2 = "select body_mes_mes from  body_mes order by body_mes_date desc limit 0,4";
	$sql_mes3 = "select body_mes_title from  body_mes order by body_mes_date desc limit 0,4";
	$body_mes = display_row($sql_mes2);
	$title_mes = display_row($sql_mes3);
	$mes_title1 = $title_mes[0];
	$mes_title2 = $title_mes[1];
	$mes_title3 = $title_mes[2];
	$mes_title4 = $title_mes[3];
	$mes_body1 = $body_mes[0];
	$mes_body2 = $body_mes[1];
	$mes_body3 = $body_mes[2];
	$mes_body4 = $body_mes[3];



?>