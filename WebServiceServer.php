<?php
$server = new SoapServer("helloworld.wsdl");

	function HelloWorld($strName,$strEmail){
		 return "Hello, World! Khun ($strName , Your email : $strEmail) ";
	}

$server->AddFunction("HelloWorld");
$server->handle();
?>