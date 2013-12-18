<?php
	/*** By Weerachai Nukitram ***/
	/***  http://www.ThaiCreate.Com ***/

	$strUsername = trim($_POST["tUsername"]);
	$strPassword = trim($_POST["tPassword"]);
	$strName = trim($_POST["tName"]);
	$strEmail = trim($_POST["tEmail"]);
	
	//*** Check Username ***//
	if(trim($strUsername) == "")
	{
		echo "<font color=red>**</font> Plase input [Username]";
		exit();
	}
	
	//*** Check Password ***//
	if(trim($strPassword) == "")
	{
		echo "<font color=red>**</font> Plase input [Password]";
		exit();
	}
	
	//*** Check Name ***//
	if(trim($strName) == "")
	{
		echo "<font color=red>**</font> Plase input [Name]";
		exit();
	}
	
	//*** Check Email ***//
	if(trim($strEmail) == "")
	{
		echo "<font color=red>**</font> Plase input [Email]";
		exit();
	}

	$objConnect = mysql_connect("localhost","root","root") or die("Error Connect to Database");
	$objDB = mysql_select_db("mydatabase");


	//*** Check Username (already exists) ***//

	$strSQL = "SELECT * FROM account WHERE Username = '".$strUsername."' ";
	$objQuery = mysql_query($strSQL) or die ("Error Query [".$strSQL."]");
	$objResult = mysql_fetch_array($objQuery);
	if($objResult)
	{
		echo "<font color=red>**</font> Username [$strUsername] already exists";
	}
	else
	{
		$strSQL = "INSERT INTO account ";
		$strSQL .="(Username,Password,Name,Email) ";
		$strSQL .="VALUES ";
		$strSQL .="('".$strUsername."','".$strPassword."' ";
		$strSQL .=",'".$strName."','".$strEmail."') ";
		$objQuery = mysql_query($strSQL);
		if($objQuery)
		{
			echo "Y";  // Finish Register Return "Y"
		}
		else
		{
			echo "<font color=red>**</font> Can not register";
		}
	}

	mysql_close($objConnect);
?>