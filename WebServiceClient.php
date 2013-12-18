<html>
<head>
<title>ThaiCreate.Com</title>
</head>
<body>
<?php
	$client = new SoapClient("http://localhost/testall/WebServiceServer.php?wsdl",
			array(
			  "trace"      => 1,		// enable trace to view what is happening
			  "exceptions" => 0,		// disable exceptions
			  "cache_wsdl" => 0) 		// disable any caching on the wsdl, encase you alter the wsdl server
		  );

        $params = array(
                   'strName' => "Weerachai Nukitram",
				   'strEmail' => "is_php@hotmail.com"
        );

		$data = $client->HelloWorld($params);

       print_r($data);
?>
</body>
</html>