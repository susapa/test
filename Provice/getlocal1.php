<html>
    <head>
        <title>ThaiCreate.Com</title>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    </head>
    <script language="javascript">
        function selData(intLine, GEO_ID, GEO_NAME)
        {
            var sGEO_NAME = self.opener.document.getElementById("Geography_" + intLine);
            sGEO_NAME.value = GEO_NAME;

            var sGEO_ID = self.opener.document.getElementById("GeographyID_" + intLine);
            sGEO_ID.value = GEO_ID;
            window.close();
        }
    </script>
    <body>
        <?php
        include("connectDB.php");
        $strSQL = "SELECT * FROM geography";
        $objQuery = mysql_query($strSQL) or die("Error Query [" . $strSQL . "]");
        ?>
        <table width="400" border="1">
            <tr>
                <th width="400"> <div align="center">ภาค</div></th>

    </tr>
    <?php
    while ($objResult = mysql_fetch_array($objQuery)) {
        ?>
        <tr>
            <td><div align="center"><a href="#" OnClick="selData('<?= $_GET["Line"]; ?>', '<?= $objResult["GEO_ID"]; ?>', '<?= $objResult["GEO_NAME"]; ?>');">
                        <?= $objResult["GEO_NAME"]; ?>
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