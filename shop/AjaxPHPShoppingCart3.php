<?php
	/*** By Weerachai Nukitram ***/
	/***  http://www.ThaiCreate.Com ***/
	
	session_start();
	include("connectDB.php");
	if($_GET["Action"]=="Save")
	{
		//*** Insert Order Header ***//
		$strSQL = "INSERT INTO cusorder ";
		$strSQL .="(Name,Email,Address,OrderDate) ";
		$strSQL .="VALUES ";
		$strSQL .="('".$_POST["txtName"]."','".$_POST["txtEmail"]."','".$_POST["txtAddress"]."','".date("Y-m-d H:i:s")."') ";
		$objQuery = mysql_query($strSQL);	
		
		$intOrderID = mysql_insert_id();
		
		//*** Update Order Detail ***//
		$strSQL = "UPDATE cart SET OrderID = '".$intOrderID."' ,SID = '' WHERE SID = '".session_id()."'  ";
		$objQuery = mysql_query($strSQL);	
		
		header("location:AjaxPHPShoppingCart4.php?OrderID=".$intOrderID);
		exit();
	}
?>
<html>
<head>
<title>ThaiCreate.Com Ajax Tutorial</title>
<center>
<h1>Your Cart</h1>
<table width="408" border="1" cellspacing="0" cellpadding="0">
  <tr>
    <td width="51"><div align="center">ID</div></td>
    <td width="154" height="26"><div align="center">Product</div></td>
    <td width="69"><div align="center">Price</div></td>
    <td width="57"><div align="center">Qty</div></td>
    <td width="65"><div align="center">Total</div></td>
  </tr>
<?php
$intSumTotal = 0;
$intRows = 0;
$strSQL = "SELECT * FROM cart  WHERE SID = '".session_id()."' ";
$objQuery = mysql_query($strSQL) or die ("Error Query [".$strSQL."]");
while($objResult = mysql_fetch_array($objQuery))
{
	$intRows ++;
	//*** Product ***//
	$strSQL = "SELECT * FROM product  WHERE ProductID = '".$objResult["ProductID"]."' ";
	$objQueryPro = mysql_query($strSQL) or die ("Error Query [".$strSQL."]");
	$objResultPro = mysql_fetch_array($objQueryPro);
	$intTotal = $objResult["Qty"] * $objResultPro["Price"];
	$intSumTotal = $intSumTotal + $intTotal;
?>
  <tr>
    <td><div align="center"><?=$intRows;?></div></td>
    <td><?=$objResultPro["ProductName"];?></td>
    <td><div align="right"><?=number_format($objResultPro["Price"],2);?></div></td>
    <td><div align="center"><?=$objResult["Qty"];?></div></td>
    <td><div align="right"><?=number_format($intTotal,2);?></div></td>
  </tr>
<?php
}
?>    
  <tr>
    <td colspan="4"><div align="right">Total Amount </div></td>
    <td>
	<div align="right"><?=number_format($intSumTotal,2);?></div></td>
  </tr>
</table>
<br>
<br>
<br>
<form action="AjaxPHPShoppingCart3.php?Action=Save" method="post" name="frmMain" id="frmMain">
  <table width="408" border="1" cellspacing="0" cellpadding="0">
    <tr>
      <td width="127">Name</td>
      <td width="275"><input name="txtName" type="text" id="txtName"></td>
    </tr>
    <tr>
      <td>Email</td>
      <td><input name="txtEmail" type="text" id="txtEmail"></td>
    </tr>
    <tr>
      <td>Address</td>
      <td><textarea name="txtAddress" id="txtAddress"></textarea></td>
    </tr>
  </table>
  <br>
  <input name="btnSave" type="submit" id="btnSave" value="Save">
</form>
</center>
</body>
</html>