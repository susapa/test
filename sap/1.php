<html>
    <head>
        <meta charset="utf-8"> 
        <link rel='shortcut icon' href='/backend/upload/home.png'>
        <title>ข้อ 1</title>
        <script language=JavaScript>
            function check_number() {
                e_k = event.keyCode
//if (((e_k < 48) || (e_k > 57)) && e_k != 46 ) {
                if (e_k != 13 && (e_k < 48) || (e_k > 57)) {
                    event.returnValue = false;
                    alert("ต้องเป็นตัวเลขเท่านั้น...00-99");
                }
            }
        </script>
        <style>

        </style>
    </head> 
    <body>
    <center><h1>ข้อที่ 1 รับค่าตัวเลขจ๊ะ</h1></center>
    <form name="form1" method="post" action="1_1.php">
        <table width="100%" border="0" cellspacing="5" cellpadding="0">
            <tr>
                <td>กรุณาป้อนตัวเลข 00-99
                    <input type="text" name="textfield" onkeypress=check_number(); maxlength="2" size="2">
                    <input type="submit" name="Submit" value="ตกลง">
                </td>
            </tr>
        </table>
    </form>

</body>
</html>
