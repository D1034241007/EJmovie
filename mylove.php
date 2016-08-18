<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>我的最愛</title>
	<script src="https://use.fontawesome.com/caa469a06e.js"></script>
	<link rel="shortcut icon" href="http://imageshack.com/a/img924/8909/kRPNSE.png">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <!-- 最新編譯和最佳化的 CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">
    <!-- 選擇性佈景主題 -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap-theme.min.css">
    <!-- 最新編譯和最佳化的 JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
    <style>
        body{
            /*font-size:16px;*/
			font-family:'微軟正黑體';
        }
        #mid {
           // border:1px solid #ff0000;
            display: block;
            margin: 7.5em auto;
            width: 21.5em;
            height: 20em;
        }

        ul {
            margin: 0;
            padding: 0;
            list-style: none;
        }
		 .m21{
            float:left;
            margin:20px;
        }
		 #m2 {
            /*border: 1px solid ;*/
            font-size: 18px;
            float:left;
            margin:0px 15% 0px 15%;
        }
    </style>
</head>
<body>
    <div id="all">
        <div id="top">
            <nav class="navbar navbar-inverse" role="navigation">
                <div class="container-fluid">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="#">Enjoy My Movie life</a>
                    </div>
                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        
                        <form class="navbar-form navbar-left" role="search">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Search" style="width:12em; display:inline-block;">
                                <button type="submit" class="btn btn-default">
                                    <span class="glyphicon glyphicon-search" aria-hidden="true"></span>
                                </button>
                            </div>
                        </form>
						
                        <ul class="nav navbar-nav navbar-right" style=";">
							<li><a href="home.html">HOME</a></li>
                            <li><a href="informationmove.html">排行榜</a></li>
                            <li><a href="ttt.php">類別</a></li>
							<li><a href="moveinformation.html">電影情報站</a></li>
<li><a href="sign.html"><i class="fa fa-sign-out fa-1x" aria-hidden="true"></i> 登出</a></li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-user fa-1x" aria-hidden="true"></i> 使用者 <span class="caret"></span></a>
                                <ul class="dropdown-menu" role="menu">
                                    <li><a href="information.html"><i class="fa fa-cog fa-1x" aria-hidden="true"></i> 基本資料</a></li>
                                    <li><a href="mylove.php"><i class="fa fa-heart fa-1x" aria-hidden="true"></i> 我的最愛</li></a></li>
                                    <li><a href="history.php"><i class="fa fa-paw fa-1x" aria-hidden="true"></i> 歷史紀錄</a></li>
									<li><a href="later.php"><i class="fa fa-clock-o fa-1x" aria-hidden="true"></i> 稍後觀看</a></li>
									<li><a href="inform.php"><i class="fa fa-envelope fa-1x" aria-hidden="true"></i> 通知</a></li>
									<!--<li class="divider"></li>-->
                                </ul>
                        </ul>
                    </div><!-- /.navbar-collapse -->
                </div><!-- /.container-fluid -->
            </nav>
        </div>
		 <div id="m1" style="font-size:20px; text-align:center;">
               <i class="fa fa-heart fa-fw" aria-hidden="true" style="color:#f00; "></i> 我的最愛
               
				<button type="button"style="margin-left:40%; font-size:15px; width:80px;">變更</button>
		</div>
                
		<hr />
		<div id="m2" style="align:center">
              <?php
				require_once "movie.php";
				$mysqli = new db;
				$db = "`movie`";
				$field=array("`VIDEO`","`MONAME`");
				$condition=("%'$_POST[MONAME]'%");
				$mysqli->sql_favorite($db,$field,$condition);
				//header("location:");
				?>   
              
         </div>
    </div>
</body>
</html>