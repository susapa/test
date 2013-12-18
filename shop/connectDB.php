<?php
$objConnect = mysql_connect("localhost","root","") or die("Error Connect to Database");
mysql_query("SET NAMES UTF8",$objConnect);
        $objDB = mysql_select_db("shop");
?> 

