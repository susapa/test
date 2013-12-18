<?php
session_start();
//unset($_SESSION["strName"]); // ลบบาง Session
//unset($_SESSION["strSiteName"]); // ลบบาง Session
session_destroy(); // ลบ Session ทั้งหมด
?>
<html>
<head>
<title>test session</title>
</head>
<body>
Created Check.<br>
$strName = <?=$_SESSION["strName"];?><br>
$strSiteName = <?=$_SESSION["strSiteName"];?><br>
<br>
<a href="test.php">Create Session</a><br>
<a href="test2.php">Check Session</a><br>
</body>
</html>