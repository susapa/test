<?php
session_start();
$_SESSION["strName"] = "Mr.Weerachai Nukitram";
$_SESSION["strSiteName"] = "ThaiCreate.Com";
$_SESSION["test"]="GDPSAS";
session_write_close();
?>
<html>
<head>
<title>test session</title>
</head>
<body>
Session Created.<br><br>
<a href="test2.php">Check Session</a>
<a href="test2.php">Check Session</a>
</body>
</html>