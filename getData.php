<html>
<head>
<title>ThaiCreate.Com</title>
</head>
<script language="javascript">
	function selData(intLine,CustomerID,Name,Email,CountryCode,Budget,Used)
	{
		var sCustomerID = self.opener.document.getElementById("txtCustomerID_"+intLine);
		sCustomerID.value = CustomerID;

		var sName = self.opener.document.getElementById("txtName_" +intLine);
		sName.value = Name;

		var sEmail = self.opener.document.getElementById("txtEmail_" +intLine);
		sEmail.value = Email;

		var sCountryCode = self.opener.document.getElementById("txtCountryCode_" +intLine);
		sCountryCode.value = CountryCode;

		var sBudget = self.opener.document.getElementById("txtBudget_" +intLine);
		sBudget.value = Budget;

		var sUsed = self.opener.document.getElementById("txtUsed_" +intLine);
		sUsed.value = Used;

		window.close();
	}
</script>
<body>
<?php
$objConnect = mysql_connect("localhost","root","") or die("Error Connect to Database");
$objDB = mysql_select_db("testall");
$strSQL = "SELECT * FROM customer";
$objQuery = mysql_query($strSQL) or die ("Error Query [".$strSQL."]");
?>
<table width="600" border="1">
  <tr>
    <th width="91"> <div align="center">CustomerID </div></th>
    <th width="98"> <div align="center">Name </div></th>
    <th width="198"> <div align="center">Email </div></th>
    <th width="97"> <div align="center">CountryCode </div></th>
    <th width="59"> <div align="center">Budget </div></th>
    <th width="71"> <div align="center">Used </div></th>
  </tr>
<?php
while($objResult = mysql_fetch_array($objQuery))
{
?>
  <tr>
    <td><div align="center"><a href="#" OnClick="selData('<?=$_GET["Line"];?>' ,'<?=$objResult["CustomerID"];?>', '<?=$objResult["Name"];?>','<?=$objResult["Email"];?>' ,'<?=$objResult["CountryCode"];?>','<?=$objResult["Budget"];?>' ,'<?=$objResult["Used"];?>');">
	<?=$objResult["CustomerID"];?>
	</a></div></td>
    <td><?=$objResult["Name"];?></td>
    <td><?=$objResult["Email"];?></td>
    <td><div align="center"><?=$objResult["CountryCode"];?></div></td>
    <td align="right"><?=$objResult["Budget"];?></td>
    <td align="right"><?=$objResult["Used"];?></td>
  </tr>
<?php
}
?>
</table>
<?php
mysql_close($objConnect);
?>
</body>
</html>