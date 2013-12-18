<?php
/* * * By Weerachai Nukitram ** */
/* * *  http://www.ThaiCreate.Com ** */
?>
<html>
    <head>
        <title>ThaiCreate.Com Ajax Tutorial</title>
        <style type="text/css">
            .containBody{
                height:300px;
                display:block;
                overflow:auto;	
                border-bottom:1px solid #CCC;
            }
            .tbl_headerFix{
                border-bottom:0px;	
            }
        </style>
        <script language="JavaScript">
            var HttPRequest = false;

            function doCallAjax(ProductID, Qty) {
                HttPRequest = false;
                if (window.XMLHttpRequest) { // Mozilla, Safari,...
                    HttPRequest = new XMLHttpRequest();
                    if (HttPRequest.overrideMimeType) {
                        HttPRequest.overrideMimeType('text/html');
                    }
                } else if (window.ActiveXObject) { // IE
                    try {
                        HttPRequest = new ActiveXObject("Msxml2.XMLHTTP");
                    } catch (e) {
                        try {
                            HttPRequest = new ActiveXObject("Microsoft.XMLHTTP");
                        } catch (e) {
                        }
                    }
                }

                if (!HttPRequest) {
                    alert('Cannot create XMLHTTP instance');
                    return false;
                }

                var url = 'AjaxPHPShoppingCart2.php';
                var pmeters = "tProductID=" + ProductID +
                        "&tQty=" + Qty;
                HttPRequest.open('POST', url, true);

                HttPRequest.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
                HttPRequest.setRequestHeader("Content-length", pmeters.length);
                HttPRequest.setRequestHeader("Connection", "close");
                HttPRequest.send(pmeters);


                HttPRequest.onreadystatechange = function()
                {

                    if (HttPRequest.readyState == 3)  // Loading Request
                    {
                        document.getElementById("mySpan").innerHTML = "Now is Loading...";
                    }

                    if (HttPRequest.readyState == 4) // Return Request
                    {
                        document.getElementById('mySpan').innerHTML = HttPRequest.responseText;
                    }
                }

            }

            function CheckOut()
            {
                window.location = 'AjaxPHPShoppingCart3.php';
            }
        </script>
    </head>
    <body onLoad="JavaScript:doCallAjax('', '')">
        <h1>My Cart </h1>
        <table width="680" border="0" cellspacing="0" cellpadding="0">
            <tr>
                <td width="234" valign="top">
                    <?php
                    include("connectDB.php");
                    $strSQL = "SELECT * FROM product ORDER BY ProductID ASC ";
                    $objQuery = mysql_query($strSQL) or die("Error Query [" . $strSQL . "]");
                    echo"<table border=\"0\"  cellspacing=\"1\" cellpadding=\"1\"><tr>";
                    $intRows = 0;
                    while ($objResult = mysql_fetch_array($objQuery)) {
                        $intRows++;
                        echo "<td>";
                        ?>
                        <img src="product/<?= $objResult["Picture"]; ?>" width="70" height="61" border="0">
                <center>
                    <?= $objResult["ProductName"]; ?>
                    <br>
                    <?= $objResult["Price"] . " Baht"; ?>
                    <br>
                    <input type="text" id="txt<?= $intRows; ?>" value="" style="width:20px">
                    <input type="button" value="Add" onClick="JavaScript:doCallAjax('<?= $objResult["ProductID"]; ?>', document.getElementById('txt<?= $intRows; ?>').value);">
                </center>
                <?php
                echo"</td>";
                if (($intRows) % 2 == 0) {
                    echo"</tr>";
                } else {
                    echo "<td>";
                }
            }
            echo"</tr></table>";
            ?>
            <?php
            mysql_close($objConnect);
            ?>	
        </td>
        <td width="446" valign="top"><span id="mySpan"></span></td>
    </tr>
</table>
<table width="550" border="0" cellspacing="0" cellpadding="0">
    <tr>
        <td width="25%" align="center" bgcolor="#FFFF99">Column 1</td>
        <td width="25%" align="center" bgcolor="#FFFF99">Column 2</td>
        <td width="25%" align="center" bgcolor="#FFFF99">Column 3</td>
        <td width="25%" align="center" bgcolor="#FFFF99">Column 4</td>
    </tr>
    <tr>
        <td colspan="4" align="left" valign="top" >
            <div class="containBody">
                <table class="tbl_headerFix" width="100%" border="1" cellspacing="0" cellpadding="0" >
                    <?php for ($i = 1; $i <= 30; $i++) { ?>
                        <tr>
                            <td width="25%" align="center"><?= $i ?></td>
                            <td width="25%" align="center"><?= $i ?></td>
                            <td width="25%" align="center"><?= $i ?></td>
                            <td width="25%" align="center"><?= $i ?></td>
                        </tr>
                    <?php } ?>      
                </table>
            </div>    
        </td>
    </tr>
</table>898 897 896 895 891 891 895 
</body>
</html>