<html>
    <head>
        <meta charset="utf-8"> 
        <link rel='shortcut icon' href='/backend/upload/home.png'>
        <title>ข้อ 3</title>
        <script language="JavaScript">
            function check_number() {
                e_k = event.keyCode
//if (((e_k < 48) || (e_k > 57)) && e_k != 46 ) {
                if (e_k != 13 && (e_k < 48) || (e_k > 57)) {
                    event.returnValue = false;
                    alert("ต้องเป็นตัวเลขเท่านั้น... \nกรุณาตรวจสอบข้อมูลของท่านอีกครั้ง...");
                }
            }
            function num() {
                var numin = document.getElementById("number").value;
                if (numin % 2 != 0) {
                    alert("เลขที่ใส่เข้ามา " + numin);
                    return ture;
                } else {
                    alert("กรุณาใส่เลขจำนวนคี่");
                    return false;
                }
            }
        </script>
    </head> 
    <body>
        <form action="result3.php" method="post" >
            Row Number: <input type="text" id="number" name="numberin" onKeypress=check_number(); size="10" >
            <input type="submit"  onclick=num(); >
        </form>

    </body>
</html>
