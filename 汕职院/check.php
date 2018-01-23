<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<?php
			$user = @$_POST['user'];
			$passwd = @$_POST['passwd'];
			if ((!isset($user))||(!isset($passwd))) {
				echo "密码或用户未填写请重新输入";
				exit;
			} else {
			// 连接数据库
			$mysql = @mysqli_connect("localhost","root","");
			if (!$mysql) {
				echo "无法与数据库建立连接!";
				exit;
			}
			//选择数据库
			$selected = mysqli_select_db($mysql,"szy");
			if (!$selected) {
				echo "无法选择数据库!";
				exit;
			}
			//选择要查询的语句
			$query = "select count(*) from szy_users where name ='"."$user"."' and password = sha1('".$passwd."')";	
			$result = mysqli_query($mysql,$query);
			if (!$result) {
				echo "无此用户或密码错误";
				exit;
			}
			$row = mysqli_fetch_row($result);
			$count = $row[0];
			if ($count > 0) {
				//连接成功
				echo "登陆成功";
				echo "<script>location.href = 'http://localhost/phpmyadmin'</script>";
			} else {
				echo "登陆失败 无此用户或密码错误";
				echo "<script>location.href = 'http://localhost/szy/login.php'</script>";
			}		
		}
	?>
	
</body>
</html>