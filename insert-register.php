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
	<title>Project - insert-database</title>
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
        <?php
            include "connect.php";
            $stmt = $pdo->prepare("INSERT INTO user VALUES ('',?, ?, ?, ?, ?, ?)");
            $stmt->bindParam(1, $_POST["username"]);
            $stmt->bindParam(2, $_POST["password"]);
            $stmt->bindParam(3, $_POST["firstname"]);
            $stmt->bindParam(4, $_POST["lastname"]);
            $stmt->bindParam(5, $_POST["email"]);
            $stmt->bindParam(6, $_POST["user_picture"]);
            $stmt->execute();
            echo "<h1>" . $_POST["firstname"] . " " . $_POST["lastname"] . "</h1>";
        ?>
        <p> ลงทำเบียนสำเร็จแล้ว </p><br>
        <a class="subscribe" href="index.php">กลับสู่หน้าหลัก</a>
		<br><br><br><br><br><br><br><br><br><br><br><br><br><br>
		</div>
	</div>
	<div id="footer">
		<?php include 'component/footer.php';?>
	</div>
</body>
</html>