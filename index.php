<!DOCTYPE html>
<html>
<head>
	<title>Thư viện dữ liệu v2</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="style/css2.css">
	<link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	 <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  	<style>
		.mySlides {display:none}
		.w3-left, .w3-right, .w3-badge {cursor:pointer}
		.w3-badge {height:13px;width:13px;padding:0}
	</style>
</head>
<body style="background-color: #f3f3f1;">
<div class="top">
	<img src="library-banner.jpg" width="100%" height="150px">
</div>
<nav class="navbar navbar-inverse ">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">Thư viện trung tâm</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="#">Home</a></li>
      <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Hệ thống thư viện DHQG <span class="caret"></span></a>
        <ul class="dropdown-menu" id="menu1">
          <li><a href="#">Giới thiệu</a></li>
           <li><a href="#">Hệ thống thư viện DHQG</a>
           		<ul class="sub-menu" style="background-color: white!important; list-style-type: none">
           			<li><a href="#">sdfádf</a></li>
           			<li><a href="#">sdfádf</a></li>
           			<li><a href="#">sdfádf</a></li>
           		</ul>
           </li>
          <li><a href="#">Tài liệu mới</a></li>
          <li><a href="#">Dịch vụ dùng chung</a></li>
        </ul>
      </li>
      <li><a href="#">Thư viện trung tâm</a></li>
      <li><a href="#">Các dịch vụ</a></li>
      <li><a href="#">Lịch phục vụ</a></li>
      <li><a href="#">Mục lục TVTT</a></li>
    </ul>
  </div>
</nav>
<div class="content" style="margin-top: -15px;">
	
	<div class="center" style="background-color: white!important">
	<div class="catalog">
		<div class="search" style="border-radius: 10px;">
			<div class="hsearch" style="border-radius: 10px; border-bottom-right-radius: 0px; border-bottom-left-radius: 0px">
				<p style="color: white; padding-top: 9px; padding-left: 5px"><b>Cổng tra cứu và truy cập tài liệu</b></p>
			</div>
			<div class="table">
				<ul class="nav nav-tabs">
					<li data-toggle="tab"><a href="#" onclick="opensearch('tccn')">Tất cả các nguồn</a></li>
					<li data-toggle="tab"><a href="#" onclick="opensearch('mlht')">Mục lục hệ thống thư viện</a></li>
					<li data-toggle="tab"><a href="#" onclick="opensearch('tldt')">Tài liệu điện tử</a></li>
					<li data-toggle="tab"><a href="#" onclick="opensearch('tldtns')">Tài liệu điện tử nội sinh</a></li>
				</ul>
				<div class="tablet" id="tccn">
					<form target="_blank" method="get" name="form1">
						<table border="0">
							<tr>
								<td>
									<div class="divborderall divmarginall">
										<input type="text" size="38" name="text01" class="searcharea">
									</div>
									<input type="submit" name="Submit" value="Tìm" class="btn btn-danger">
									<strong class="strong">Giới hạn tìm kiếm1</strong>
								</td>
							</tr>
						</table>
					</form>
				</div>
				<div class="tablet" id="mlht">
					<form target="_blank" method="get" name="form1">
						<table border="0">
							<tr>
								<td>
									<div class="divborderall divmarginall">
										<input type="text" size="38" name="text01" class="searcharea">
									</div>
									<input type="submit" name="Submit" value="Tìm" class="submithome">
									<strong class="strong">Giới hạn tìm kiếm2</strong>
								</td>
							</tr>
						</table>
					</form>
				</div>
				<div class="tablet" id="tldt">
					<form target="_blank" method="get" name="form1">
						<table border="0">
							<tr>
								<td>
									<div class="divborderall divmarginall">
										<input type="text" size="38" name="text01" class="searcharea">
									</div>
									<input type="submit" name="Submit" value="Tìm" class="submithome">
									<strong class="strong">Giới hạn tìm kiếm3</strong>
								</td>
							</tr>
						</table>
					</form>
				</div>
				<div class="tablet" id="tldtns">
					<form target="_blank" method="get" name="form1">
						<table border="0">
							<tr>
								<td>
									<div class="divborderall divmarginall">
										<input type="text" size="38" name="text01" class="searcharea">
									</div>
									<input type="submit" name="Submit" value="Tìm" class="submithome">
									<strong class="strong">Giới hạn tìm kiếm4</strong>
								</td>
							</tr>
						</table>
					</form>
				</div>
			</div>
		</div>
	</div>
	<div class="info">
		<div class="bar2">&nbsp;</div>
	</div>
	<div class="w3-container">
  <h1>Tin tức</h1>
  
</div>

<div class="w3-content w3-display-container" style="max-width:800px">
  <div class="mySlides" style="width: 100%; height: 350px; background-color: grey;border-bottom-right-radius: 10px; border-bottom-left-radius: 10px">
  	<div class="lefts" style="width: 50%;">
  		<div style="width: 270px; height: 340px; margin:0 0 0 50px;">
  		
  			<p align="center"><a href="#"><img src="img1.jpg" width="270px" height="160px"></a></p>

  			<h2 style="font-size: 17px"><b>Lễ kỉ niệm 60 năm ngày thành lập thư viện tỉnh Hòa bình</b></h2>
  			<p style="overflow: hidden; font-size: 10px; margin:0">Sáng 02/12/2016, Thư viện tỉnh Hoà Bình trọng thể tổ chức Lễ kỷ niệm 60 năm ngày thành lập (28/11/1956 - 28/11/2016). Trải qua 60 năm xây dựng và phát triển, Thư viện tỉnh Hoà Bình đã không ngừng nỗ lực phấn đấu, thực hiện tốt nhiệm vụ được giao,.&nbsp;</p>
  			<a href="http://nlv.gov.vn/tin-tuc-su-kien/le-ky-niem-60-nam-ngay-thanh-lap-thu-vien-tinh-hoa-binh-28/11/1956-28/11/2016.html" class="btn btn-info" role="button" style="height: 30px;">Chi tiết</a>
  		</div>
  	</div>
  	<div class="rights">
  		<div style="width: 270px; height: 340px; margin-left: 80px;">
  		
  			<p align="center"><a href="#"><img src="img2.jpg" width="270px" height="160px"></a></p>

  			<h2 style="font-size: 17px"><b>Đại hội thư viện Việt Nam</b></h2>
  			<p style="overflow: hidden; font-size: 10px; margin:0">Ngày 25/11/2016, tại Thư viện Quốc gia Việt Nam đã diễn ra Đại hội đại biểu Hội Thư viện Việt Nam nhiệm kỳ III. Sau 10 năm hoạt động, Hội đã phát triển mới được 3 Liên Chi hội, 10 Chi hội, thu hút mới hơn 2.000 hội viên nâng tổng số hội viên lên 5.700 và 2.030 hội viên tập thể.&nbsp;</p>
  			<a href="http://nlv.gov.vn/tin-tuc-su-kien/le-ky-niem-60-nam-ngay-thanh-lap-thu-vien-tinh-hoa-binh-28/11/1956-28/11/2016.html" class="btn btn-info" role="button" style="height: 30px;">Chi tiết</a>
  		</div>
  	</div>
  </div>
  <div class="mySlides" style="width: 100%; height: 350px; background-color: grey; border-bottom-right-radius: 10px; border-bottom-left-radius: 10px">
  	<div class="lefts" style="width: 50%;">
  		<div style="width: 270px; height: 340px; margin:0 0 0 50px;">
  		
  			<p align="center"><a href="#"><img src="img3.jpg" width="270px" height="160px"></a></p>

  			<h2 style="font-size: 17px"><b>Khai trương không gian chia sẻ S.HUB</b></h2>
  			<p style="overflow: hidden; font-size: 10px; margin:0">Ngày 24/11/2016, Thư viện Quốc gia Việt Nam và Công ty Điện tử Samsung Vina chính thức khai trương Không gian chia sẻ S.hub. Từ năm 2015, ý tưởng về Dự án“Thư viện thông minh 2.0” với mô hình Không gian chia sẻ S.hub.&nbsp;</p>
  			<a href="http://nlv.gov.vn/tin-tuc-su-kien/le-ky-niem-60-nam-ngay-thanh-lap-thu-vien-tinh-hoa-binh-28/11/1956-28/11/2016.html" class="btn btn-info" role="button" style="height: 30px;">Chi tiết</a>
  		</div>
  	</div>
  	<div class="rights">
  		<div style="width: 270px; height: 340px; margin-left: 80px;">
  		
  			<p align="center"><a href="#"><img src="img4.jpg" width="270px" height="160px"></a></p>

  			<h2 style="font-size: 17px"><b>TOẠ ĐÀM NHÂN DỊP KỶ NIỆM “NĂM HENRYK SIENKIEWICZ 2016”</b></h2>
  			<p style="overflow: hidden; font-size: 10px; margin:0">Ngày 14/11/2016, Đại sứ quán nước Cộng hoà Ba Lan tại Hà Nội và Thư viện Quốc gia Việt Nam tổ chức Toạ đàm nhân dịp kỷ niệm “Năm Henryk Sienkiewicz 2016”.&nbsp;</p>
  			<a href="http://nlv.gov.vn/tin-tuc-su-kien/le-ky-niem-60-nam-ngay-thanh-lap-thu-vien-tinh-hoa-binh-28/11/1956-28/11/2016.html" class="btn btn-info" role="button" style="height: 30px;">Chi tiết</a>
  		</div>
  	</div>
  </div>
  
  <div class="w3-center w3-section w3-large w3-text-white w3-display-bottommiddle" style="width:100%">
    <div class="w3-left w3-padding-left w3-hover-text-khaki" onclick="plusDivs(-1)">&#10094;</div>
    <div class="w3-right w3-padding-right w3-hover-text-khaki" onclick="plusDivs(1)">&#10095;</div>
    <span class="w3-badge demo w3-border w3-transparent w3-hover-white" onclick="currentDiv(1)"></span>
    <span class="w3-badge demo w3-border w3-transparent w3-hover-white" onclick="currentDiv(2)"></span>
    
  </div>
</div>
	</div>
	<div class="right" style="background-color: white!important;">
		<div class="w3-container" style="margin-top: 10px;">
  		
  <div class="w3-accordion w3-light-grey" style="border-radius: 10px;">
    <button onclick="myFunction('Demo1')" class="w3-btn-block w3-left-align" style="border-bottom: 1px solid white;">
      Thông tin thiết yếu
    </button>
    <div id="Demo1" class="w3-accordion-content">
      <a href="#">Link 1</a>
      <a href="#">Link 2</a>
      <a href="#">Link 3</a>
    </div>
    <button onclick="myFunction('Demo2')" class="w3-btn-block w3-left-align" style="border-bottom: 1px solid white;">
      Các Web thư viện hữu ích
    </button>
    <div id="Demo2" class="w3-accordion-content">
      <a  href="#">Link 1</a>
      <a  href="#">Link 2</a>
      <a  href="#">Link 3</a>
    </div>
    <button onclick="myFunction('Demo3')" class="w3-btn-block w3-left-align" style="border-bottom: 1px solid white;">
      Các tổ chức tài trợ
    </button>
    <div id="Demo3" class="w3-accordion-content">
      <a  href="#">Link 1</a>
      <a  href="#">Link 2</a>
      <a  href="#">Link 3</a>
    </div>
  </div>
</div>
	</div>
	<div class="clear"></div>
	<div class="footer"></div>
</div>
<div></div>
<script>
	//Tabs
	opensearch('tccn')
	function opensearch(tabname){
		var i;
    	var x = document.getElementsByClassName("tablet");
    	for (i = 0; i < x.length; i++) {
       		x[i].style.display = "none";  
    	}
    	document.getElementById(tabname).style.display = "block"; 
	}
	//aco
	function myFunction(id) {
    var x = document.getElementById(id);
    if (x.className.indexOf("w3-show") == -1) {
        x.className += " w3-show";
    } else { 
        x.className = x.className.replace(" w3-show", "");
    }
    
	}
	//Slide
	var slideIndex = 1;
	showDivs(slideIndex);

	function plusDivs(n) {
  		showDivs(slideIndex += n);
	}

	function currentDiv(n) {
  		showDivs(slideIndex = n);
	}

	function showDivs(n) {
  	var i;
  	var x = document.getElementsByClassName("mySlides");
  	var dots = document.getElementsByClassName("demo");
  	if (n > x.length) {slideIndex = 1}    
  	if (n < 1) {slideIndex = x.length}
  	for (i = 0; i < x.length; i++) {
     	x[i].style.display = "none";  
  	}
  	for (i = 0; i < dots.length; i++) {
     	dots[i].className = dots[i].className.replace(" w3-white", "");
  	}
  	x[slideIndex-1].style.display = "block";  
  	dots[slideIndex-1].className += " w3-white";
}
</script>
</body>
</html>
