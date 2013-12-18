<html>
    <head>
        <title>ThaiCreate.Com</title>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    </head>
    <script language="javascript">
        function selData(intLine, DISTRICT_ID, DISTRICT_NAME, DISTRICT_CODE)
        {

            var sDISTRICT_ID = self.opener.document.getElementById("DistrictID_" + intLine);
            sDISTRICT_ID.value = DISTRICT_ID;

            var sDISTRICT_NAME = self.opener.document.getElementById("District_" + intLine);
            sDISTRICT_NAME.value = DISTRICT_NAME;

            var sDISTRICT_CODE = self.opener.document.getElementById("DistrictCODE_" + intLine);
            sDISTRICT_CODE.value = DISTRICT_CODE;
            window.close();
        }
    </script>
    <body>
        <?php
        include("connectDB.php");
//        $line=$_GET["Line"];
        $line2 = $_GET["Line2"];
        $line3 = $_GET["Line3"];
        $line4 = $_GET["Line4"];
        $strSQL = "SELECT * FROM district where GEO_ID=" . $line2 . " and PROVINCE_ID=" . $line3 . " and Amphur_ID=" .$line4;
        $objQuery = mysql_query($strSQL) or die("Error Query [" . $strSQL . "]");
        ?>
        <table width="400" border="1">
            <tr>
                <th width="400"> <div align="center">ตำบล</div></th>

    </tr>
    <?php
    while ($objResult = mysql_fetch_array($objQuery)) {
        ?>
        <tr>
            <td><div align="center"><a href="#" OnClick="selData('<?= $_GET["Line"]; ?>', '<?= $objResult["DISTRICT_ID"]; ?>', '<?= $objResult["DISTRICT_NAME"]; ?>', '<?= $objResult["DISTRICT_CODE"] ?>');">
                        <?= $objResult["DISTRICT_NAME"]; ?>
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