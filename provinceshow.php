<?php  
header("content-type: text/xml; charset=UTF-8");  
echo "<?xml version=\"1.0\" encoding=\"UTF-8\"?>";  
echo "<province>";  
// ค่าที่รับมา หรือค่าจังหวัด ตำบล อำเภอที่เลือก  
$city = $_GET[city];  
$amphur = $_GET[amphur];  
// ติดต่อฐานข้อมูล  
$hostname_conn = "localhost";  
$username_conn = "root";  
$password_conn = "";  
$database_conn = "testall";  
mysql_connect($hostname_conn, $username_conn, $password_conn);  
mysql_query("SET NAMES utf8");  
mysql_select_db($database_conn); // เลือกฐานข้อมูล  
echo "<city>";  
$sql = "SELECT id, name FROM province ORDER BY name ASC";  
$result = mysql_query($sql);  
while ($fetcharr = mysql_fetch_array($result)) {  
echo "<a$fetcharr[id]>$fetcharr[id]_$fetcharr[name]</a$fetcharr[id]>";  
}  
echo "</city>";  
echo "<amphur>";  
$sql = "SELECT id, name FROM amphur WHERE provinceID='$city'";  
$result = mysql_query($sql);  
while ($fetcharr = mysql_fetch_array($result)) {  
echo "<a$fetcharr[id]>$fetcharr[id]_$fetcharr[name]</a$fetcharr[id]>";  
}  
echo "</amphur>";  
echo "<tumbon>";  
$sql = "SELECT id, name FROM tumbon WHERE amphurID='$amphur'";  
$result = mysql_query($sql);  
while ($fetcharr = mysql_fetch_array($result)) {  
echo "<a$fetcharr[id]>$fetcharr[id]_$fetcharr[name]</a$fetcharr[id]>";  
}  
echo "</tumbon>";  
echo "</province>";  
mysql_free_result($result);  
mysql_close();  
?>  