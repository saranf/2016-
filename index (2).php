<!DOCTYPE html>
<html lang="ko">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="user-scalable=no, initial-scale=1, width=device-width" />
<meta name="apple-mobile-web-app-capable" content="no">
<meta name="apple-mobile-web-app-status-bar-style" content="black">
<meta name="format-detection" content="telephone=no">
<title>IMHS Project</title>
<link rel="stylesheet" href="./css/common.css">
<link rel="stylesheet" href="./css/layout.css">
<link rel="stylesheet" href="./css/main.css">
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="./js/jquery.touchSwipe.min.js"></script>
<script src="./js/idangerous.swiper.js"></script>
<script src="./js/common.js"></script>
<style>

</style>
</head>
<body>
<div id="content-wrap">
	<div id="header">
		<a href="#" class="show-nav header-icon"></a>
		<a href="#" class="hide-nav header-icon-active"></a>
		<h1 class="toplogo"><a href="#">IMHS Pro</a></h1>
	</div>
	<div class="util">
		<ul class="util-list">
			<li class="on"><a href="#" class="box">소개페이지</a></li>
			<li><a href="code/index.html" class="box">로그인</a></li>
		</ul>
	</div>
	
	<!-- swiper -->
	<div class="swiper-container">
		<div class="swiper-container">
			<div class="swiper-slide">
				<?php 
				//	echo "1";
					include "hi_1.php";
				?>
			</div>
	</div>

	<!-- category menu -->
	<div class="m-menu">
		<ul>
			<li class="menu1">
				<a href="#">
					<span class="ico-area"></span>
					<span class="txt">아이디어소개</span>
				</a>
			</li>
			<li class="menu2">
				<a href="#">
					<span class="ico-area"></span>
					<span class="txt">사용방법</span>
				</a>
			</li>
			<li class="menu3">
				<a href="code/index.html">
					<span class="ico-area"></span>
					<span class="txt">구매목록조회</span>
				</a>
			</li>
		</ul>
	</div>


	<div id="footer">
		<div class="footer-menu">
			<a href="#"><span>상점정보</span></a>
			<a href="#"><span>PC버젼</span></a>
			<a href="#"><span>이용안내</span></a>
			<a href="#"><span>고객센터</span></a>
			<a href="#"><span>커뮤니티</span></a>
		</div>
		<div class="address">
			<dl>
				<dt>상호명 : </dt>
				<dd class="inner">재원이가 사랑했던</dd>
				<p><dt>대표 : 서영태</dt>
				<dd>나재원</dd></p>
				<dt>개인정보관리책임자 : </dt>
				<dd class="inner">백사랑</dd>
				<p><dt>사업자등록번호 : </dt>
				<dd>20160720</dd></p>
				<p><dt>통신판매업신고번호 : </dt>
				<dd>제 2016-인천남구-123호</dd></p>
				<dt>전화 : </dt>
				<dd>00-00-000</dd>
				<dt>팩스 : </dt>
				<dd>00-00-0000</dd>
				<dt>주소 : </dt>
				<dd>인천시 남구 </dd>
			</dl>
		</div>
		<p>COPYRIGHT ⓒ 2016 MeisterHighschool Project.</p>
	</div>

</div>
<div id="sidebar">
	<span style="color:#fff;">sidebar</span>
</div>

<script>
(function($){
	var mySwiper = new Swiper('.swiper-container', {
		loop: true,
		pagination: '.pagination',
		paginationClickable : true,
		calculateHeight: true,
        resizeReInit: true,
        autoplay: 5000,
        speed: 300
	});
})(jQuery);
</script>
</body>
</html>
