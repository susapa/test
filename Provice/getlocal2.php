<html>
    <head>
        <title>ThaiCreate.Com</title>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    </head>
    <script language="javascript">
        function selData(intLine, PROVINCE_ID, PROVINCE_NAME,PROVINCE_CODE)
        {
            var sPROVINCE_NAME = self.opener.document.getElementById("Province_" + intLine);
            sPROVINCE_NAME.value = PROVINCE_NAME;
            
            var sPROVINCE_ID = self.opener.document.getElementById("ProvinceID_" + intLine);
            sPROVINCE_ID.value = PROVINCE_ID;
       
            
            var sPROVINCE_CODE = self.opener.document.getElementById("ProvinceCODE_" + intLine);
            sPROVINCE_CODE.value = PROVINCE_CODE;
            window.close();
        }
    </script>
    <body>
        <?php
        include("connectDB.php");
//        $line=$_GET["Line"];
        $line2=$_GET["Line2"];
        $strSQL = "SELECT * FROM province where GEO_ID=".$line2;
        $objQuery = mysql_query($strSQL) or die("Error Query [" . $strSQL . "]");
        ?>
        <table width="400" border="1">
            <tr>
                <th width="400"> <div align="center">จังหวัด</div></th>

    </tr>
    <?php
    while ($objResult = mysql_fetch_array($objQuery)) {
        ?>
        <tr>
            <td><div align="center"><a href="#" OnClick="selData('<?= $_GET["Line"]; ?>', '<?= $objResult["PROVINCE_ID"]; ?>', '<?= $objResult["PROVINCE_NAME"]; ?>','<?= $objResult["PROVINCE_CODE"]?>');">
                        <?= $objResult["PROVINCE_NAME"]; ?>
                    </a></div></td>
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