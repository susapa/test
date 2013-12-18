<html>
    <head>
        <meta charset="utf-8"> 
        <link rel='shortcut icon' href='/backend/upload/home.png'>
        <title>ข้อ 2</title>
    </head> 
    <body>
        <?php
        include ("/connectDB.php");
        $idin=$_GET["id"];
        echo $idin;
          $sql="SELECT * FROM saptest where id ='$idin'";
        $object=mysql_query($sql) or die(mysql_error());
        ?>
       <form action="2_1.php" method="post" name="form1">
           <table width="450" border="1">
            <tr>
                <td width="150">ชื่อ</td>
                <td width="300"><input type="text" name="fname" size="40" value="<?php echo $object['id']; ?>"></td>
            </tr>
            <tr>
                <td width="150">นามสกุล</td>
                <td width="300"><input type="text" name="lname" size="40" ></td>
            </tr>
            <tr>
                <td width="150">เลขบัตรประชาชน</td>
                <td width="300"><input type="text" name="id" size="40" ></td>
            </tr>
            <tr>
                <td width="150">วันเดือนปีเกิด</td>
                <td width="300"><input type="text" name="date" size="40" ></td>
            </tr>
            <tr>
                <td width="150">ที่อยู่</td>
                <td width="300"><input type="text" name="address" size="40" ></td>
            </tr>
        </table>
           <input type="submit" value="บันทึก">
        </form>
        <button onclick="window.location.href='2_2.php'">รายชื่อ</button>
    </body>
</html>
