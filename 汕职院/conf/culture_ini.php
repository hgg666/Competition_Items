<?php
	$sql = "select * from culture limit 0,8";
	$result = $mysqli->query($sql);
	$part = array();
	$mes = array();
	if ($result) {
	    if($result->num_rows>0){                                               //判断结果集中行的数目是否大于0
    		$i = 0;
	        while($row =$result->fetch_array() ){                        //循环输出结果集中的记录
	            	$part[$i] = $row[0];
	            	$mes[$i] = $row[1];
	            	$i++;
	            }
	         }
	} else {
	    echo "查询失败";
	}
	$result->free();
	$mysqli->close();
	
  $card1 = set_cult_mes($part[0],$mes[0]);
  $card2 = set_cult_mes($part[1],$mes[1]);
  $card3 = set_cult_mes($part[2],$mes[2]);
  $card4 = set_cult_mes($part[3],$mes[3]);
  $card5 = set_cult_mes($part[4],$mes[4]);
  $card6 = set_cult_mes($part[5],$mes[5]);
  $card7 = set_cult_mes($part[6],$mes[6]);
  $card8 = set_cult_mes($part[7],$mes[7]);
?> 