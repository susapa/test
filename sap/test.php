<!DOCTYPE html>
<html>
<body>

<?php
$a=array("a"=>"red","b"=>"green","c"=>"blue");
$b=array_search("red", $a);
$c=$a[$b];
$d=in_array("ReD", $a);
if (in_array("Red", $a)){
    echo 'มีสี '.$c;
    echo $d;
}

?>

</body>
</html>