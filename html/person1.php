<!DOCTYPE HTML>
<!--
	Spectral by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>Samsung Special EVENT!!</title>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
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
              <form action="insert.html" method="post">
							<div style="text-align:center;">
								NAME<br>
								<input type="text" id="name" style="width:300px; height:40px; font-size:12px;" 
								placeholder="이름 입력"  name="user_name"/><br><br>
								PHONE<br>
								<input type="text" id="phone" style="width:300px; height:40px; font-size:12px;" 
								placeholder="핸드폰 번호 입력" name="user_phone"/><br><br>
								E-MAIL<br>
								<input type="text" id="email" style="width:300px; height:40px; font-size:12px;" 
								placeholder="메일 주소 입력" name="user_email"/><br><br>
							</div>
								<button id="submit" href="#" onClick="alert('응모완료!!')">응모하기</button>
							</form>
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

	<script>
    // 여기에 코드를 작성하세요.
    btnDisabled();

    $('#name').on('input', setToggleName);
    $('#phone').on('input', setTogglePhone);
    $('#email').on('input', setToggleEmail);
    
    var toggleName = 0;
    var togglePhone = 0;
    var toggleEmail = 0;

    // 토글 변수를 사용해서 입력값의 유무 상태를 기록한다.(입력값 없을 시 0)
    // 이를 통해 입력값을 지울 경우 입력값이 없는 상태로 업데이트 가능하다.
    // judgeBtn 함수를 호출하여 버튼 활성화 여부를 결정한다.
    function setToggleName() {
      var input = $('#name').val();
      if(input.length > 0) {
        toggleName = 1;
      } else {
        toggleName = 0;
      }
      judgeBtn();
    }

    function setTogglePhone() {
      var input = $('#phone').val();
      if(input.length > 0) {
        togglePhone = 1;
      } else {
        togglePhone = 0;       
      }
      judgeBtn();
    }

    function setToggleEmail() {
      var input = $('#email').val();
      if(input.length > 0) {
        toggleEmail = 1;
      } else {
        toggleEmail = 0;
      }
      judgeBtn();
    }

    // 버튼 활성화 여부를 결정하는 함수
    function judgeBtn() {
      if (toggleName === 1 && toggleEmail === 1 && togglePhone === 1) {
        btnEnabled();
      } else {
        btnDisabled();
      }
    }

    function btnDisabled() {
      $('#submit').css('background-color', '#9b9b9b');
      // 버튼이 비활성화되었을 때 마우스오버 효과를 없애기 위한 코드
      setShadowNone();
      $('#submit').attr('disabled', true);
      // console.log('btnDisabled');
    }

    function btnEnabled() {
      $('#submit').css('background-color', '#1bbc98');
      // 아래 코드도 버튼 활성화가 가능하다.
      // $('#submit').attr('disabled', false);
      $('#submit').removeAttr('disabled');
      $('#submit').on('mouseover', setShadow);
      $('#submit').on('mouseleave', setShadowNone);
    }

    function setShadow() {
      console.log('setShadow');
      $('#submit').css('box-shadow', '0 2px 4px 0 rgba(0, 0, 0, 0.50)');
    }

    function setShadowNone() {
      $('#submit').css('box-shadow', 'none');
    }

  	</script>

</html>