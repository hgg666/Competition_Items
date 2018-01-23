<?php

  function display_row($sql)
  {
    $mes = array();
    require('pub/content.php');
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