<html>
    <head>
        <title>ThaiCreate.Com</title>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    </head>
    <script language="javascript">
        function selData(intLine, AMPHUR_ID, AMPHUR_NAME, AMPHUR_CODE)
        {
            
            var sAMPHUR_ID = self.opener.document.getElementById("AmphurID_" + intLine);
            sAMPHUR_ID.value = AMPHUR_ID;
            
            var sAMPHUR_NAME = self.opener.document.getElementById("Amphur_" + intLine);
            sAMPHUR_NAME.value = AMPHUR_NAME;

            var sAMPHUR_CODE = self.opener.document.getElementById("AmphurCODE_" + intLine);
            sAMPHUR_CODE.value = AMPHUR_CODE;
            window.close();
        }
    </script>
    <body>
        <?php
        include("connectDB.php");
//        $line=$_GET["Line"];
        $line2 = $_GET["Line2"];
        $line3 = $_GET["Line3"];
        $strSQL = "SELECT * FROM amphur where GEO_ID=" . $line2 . " and PROVINCE_ID=" . $line3;
        $objQuery = mysql_query($strSQL) or die("Error Query [" . $strSQL . "]");
        ?>
        <table width="400" border="1">
            <tr>
                <th width="400"> <div align="center">อำเภอ</div></th>

    </tr>
    <?php
    while ($objResult = mysql_fetch_array($objQuery)) {
        ?>
        <tr>
            <td><div align="center"><a href="#" OnClick="selData('<?= $_GET["Line"]; ?>', '<?= $objResult["AMPHUR_ID"]; ?>', '<?= $objResult["AMPHUR_NAME"]; ?>', '<?= $objResult["AMPHUR_CODE"] ?>');">
                        <?= $objResult["AMPHUR_NAME"]; ?>
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