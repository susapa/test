<html>
<head>
<title>ThaiCreate.Com</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
</head>
<?php
include("connectDB.php");
?>

<script language="javascript">

	function OpenPopup(intLine)
	{
		window.open('getData.php?Line='+intLine,'myPopup','width=650,height=200,toolbar=0, menubar=0,location=0,status=1,scrollbars=1,resizable=1,left=0,top=0');
	}

</script>
<body>
<form name="frmMain" method="post" action="readData.php">
<table width="600" border="1">
  <tr>
    <td><div align="center">No </div></td>
    <td><div align="center">CustomerID </div></td>
    <td><div align="center">Name </div></td>
    <td><div align="center">Email </div></td>
    <td><div align="center">Country Code </div></td>
    <td><div align="center">Budget </div></td>
	<td><div align="center">Used </div></td>
	<td><div align="center">Popup </div></td>
  </tr>
  
   <!-- Rows 1 -->
   <tr>
    <td><div align="center">1 </div></td>
    <td><div align="center"><center><INPUT TYPE="TEXT" SIZE="5" NAME="txtCustomerID_1"  ID="txtCustomerID_1" VALUE=""></center> </div></td>
    <td><div align="center"><center><INPUT TYPE="TEXT" SIZE="5" NAME="txtName_1"  ID="txtName_1" VALUE=""></center> </div></td>
    <td><div align="center"><center><INPUT TYPE="TEXT" SIZE="5" NAME="txtEmail_1" ID="txtEmail_1"  VALUE=""></center> </div></td>
    <td><div align="center"><center>
		<SELECT NAME="txtCountryCode_1" ID="txtCountryCode_1">
		<OPTION VALUE=""></OPTION>
		<?php
		$strSQL = "SELECT * FROM country";
		$objQuery = mysql_query($strSQL);
		while($objResult = mysql_fetch_array($objQuery))
		{
		?>
		<OPTION VALUE="<?=$objResult["CountryCode"];?>"><?=$objResult["CountryName"];?></OPTION>
		<?php
		}
		?>
		</SELECT></center> </div></td>
    <td><div align="center"><center><INPUT TYPE="TEXT" SIZE="5" NAME="txtBudget_1"  ID="txtBudget_1" VALUE=""></center> </div></td>
	<td><div align="center"><center><INPUT TYPE="TEXT" SIZE="5" NAME="txtUsed_1"  ID="txtUsed_1" VALUE=""></center> </div></td>
	<td><div align="center"><center><INPUT TYPE="BUTTON" NAME="btnPopup_1"  ID="btnPopup_1" VALUE="..." OnClick="OpenPopup(1)"></center> </div></td>
  </tr>

<!-- Rows 2 -->
   <tr>
    <td><div align="center">2 </div></td>
    <td><div align="center"><center><INPUT TYPE="TEXT" SIZE="5" NAME="txtCustomerID_2"  ID="txtCustomerID_2" VALUE=""></center> </div></td>
    <td><div align="center"><center><INPUT TYPE="TEXT" SIZE="5" NAME="txtName_2"  ID="txtName_2" VALUE=""></center> </div></td>
    <td><div align="center"><center><INPUT TYPE="TEXT" SIZE="5" NAME="txtEmail_2" ID="txtEmail_2"  VALUE=""></center> </div></td>
    <td><div align="center"><center>
		<SELECT NAME="txtCountryCode_2" ID="txtCountryCode_2">
		<OPTION VALUE=""></OPTION>
		<?php
		$strSQL = "SELECT * FROM country";
		$objQuery = mysql_query($strSQL);
		while($objResult = mysql_fetch_array($objQuery))
		{
		?>
		<OPTION VALUE="<?=$objResult["CountryCode"];?>"><?=$objResult["CountryName"];?></OPTION>
		<?php
		}
		?>
		</SELECT></center> </div></td>
    <td><div align="center"><center><INPUT TYPE="TEXT" SIZE="5" NAME="txtBudget_2"  ID="txtBudget_2" VALUE=""></center> </div></td>
	<td><div align="center"><center><INPUT TYPE="TEXT" SIZE="5" NAME="txtUsed_2"  ID="txtUsed_2" VALUE=""></center> </div></td>
	<td><div align="center"><center><INPUT TYPE="BUTTON" NAME="btnPopup_2"  ID="btnPopup_2" VALUE="..." OnClick="OpenPopup(2)"></center> </div></td>
  </tr>


<!-- Rows 3 -->
   <tr>
    <td><div align="center">3 </div></td>
    <td><div align="center"><center><INPUT TYPE="TEXT" SIZE="5" NAME="txtCustomerID_3"  ID="txtCustomerID_3" VALUE=""></center> </div></td>
    <td><div align="center"><center><INPUT TYPE="TEXT" SIZE="5" NAME="txtName_3"  ID="txtName_3" VALUE=""></center> </div></td>
    <td><div align="center"><center><INPUT TYPE="TEXT" SIZE="5" NAME="txtEmail_3" ID="txtEmail_3"  VALUE=""></center> </div></td>
    <td><div align="center"><center>
		<SELECT NAME="txtCountryCode_3" ID="txtCountryCode_3">
		<OPTION VALUE=""></OPTION>
		<?php
		$strSQL = "SELECT * FROM country";
		$objQuery = mysql_query($strSQL);
		while($objResult = mysql_fetch_array($objQuery))
		{
		?>
		<OPTION VALUE="<?=$objResult["CountryCode"];?>"><?=$objResult["CountryName"];?></OPTION>
		<?php
		}
		?>
		</SELECT></center> </div></td>
    <td><div align="center"><center><INPUT TYPE="TEXT" SIZE="5" NAME="txtBudget_3"  ID="txtBudget_3" VALUE=""></center> </div></td>
	<td><div align="center"><center><INPUT TYPE="TEXT" SIZE="5" NAME="txtUsed_3"  ID="txtUsed_3" VALUE=""></center> </div></td>
	<td><div align="center"><center><INPUT TYPE="BUTTON" NAME="btnPopup_3"  ID="btnPopup_3" VALUE="..." OnClick="OpenPopup(3)"></center> </div></td>
  </tr>

</table>
<input type="hidden" name="hdnMaxLine" value="3">
<input type="submit" name="btnSubmit" value="Submit">
</form>
</body>
</html>