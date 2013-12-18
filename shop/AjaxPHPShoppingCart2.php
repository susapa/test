<?php
	/*** By Weerachai Nukitram ***/
	/***  http://www.ThaiCreate.Com ***/

	session_start();
	$strProductID = $_POST["tProductID"];
	$strQty = $_POST["tQty"];	

	include("connectDB.php");

	if($strProductID != "" and $strQty  != "")
	{
		$strSQL = "INSERT INTO cart ";
		$strSQL .="(SID,ProductID,Qty) ";
		$strSQL .="VALUES ";
		$strSQL .="('".session_id()."','".$strProductID."','".$strQty."') ";
		$objQuery = mysql_query($strSQL);
	}
?>
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
<?php
if($intSumTotal > 0)
{
?>
<br><input name="btnCheckOut" type="submit" id="btnCheckOut" value="Check Out" onClick="JavaScript:CheckOut();">
<?php
}
?>
</center>