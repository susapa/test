<html>
<head>
<title>ThaiCreate.Com</title>
</head>
<body>
<?php
for($i=1;$i<=(int)$_POST["hdnMaxLine"];$i++)
{
	echo $_POST["txtCustomerID_".$i];
	echo "<br>";
	echo $_POST["txtName_".$i];
	echo "<br>";
	echo $_POST["txtEmail_".$i];
	echo "<br>";
	echo $_POST["txtCountryCode_".$i];
	echo "<br>";
	echo $_POST["txtBudget_".$i];
	echo "<br>";
	echo $_POST["txtUsed_".$i];
	echo "<hr>";
}
?>
</body>
</html>