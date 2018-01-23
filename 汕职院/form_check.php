<?php
	header('Content-type:text/html;charset=utf-8');

	$user = $_POST['user'];
	$passwd = $_POST['passwd'];
	$mes1 = "";
	$mes2 = "";
	if (empty($user)) {
		$mes1 = "未输入账户";
	} else {
		$num1 = preg_match('/^\w{3,15}$/', $user);	
		if (!$num1) {
			$mes1 = "用户长度为3-15个单词或数字";
		}
	}
	if (empty($passwd)) {
		$mes2 = "未输入密码";
	}
	$arr = array("name"=>$mes1,"passwd"=>$mes2);
	echo json_encode($arr);
?>