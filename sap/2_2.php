<html>
    <head>
        <meta charset="utf-8"> 
        <link rel='shortcut icon' href='/backend/upload/home.png'>
        <title>ข้อ 2</title>
    </head> 
    <body>
        <?php 
        include ("/connectDB.php");
        $sql="SELECT * FROM saptest";
        $object=mysql_query($sql) or die(mysql_error());
        while ($objResult = mysql_fetch_array($object)) {
        ?>
        <table border="1" width="80%">
            <tr>
                <td width="5%"><?= $objResult["id"];?></td>
                <td width="25%"><?= $objResult["firstname"];?></td>
                <td width="25%"><?= $objResult["lastname"];?></td>
                <td width="15%"><?= $objResult["citizen"];?></td>
                <td width="20%"><?= $objResult["birthdate"];?></td>
                 <td width="30%"><?= $objResult["address"];?></td>
                 <td width="5%"><a href=2edit.php?id=<?= $objResult["id"];?>>แก้ไข</a></td>
                </tr>
        </table>
        <?php
        }
        ?>
    </body>
</html>
