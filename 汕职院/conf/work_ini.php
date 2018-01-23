<?php

	$sql = "select * from work limit 0,10";
	$result = $mysqli->query($sql);
	$time = array();
	$title = array();
	$mes = array();
	if ($result) {
	    if($result->num_rows>0){                                               //判断结果集中行的数目是否大于0
    		$i = 0;
	        while($row =$result->fetch_array() ){                        //循环输出结果集中的记录
	            	$time[$i] = $row[0];
	            	$title[$i] = $row[1];
	            	$mes[$i] = $row[2];
	            	$i++;
	            }
	         }
	} else {
	    echo "查询失败";
	}
	$result->free();
	$mysqli->close();

	$work_mes1 = set_work_mes($time[0],$title[0],$mes[0],"h2");
	$work_mes2 = set_work_mes($time[1],$title[1],$mes[1],"h2");
	$work_mes3 = set_work_mes($time[2],$title[2],$mes[2],"h2");
	$work_mes4 = set_work_mes($time[3],$title[3],$mes[3],"h2");
	$work_mes5 = set_work_mes($time[4],$title[4],$mes[4],"h2");
	$work_mes6 = set_work_mes($time[5],$title[5],$mes[5],"h2");
	$work_smes1 = set_work_mes($time[6],$title[6],$mes[6],"h3");
	$work_smes2 = set_work_mes($time[7],$title[7],$mes[7],"h3");
	$work_smes3 = set_work_mes($time[8],$title[8],$mes[8],"h3");
?>