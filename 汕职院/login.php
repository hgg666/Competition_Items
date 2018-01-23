<!-- 页头1 -->
<!DOCTYPE html>
<html lang="zh-cn">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>汕头职业技术学院</title>
	<!-- Bootstrap -->
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/login.css" rel="stylesheet">
	<!-- 页头2 -->
	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
	<script src="http://cdn.bootcss.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	<script src="http://cdn.bootcss.com/respond.js/1.4.2/respond.min.js"></script>
	<![endif]-->
</head>
<body>
	<div class="container">
		<div class="row">
			<br>
			<br>
			<br>
			<br>
			<div class="col-lg-5 col-lg-offset-3 col-md-5 col-md-offset-3 col-sm-7 col-sm-offset-3 col-xs-6 col-xs-offset-3">
				<div class="panel panel-info">
					<div class="panel-heading">汕头职业技术学院管理系统</div>
					<div class="panel-body">
						<br>
						<form class="form-horizontal" action="check.php" method="post" role="form">
							<div class="form-group">
								<label for="inputUser" class="col-sm-3 col-sm-offset-1 control-label">账户:</label>
								<div class="col-sm-5">
									<input type="text" class="form-control" id="inputUser" placeholder="账户" name="user">
									</div>
									<div class="col-sm-3" id="mes1"></div>
							</div>
							<div class="form-group">
								<label for="inputPassword" class="col-sm-3 col-sm-offset-1 control-label">密码:</label>
								<div class="col-sm-5">
									<input type="password" class="form-control" id="inputPassword" placeholder="密码" name="passwd"></div>
									<div class="col-sm-3" id="mes2"></div>
							</div>
							<div class="form-group">
								<div class="col-sm-offset-6 col-sm-5">
									<button id="submit" type="submit" class="btn btn-info">登陆</button>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
	<script src="js/jquery.min.js"></script>
	<!-- Include all compiled plugins (below), or include individual files as needed -->
	<script src="js/bootstrap.min.js"></script>
	<script src="js/login.js"></script>
</body>
</html>