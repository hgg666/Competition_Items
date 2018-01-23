<?php
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
?>