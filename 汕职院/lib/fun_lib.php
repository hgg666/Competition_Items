<?php
  /*建立卡片*/
	function set_cult_mes($title,$mes)
	{
    	return "<div class='card-mes'><h2>".$title."</h2>".$mes."</div>";
  	}
  	function set_work_mes($date,$title,$mes,$h_num)
	{
		return "<div><".$h_num.">".$title."</".$h_num."><p>".$date."</p>".$mes."</div>";
	}
	function set_leader_mes($leader_img,$leader_name,$leader_mes)
	{
		return"<div class='media-pic'>
      <div class='media' >
        <a class='media-left' href='#'>
          <img class='circle' data-src='holder.js/300x300'  src='".$leader_img."' alt='present_1'></a>
        <div class='media-body'>
          <h3 class='media-heading hidden-xs media-text' >".$leader_name."</h3>
          <p class='hidden-xs media-text' >".$leader_mes."</p>
        </div>
        <div class='visible-xs media-vi'>
          <h3 class='media-heading' >".$leader_name."</h3>
          <p class=''>".$leader_mes."</p>
        </div>
      </div>
    </div>";
	}

  function set_campus_card($campus_img){
    return "<img src='".$campus_img."' class='img-responsive' alt='error' >";
  }

  function set_view_img($path,$mes=""){
    return "<a class='media' href='#'><img  class='img-responsive'  src='".$path."' alt='error'>".$mes."</a>";
  }

  function set_view_mes($mes,$mark = "p"){
    return "<".$mark.">".$mes."</".$mark.">";
  }

  function set_view_head($mes,$num = "4"){
    return  "<h".$num." class='media-heading'>".$mes."</h".$num.">";
  }

  function display_row($sql)
  {
    $mes = array();
    require('conf/content.php');
    $result = $mysqli->query($sql);
    if ($result) {
        if($result->num_rows>0){                                               //判断结果集中行的数目是否大于0
          $i = 0;
            while($row =$result->fetch_array() ){                        //循环输出结果集中的记录
                  $mes[$i] = $row[0];
                  $i++;
                }
             }
    } else {
        echo "查询失败";
    }
    $result->free();
    $mysqli->close();
    return $mes;
  }

?>