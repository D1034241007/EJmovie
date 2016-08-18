
<!DOCTYPE html>
	<html xmlns="http://www.w3.org/1999/xhtml">
	<title>類別</title>
	<meta name="viewport" http-equiv="Content-Type" content="text/html; charset=utf-8">
	<link rel="stylesheet" type="text/css" href="w3.css">
<!--  <link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css"> -->

    <head>
	
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
			font-family:"微軟正黑體";
        }
        #mid {
            /*border:1px solid #ff0000;*/
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

	
	#main_content{
		text-align:center;
		border: 1px solid ;
		position:fixed;
		top: 100px;
		width: 100%;
		}
	
	
	#h1{font-size:35px;
	    color:#000;			
				}
	
	</style>
	<script>
// Script to open and close sidenav
function w3_open() {
    document.getElementById("mySidenav").style.display = "block";
    document.getElementById("myOverlay").style.display = "block";
}
 
function w3_close() {
    document.getElementById("mySidenav").style.display = "none";
    document.getElementById("myOverlay").style.display = "none";
}
</script>
	
    
	</head>

<body class="w3-light-grey w3-content" style="max-width:2500px">

<!-- Overlay effect when opening sidenav on small screens -->
<div class="w3-overlay w3-hide-large w3-animate-opacity" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>

			<!-- User input -->
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
                                    <li><a href="mylove.php"><i class="fa fa-heart fa-1x" aria-hidden="true"></i> 我的最愛</a></li>
                                    <li><a href="history.php"><i class="fa fa-paw fa-1x" aria-hidden="true"></i> 歷史紀錄</a></li>
									<li><a href="later.php"><i class="fa fa-clock-o fa-1x" aria-hidden="true"></i> 稍後觀看</a></li>
									<li><a href="inform.php"><i class="fa fa-envelope fa-1x" aria-hidden="true"></i> 通知</a></li>
									
									<!--<li class="divider"></li>-->
                                </ul>
							</li>
                        </ul>
                    </div><!-- /.navbar-collapse -->
                </div><!-- /.container-fluid -->
            </nav>
        </div>

<!-- !PAGE CONTENT! -->
<div class="w3-main" style="margin-left:20px">

  
 
      <img src="http://imagizer.imageshack.us/a/img924/8909/kRPNSE.png"> <span  style="font-size:30px;">類別</span>	
	  <hr/>
		<!--<button class="w3-btn w3-white" onclick="location.href='category.php?test=0'">類別</button>-->
		<button  style="width:70px; font-size:20px;" onclick="location.href='ttt.php?test=1'">動作</button>
		<button  style="width:70px; font-size:20px;" onclick="location.href='ttt.php?test=2'">愛情</button>
		<button style="width:70px; font-size:20px;" onclick="location.href='ttt.php?test=3'">喜劇</button>
		<button style="width:70px; font-size:20px;" onclick="location.href='ttt.php?test=4'">恐怖</button>
		<button style="width:70px; font-size:20px;" onclick="location.href='ttt.php?test=5'">劇情</button>
		<!--<button class="w3-btn w3-white" onclick="location.href='category.php?test=6'">其他</button>-->
    


		
  <br></br>
	<?php 
		$c = 0;
		if(isset($_GET["test"])) {
			$c = $_GET["test"];
		} 
	?>
	
	<?php
	$DB_IP = "127.0.0.1";
	$DB_USER = "xuan";
	$DB_PASSWARD = "0312";
	$link = mysqli_connect($DB_IP , $DB_USER , $DB_PASSWARD);
	if (!$link) {
		die('Connect Error: ' . mysqli_connect_error());
	}
	mysqli_select_db($link,"member") or die("找不到資料庫");
	mysqli_query("set names 'utf8'");
	
	if ($c == 1)
		$sql = "SELECT * FROM `movie` WHERE `CLASS`='動作'";
	elseif ($c == 2)
		$sql = "SELECT * FROM `movie` where `CLASS` ='愛情'";
	elseif ($c == 3)
		$sql = "SELECT * FROM `movie` where `CLASS` ='喜劇'";
	elseif ($c == 4)
		$sql = "SELECT * FROM `movie` where `CLASS` ='恐怖'";
	elseif ($c == 5)
		$sql = "SELECT * FROM `movie` where `CLASS` ='劇情'";
	elseif ($c == 6)
		$sql = "SELECT * FROM `movie` where `CLASS` ='其他'";
	
		
	$result = mysqli_query( $link,$sql );
	$total_records=mysqli_num_rows($result);
	
	$n=0;
	
	while( $row = mysqli_fetch_array($result)){
	$list_mid[$n] = $row['MOVID'];
	$list_mname[$n] = $row['MONAME'];
	$list_mclass[$n] = $row['CLASS'];
	$list_img[$n] = $row['IMAGE'];
	$list_html[$n]=$row['HTML'];
//	echo '<img width="100px" src="data:image/jpeg;base64,'.base64_encode( $img ).'"/>';
	$n++;
	}
	
  
	//while( $row = mysqli_fetch_assoc($result)){
	//echo $row["MOVID"];
	//echo $row["MONAME"];
	//echo $row["CLASS"];
	//$img = $row['IMG'];
	//echo '<img width="100px" src="data:image/jpeg;base64,'.base64_encode( $img ).'"/>';

	//}
	mysqli_close($link);
	?>

  
	
	
	<?php
		if($c != 0){
		$a=0;
		for ($i=0 ; $i<$total_records ; $i++){?>
				<div align="center">				
				<div class="w3-row-padding" style="width:90%" align="center">
				<?php for ($j=0 ; $j<5; $j++){ ?>
					
					<div class="w3-fives w3-container w3-margin-bottom" >
				<!--		<a href="move.html"><img src="https://img1.doubanio.com/view/movie_poster_cover/lpst/public/p2267508677.jpg" alt="Norway" style="width:100%" class="w3-hover-opacity"></a>-->
							<a href="<?php echo $list_html[$a]; ?>"><?php echo '<img width="60%" src="data:image/jpeg;base64,'.base64_encode( $list_img[$a] ).'"/>'; ?></a>
						<div class="w3-container w3-white">
							<p><b><?php echo $list_mname[$a]; ?></b></p>
						</div>
					</div>
					<?php $a++;
						  //$total_records-=1;
						  if($a == $total_records)
							  break;
				}?>
				</div>
				</div>
			
		<?php	
			if($a == $total_records)
				break;	
			} 
		}
		else{?>
		
		  <header class="w3-container">
    

		<!-- Player -->

    
	  <font face="標楷體"><h2>動作</h2></font>
  </header>

		
  <br></br>

	
<div  align="center">
	
	<div class="w3-row-padding" style="width:90%" align="center">
			<div class="w3-fives w3-container w3-margin-bottom">
				<a href="MoleofLifemovie.html"><img src="http://farm2.staticflickr.com/1488/25702531535_0e0fdd7e8b_b.jpg" alt="Norway" style="width:100%" class="w3-hover-opacity"></a>
				<div class="w3-container w3-white">
					<p><b>黑白</b></p>
				</div>
			</div>
			<div class="w3-fives w3-container w3-margin-bottom">
				<a href="BlackWhite1movie.html"><img src="http://pic.pimg.tw/josephshih/1326563037-2131856483.jpg" alt="Norway" style="width:100%" class="w3-hover-opacity"></a>
				<div class="w3-container w3-white">
					<p><b>痞子英雄1：全面開戰</b></p>
				</div>
			</div>
			<div class="w3-fives w3-container w3-margin-bottom">
				<a href="	
BlackWhite2movie.html"><img src="http://pic.pimg.tw/allen201242002/1413739243-2580580097.jpg" alt="Norway" style="width:100%" class="w3-hover-opacity"></a>
				<div class="w3-container w3-white">
					<p><b>痞子英雄2：黎明再起</b></p>
				</div>
			</div>
			<div class="w3-fives w3-container w3-margin-bottom">
				<a href="JASONBOURNEmovie.html"><img src="https://www.miramarcinemas.com.tw/db/web/upload/movie/201606221523294.jpg" alt="Norway" style="width:100%" class="w3-hover-opacity"></a>
				<div class="w3-container w3-white">
					<p><b>神鬼認證：傑森包恩</b></p>
				</div>
			</div>
			<div class="w3-fives w3-container">
				<a href="BenHurmovie.html"><img src="http://www.photowant.com/photo101/fben22638144/pl_fben22638144_0004.jpg" alt="Norway" style="width:100%" class="w3-hover-opacity"></a>
				<div class="w3-container w3-white">
					<p><b>賓漢</b></p>
				</div>
			</div>
	</div>
</div>
	<header class="w3-container">
   

		<!-- Player -->

     <div id="h1"> <font face="標楷體"></span></font>

    </div>
	  <font face="標楷體"><h2>愛情</h2></font>
  </header>

		
  <br></br>
	
	<div  align="center">
	
	<div class="w3-row-padding" style="width:90%" align="center">
			<div class="w3-fives w3-container w3-margin-bottom">
				<a href="MyEyemovie.html
"><img src="http://1.blog.xuite.net/1/3/9/c/12196164/blog_56633/txt/65312011/10.jpg" alt="Norway" style="width:100%" class="w3-hover-opacity"></a>
				<div class="w3-container w3-white">
					<p><b>那些年，我們一起追的女孩</b></p>
				</div>
			</div>
			<div class="w3-fives w3-container w3-margin-bottom">
				<a href="Julietsmovie.html
"><img src="https://upload.wikimedia.org/wikipedia/zh/f/fe/%E8%8C%B1%E9%BA%97%E8%91%89.jpg" alt="Norway" style="width:100%" class="w3-hover-opacity"></a>
				<div class="w3-container w3-white">
					<p><b>茱麗葉</b></p>
				</div>
			</div>
			<div class="w3-fives w3-container w3-margin-bottom">
				<a href="FirstLovemovie.html
"><img src="http://iphoto.ipeen.com.tw/photo/comment/201011/cm20101119a8e7cd7b1fb4af5e47ee32fb7b219999460.jpg" alt="Norway" style="width:100%" class="w3-hover-opacity"></a>
				<div class="w3-container w3-white">
					<p><b>初戀風暴</b></p>
				</div>
			</div>
			<div class="w3-fives w3-container w3-margin-bottom">
				<a href="ThisSummerFeelingmovie.html"><img src="http://www.maisonmotion.com/wp-content/uploads/2016/07/%E5%A4%8F%E6%97%A5%E6%83%85%E4%BA%8B_%E4%B8%AD%E6%96%87%E6%B5%B7%E5%A0%B1-resized.jpg" alt="Norway" style="width:100%" class="w3-hover-opacity"></a>
				<div class="w3-container w3-white">
					<p><b>夏日情事</b></p>
				</div>
			</div>
			<div class="w3-fives w3-container">
				<a href="MyEggBoymovie.html"><img src="http://img.vogue.com.tw/userfiles/FCK/2016061357090001.jpg" alt="Norway" style="width:100%" class="w3-hover-opacity"></a>
				<div class="w3-container w3-white">
					<p><b>我的蛋男情人</b></p>
				</div>
			</div>
		</div>
	</div>

		<header class="w3-container">
   

		<!-- Player -->

     <div id="h1"> <font face="標楷體"></span></font>

    </div>
	  <font face="標楷體"><h2>喜劇</h2></font>
  </header>

		
  <br></br>
	
	<div  align="center">
	
	<div class="w3-row-padding" style="width:90%" align="center">
			<div class="w3-fives w3-container w3-margin-bottom">
				<a href="DavidLomanmovie.html"><img src="http://pic.pimg.tw/hiroking/1359996224-4137598160.jpg?v=1359996233" alt="Norway" style="width:100%" class="w3-hover-opacity"></a>
				<div class="w3-container w3-white">
					<p><b>大尾鱸鰻</b></p>
				</div>
			</div>
			<div class="w3-fives w3-container w3-margin-bottom">
				<a href="DavidLoman2movie.html"><img src="https://upload.wikimedia.org/wikipedia/zh/thumb/f/f9/David_Loman2.jpg/220px-David_Loman2.jpg" alt="Norway" style="width:100%" class="w3-hover-opacity"></a>
				<div class="w3-container w3-white">
					<p><b>大尾鱸鰻2</b></p>
				</div>
			</div>
			<div class="w3-fives w3-container w3-margin-bottom">
				<a href="LIONDANCINGmovie.html"><img src="http://p1-pool.yamedia.tw/MjUxNzA4MjBwb29s/b7152e0b6d1dc111.jpg" alt="Norway" style="width:100%" class="w3-hover-opacity"></a>
				<div class="w3-container w3-white">
					<p><b>鐵獅玉玲瓏</b></p>
				</div>
			</div>
			<div class="w3-fives w3-container w3-margin-bottom">
				<a href="TheMostBeautifulDaymovie.html
"><img src="http://www.photowant.com/photo101/fden55154896/pl_fden55154896_0002.jpg" alt="Norway" style="width:100%" class="w3-hover-opacity"></a>
				<div class="w3-container w3-white">
					<p><b>最酷的一天</b></p>
				</div>
			</div>
			<div class="w3-fives w3-container">
				<a href="NineLives.html"><img src="http://p1-pool.yamedia.tw/MjY5Mjk4MjRwb29s/75f57108d5b8c84a.jpg" alt="Norway" style="width:100%" class="w3-hover-opacity"></a>
				<div class="w3-container w3-white">
					<p><b>我的老爸喵星人</b></p>
				</div>
			</div>
		</div>
	</div>
	
		<header class="w3-container">
    

		<!-- Player -->

     <div id="h1"> <font face="標楷體"></span></font>

    </div>
	  <font face="標楷體"><h2>恐怖</h2></font>
  </header>

		
  <br></br>
	
	<div  align="center">
	
	<div class="w3-row-padding" style="width:90%" align="center">
			<div class="w3-fives w3-container w3-margin-bottom">
				<a href="LightsOutmovie.html"><img src="http://s.nownews.com/media_crop/120162/hash/5a/98/5a98913c997e6af800536602ac1814e7.jpg" alt="Norway" style="width:100%" class="w3-hover-opacity"></a>
				<div class="w3-container w3-white">
					<p><b>鬼關燈</b></p>
				</div>
			</div>
			<div class="w3-fives w3-container w3-margin-bottom">
				<a href="TheTagAlongmovie.html"><img src="http://tavis.tw/ezfiles/0/1000/img/64/118899262.jpg" alt="Norway" style="width:100%" class="w3-hover-opacity"></a>
				<div class="w3-container w3-white">
					<p><b>紅衣小女孩</b></p>
				</div>
			</div>
			<div class="w3-fives w3-container w3-margin-bottom">
				<a href="Silkmovie.html"><img src="https://upload.wikimedia.org/wikipedia/zh/thumb/6/6b/%E8%A9%AD%E7%B5%B2.jpg/220px-%E8%A9%AD%E7%B5%B2.jpg" alt="Norway" style="width:100%" class="w3-hover-opacity"></a>
				<div class="w3-container w3-white">
					<p><b>詭絲</b></p>
				</div>
			</div>
			<div class="w3-fives w3-container w3-margin-bottom">
				<a href="TheBridemovie.html"><img src="http://pic.pimg.tw/dinosaurs/1439785851-2440298538.jpg" alt="Norway" style="width:100%" class="w3-hover-opacity"></a>
				<div class="w3-container w3-white">
					<p><b>屍憶</b></p>
				</div>
			</div>
			<div class="w3-fives w3-container">
				<a href="margan.html"><img src="https://images2.gamme.com.tw/news2/2016/05/00/q52Yn6WVj6eXrg.jpg" alt="Norway" style="width:100%" class="w3-hover-opacity"></a>
				<div class="w3-container w3-white">
					<p><b>魔詭</b></p>
				</div>
			</div>
		</div>
	</div>
	
		<header class="w3-container">
   

		<!-- Player -->

     <div id="h1"> <font face="標楷體"></span></font>

    </div>
	  <font face="標楷體"><h2>劇情</h2></font>
  </header>

		
  <br></br>
	
	<div  align="center">
	
	<div class="w3-row-padding" style="width:90%" align="center">
			<div class="w3-fives w3-container w3-margin-bottom">
				<a href="StepBacktoGlorymovie.html"><img src="https://upload.wikimedia.org/wikipedia/zh/3/32/%E5%BF%97%E6%B0%A3%E9%9B%BB%E5%BD%B1%E6%B5%B7%E5%A0%B1.jpg" alt="Norway" style="width:100%" class="w3-hover-opacity"></a>
				<div class="w3-container w3-white">
					<p><b>志氣</b></p>
				</div>
			</div>
			<div class="w3-fives w3-container w3-margin-bottom">
				<a href="TheForemovie.html"><img src="http://www.cycling-update.info/uploads/02_market/02_industry-news/20150616_L/%E7%A0%B4%E9%A2%A8%E6%B5%B7%E5%A0%B1_%E4%B8%89%E4%BA%BA%E7%89%88_finals.jpg" alt="Norway" style="width:100%" class="w3-hover-opacity"></a>
				<div class="w3-container w3-white">
					<p><b>破風</b></p>
				</div>
			</div>
			<div class="w3-fives w3-container w3-margin-bottom">
				<a href="DinTaomovie.html"><img src="https://upload.wikimedia.org/wikipedia/zh/thumb/f/f2/%E9%99%A3%E9%A0%AD%E9%9B%BB%E5%BD%B1%E6%B5%B7%E5%A0%B1.jpg/220px-%E9%99%A3%E9%A0%AD%E9%9B%BB%E5%BD%B1%E6%B5%B7%E5%A0%B1.jpg" alt="Norway" style="width:100%" class="w3-hover-opacity"></a>
				<div class="w3-container w3-white">
					<p><b>陣頭</b></p>
				</div>
			</div>
			<div class="w3-fives w3-container w3-margin-bottom">
				<a href="Vivamovie.html"><img src="http://www.movier.tw/img_upload/a1268s1064201469444989.jpg" alt="Norway" style="width:100%" class="w3-hover-opacity"></a>
				<div class="w3-container w3-white">
					<p><b>變裝皇后萬萬歲</b></p>
				</div>
			</div>
			<div class="w3-fives w3-container">
				<a href="TheBFGmovie.html"><img src="https://upload.wikimedia.org/wikipedia/zh/3/3c/The_BFG_2016_Poster.jpg" alt="Norway" style="width:100%" class="w3-hover-opacity"></a>
				<div class="w3-container w3-white">
					<p><b>吹夢巨人</b></p>
				</div>
			</div>
		</div>
	</div>
	
		
		<?php } ?>
			

	
	
	
	
	
	
	
	
	
	<!--	<div class="w3-row-padding" style="width:90%" align="center">
			<div class="w3-fives w3-container w3-margin-bottom">
				<a href="move.html"><img src="https://img1.doubanio.com/view/movie_poster_cover/lpst/public/p2267508677.jpg" alt="Norway" style="width:100%" class="w3-hover-opacity"></a>
				<div class="w3-container w3-white">
					<p><b>"貓咪去那兒"</b></p>
				</div>
			</div>
			<div class="w3-fives w3-container w3-margin-bottom">
				<a href="move.html"><img src="https://img3.doubanio.com/view/movie_poster_cover/lpst/public/p2342278423.jpg" alt="Norway" style="width:100%" class="w3-hover-opacity"></a>
				<div class="w3-container w3-white">
					<p><b>母親節</b></p>
				</div>
			</div>
			<div class="w3-fives w3-container w3-margin-bottom">
				<a href="move.html"><img src="https://img3.doubanio.com/view/movie_poster_cover/lpst/public/p2309264172.jpg" alt="Norway" style="width:100%" class="w3-hover-opacity"></a>
				<div class="w3-container w3-white">
					<p><b>死侍</b></p>
			</div>
			</div>
			<div class="w3-fives w3-container w3-margin-bottom">
				<a href="move.html"><img src="https://img3.doubanio.com/view/movie_poster_cover/mpst/public/p2360072346.jpg" alt="Norway" style="width:100%" class="w3-hover-opacity"></a>
				<div class="w3-container w3-white">
					<p><b>寒戰2</b></p>
				</div>
			</div>
			<div class="w3-fives w3-container">
				<a href="move.html"><img src="https://img3.doubanio.com/view/movie_poster_cover/lpst/public/p2355436851.jpg" alt="Norway" style="width:100%" class="w3-hover-opacity"></a>
				<div class="w3-container w3-white">
					<p><b>告別單身</b></p>
				</div>
			</div>
		</div>-->
	

	
 
	<p><p/>
  <!-- Pagination -->
			


<!-- End page content -->
</div>



</body>
</html>


