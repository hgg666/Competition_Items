<!-- 页头2 -->
  <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->  
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->  
  <!--[if lt IE 9]>  
  <script src="http://cdn.bootcss.com/html5shiv/3.7.2/html5shiv.min.js"></script>
  <script src="http://cdn.bootcss.com/respond.js/1.4.2/respond.min.js"></script>
  <![endif]--> </head>
  <body>
  <!-- 页头 -->  
  <div class="page-header">
    <h1>
      &nbsp;
      <!-- logo -->  
      <a href="index.php">
        <img src="img/logo.png" alt="logo" class="logo"></a>
      汕头职业技术学院
      <!-- 下标 -->  
      <small class="visible-md-inline-block visible-lg-inline-block">知行合一,德技双馨</small>
      <!-- 搜索框 -->  
      <form class="navbar-form navbar-right hidden-xs" role="search">
        <div class="form-group">
          <input type="text" class="form-control" id="searchMes" placeholder="搜索">  
          <button type="submit" class="btn btn-default" id="search">
            <span class="glyphicon glyphicon-search"></span>
          </button>
        </div>
      </form>
    </h1>
  </div>
  <!-- 网站导航 -->  
  <nav class="navbar navbar-default" role="navigation">
    <div class="container-fluid">
      <!-- Brand and toggle get grouped for better mobile display -->  
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
      </div>

      <!-- Collect the nav links, forms, and other content for toggling -->  
      <!-- 主导航 导航条的容器-->  
      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav">
          <!-- 一级导航,学院首页 -->  
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              学院首页
              <span class="caret"></span>
            </a>
            <!-- 二级导航 -->  
            <ul class="dropdown-menu" role="menu">
              <li>
                <a href="brief.php">学院简介</a>
              </li>
              <li>
                <a href="leader.php">现任领导</a>
              </li>
              <li>
                <a href="culture.php">校园文化</a>
              </li>
              <li>
                <a href="campus.php">校区风景</a>
              </li>
              <li>
                <a href="view.php">院系设置</a>
              </li>
              <li>
                <a href="#" data-toggle="modal" data-target="#myModal">机构设置</a>
              </li>
              <li>
                <a href="#" data-toggle="modal" data-target="#myModal">师资情况</a>
              </li>
              <li>
                <a href="#" data-toggle="modal" data-target="#myModal">交通引导</a>
              </li>
              <li>
                <a href="#" data-toggle="modal" data-target="#myModal">规章制度</a>
              </li>
            </ul>
          </li>
          <!-- 一级导航,新闻中心 -->  
          <li class="dropdown">
            <a href="#"  class="dropdown-toggle" data-toggle="dropdown">
              新闻中心
              <span class="caret"></span>
            </a>
            <!-- 二级导航 -->  
            <ul class="dropdown-menu" role="menu">
              <li>
                <a href="work.php">工作简报</a>
              </li>
              <li>
                <a href="#" data-toggle="modal" data-target="#myModal">学院院报</a>
              </li>
              <li>
                <a href="#" data-toggle="modal" data-target="#myModal">汕职院 青年</a>
              </li>
            </ul>
          </li>
          <!-- 一级导航,教学管理 -->  
          <li class="dropdown">
            <a href="#"  class="dropdown-toggle" data-toggle="dropdown">
              教学管理
              <span class="caret"></span>
            </a>
            <!-- 二级导航 -->  
            <ul class="dropdown-menu" role="menu">
              <li>
                <a href="#" data-toggle="modal" data-target="#myModal">教务处</a>
              </li>
              <li>
                <a href="#" data-toggle="modal" data-target="#myModal">教学督导室</a>
              </li>
              <li>
                <a href="#" data-toggle="modal" data-target="#myModal">教务管理系统</a>
              </li>
              <li>
                <a href="#" data-toggle="modal" data-target="#myModal">技能实训</a>
              </li>
              <li>
                <a href="#" data-toggle="modal" data-target="#myModal">精品课程</a>
              </li>
            </ul>
          </li>
          <!-- 一级导航,学术研究 -->  
          <li class="dropdown">
            <a href="#"  class="dropdown-toggle" data-toggle="dropdown">
              学术科研
              <span class="caret"></span>
            </a>
            <!-- 二级导航 -->  
            <ul class="dropdown-menu" role="menu">
              <li>
                <a href="#" data-toggle="modal" data-target="#myModal">科研设备处</a>
              </li>
              <li>
                <a href="#" data-toggle="modal" data-target="#myModal">高职教育研究所</a>
              </li>
              <li>
                <a href="#" data-toggle="modal" data-target="#myModal">南方职业教育学刊</a>
              </li>
            </ul>
          </li>
          <!-- 一级导航,招生就业 -->  
          <li class="dropdown">
            <a href="#"  class="dropdown-toggle" data-toggle="dropdown">
              招生就业
              <span class="caret"></span>
            </a>
            <!-- 二级导航 -->  
            <ul class="dropdown-menu" role="menu">
              <li>
                <a href="#" data-toggle="modal" data-target="#myModal">招生信息网</a>
              </li>
              <li>
                <a href="#" data-toggle="modal" data-target="#myModal">就业信息网</a>
              </li>
            </ul>
          </li>
          <!-- 一级导航,学生工作 -->  
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              学生工作
              <span class="caret"></span>
            </a>
            <!-- 二级导航 -->  
            <ul class="dropdown-menu" role="menu">
              <li>
                <a href="#" data-toggle="modal" data-target="#myModal">学生工作处</a>
              </li>
              <li>
                <a href="#" data-toggle="modal" data-target="#myModal">团委会</a>
              </li>
              <li>
                <a href="#" data-toggle="modal" data-target="#myModal">心理健康教育中心</a>
              </li>
            </ul>
          </li>
          <!-- 一级导航,党建信息平台,手机模式下隐藏 -->  
          <li class="hidden-sm">
            <a href="#" data-toggle="modal" data-target="#myModal">党建信息平台</a>
          </li>
          <!-- 一级导航,信息公开,手机模式下隐藏 -->  
          <li class="hidden-sm">
            <a href="#" data-toggle="modal" data-target="#myModal">信息公开</a>
          </li>
        </ul>
      </div>
      <!-- /.navbar-collapse --> </div>
    <!-- /.container-fluid --> </nav>