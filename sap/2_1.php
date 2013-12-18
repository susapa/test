<html>
<head>
     <meta charset="utf-8"> 
<title>ข้อ 3</title> 
</head>
<body>
<?php 
 include ("/connectDB.php");
 $sql="INSERT INTO saptest (firstname,lastname,citizen,birthdate,address)VALUES 
     ('$_POST[fname]','$_POST[lname]','$_POST[id]','$_POST[date]','$_POST[address]')";
 mysql_query($sql) or die(mysql_error());
 echo "บันทึกเรียบร้อย<br>";
 echo '<a href=2.php>กลับหน้าหลัก</a>';
 mysql_close();
 ?>
</body>
</html>