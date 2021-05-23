<?php
	include "connect.php";
	session_start();
	// ตรวจสอบว่ามีชือใน session หรือไม่ หากไม่มีให้ไปหน้า login อัตโนมัติ
	if (empty($_SESSION["username"]) ) {
		header("location: login.php");
	}
?>
<html>
<head>
	<meta charset="UTF-8">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="css/style.php" type="text/css">
    <title>Project - door</title>
</head>
<body>
	<div id="clearance">&nbsp;</div>
	<div id="header">
		<div class="clearfix">
			<div class="logo">
				<?php include 'component/logo.php';?>
			</div>
			<ul class="navigation">
				<?php include 'component/navbar.php';?>
			</ul>
		</div>
	</div>
	<div id="contents">
		<div class="clearfix">
			<div class="sidebar">
				<div>
					<h2>DOOR</h2>
					<br>
					<div class="box">
						<img src="images/doorpicture.jpg" alt="Img" height="250" width="250">
					</div>
				</div>
				<div>
					<h2>Detail</h2>
					<p>
						“example example example example example example example example example example example example
						”<br> <span>- detail_of_door -</span>
					</p>
				</div>
			</div>
			<div class="main">
				<h1>ประวัติการ log in เข้าใช้ประตู</h1>
				<div class="section">
					<h2>History</h2>
					<ul>
						<li id=doorList>
							<?php include 'feature/getDoor.php';?>  
						</li>
					</ul>
				</div>
			
			</div>
		</div>
	</div>
	<div id="footer">
		<?php include 'component/footer.php';?>
	</div>
	
	<script>
		// function set_door(){
		// 	var p = document.createElement("p");
		// 	var newImg = document.createElement("img");
		// 	newImg.setAttribute("src","door/jame_20-5-2021_20-12-00.jpg")
		// 	newImg.setAttribute('width', 300);
		// 	newImg.setAttribute('height', 300);
		// 	var node1 = document.createTextNode("10/25/2020 at 20:12 pm ");
		// 	var node2 = document.createElement("a");
		// 	var text = document.createTextNode("login");
		// 	node2.appendChild(text);
		// 	node2.style.color = "red";
		// 	var url = window.location.pathname;
		// 	filename1 = url.match(/.*\/(.*)$/)[1]; // ชื่อไฟล์+นามสกุล home.html
		// 	filename2 = filename1.split(/\./)[0]; // ชื่อไฟล์ไม่มีนามสกุล home
		// 	p.appendChild(newImg);
		// 	p.appendChild(node1);
		// 	p.appendChild(node2);
		// 	console.log(filename1)
		// 	var get_log = document.getElementById("doorList")
		// 	get_log.appendChild(p)
		// }
		// window.onload = set_door()
	</script>
</body>

</html>