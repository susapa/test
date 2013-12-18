<?php
session_start();
?>
<html>
<head>
<title>test session</title>
</head>
<body>
Session Check.<br>
session_id(); = <?=session_id();?><br>
$strName = <?=$_SESSION["strName"];?><br>
$strSiteName = <?=$_SESSION["strSiteName"];?><br>
$test = <?=$_SESSION["test"];?><br>
<br>
<a href="test3.php">Delete Session</a>
</body>
</html>