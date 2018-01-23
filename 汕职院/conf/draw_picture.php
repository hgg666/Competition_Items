<?php
	header('Content-type:image/jpg');
 	require('content.php');
 	$row = $_GET['row'];
 	$table = $_GET['table'];
 	$condition = $_GET['condition'];
	$sql = "select ".$row." from ".$table." ".$condition;
	$result = $mysqli->query($sql);
	$img = array();
	if ($result) {
	    if($result->num_rows>0){                                               //判断结果集中行的数目是否大于0
    		$i = 0;
	        while($row =$result->fetch_array() ){                        //循环输出结果集中的记录
	            	$img[$i] = $row[0];
	            	$i++;
	            }
	         }
	} else {
	    echo "查询失败";
	}
	$result->free();
	$mysqli->close();
	$num = $_GET['num'];
	echo $img[$num];
?>