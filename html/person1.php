<!--
<html>
<body>
<style>
p {display:inline-block; width:85px;}
</style>
<form action="insert1.php" method="post">
<p>아 이 디 : </p><input type="text" name="user_id"><br>
<p>이    름 : </p><input type="text" name="user_name"><br>
<p>이 메 일 : </p><input type="text" name="user_email"><br>
<input type="submit" value="응모신청"><br><br>
</form>
</body>
</html>
-->
<!DOCTYPE HTML>
<!--
	Spectral by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>Samsung Special EVENT!!</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>

		<style>
			/*ID Style*/
			#input_search{
				width: 40px;
				height: 40px;
				padding: 0px 0px 0px 0px;
				margin: 0px 0px 0px 0px;
				border: 1px solid #dfe1e5;
			}
			#input_search_button{
				width: 40px;
				height: 40px;
				padding: 0px 0px 0px 0px;
				margin: 0px 0px 0px 0px;
				border: 1px solid #dfe1e5;
			}
	
		</style>
	</head>
	<body class="landing is-preload">

		<!-- Page Wrapper -->
			<div id="page-wrapper">

				<!-- Banner -->
					<section id="banner">
						<div class="inner">
							<h2>Samsung</h2>
                            <form action="insert1.php" method="post">

							<div style="text-align:center;">

								NAME<br>
								<input type="text" style="width:300px; height:40px; font-size:12px;" placeholder="이름 입력"  name="user_name"><br><br>
								PHONE<br>
								<input type="text" style="width:300px; height:40px; font-size:12px;" placeholder="핸드폰 번호 입력" name="user_phone"><br><br>
								E-MAIL<br>
								<input type="email" style="width:300px; height:40px; font-size:12px;" placeholder="메일 주소 입력" name="user_email"><br><br>

							</div>

                            <input type="submit"><br><br>
                            </form>
							<!--<ul class="actions special">
								<li><a href="#" class="button primary">입력완료</a></li>
							</ul>-->
						</div>
					</section>
			</div>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.scrollex.min.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>