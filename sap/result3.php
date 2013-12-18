<html>
    <head>
        <meta charset="utf-8"> 
        <title>ข้อ 3</title>
      <style>
        table{background-color: black;}
    </style>
    </head> 
  <body>
        <?php
        $num = $_POST['numberin'];
        $numre = $_POST['numberin'];
        if ($num % 2 == 0) {
            header('Location: http://localhost/testall/sap/3.php');
        } else {
            echo '<div align=center>';
            for ($num; $num > 0; $num--) {
                $use = $num;
               
                if ($use % 2 != 0) {
                     echo '<table ><tr>';
                    for ($use; $use > 0; $use--) {
                        echo '<td>||||</td>';
                    }
                }
                  echo '</tr></table>';
            }
             for($i=0;$i<=$numre;$i++){
                $use2 = $i;
                if ($use2 % 2 != 0 && $use2>2) {
                     echo '<table ><tr>';
                    for ($use2; $use2 > 0; $use2--) {
                        echo '<td>||||</td>';
                    }
                }
                  echo '</tr></table>';
            }
        }
      
        ?>
        </div>
    </body>
</html>
