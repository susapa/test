<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script type="text/javascript" src="jquery-2.0.3.min.js"></script>
<script type="text/javascript">
$_province=function(Obj){
 var city =  $('#city');
    var amphur =  $('#amphur');
    var tumbon =  $('#tumbon');
 if(Obj.attr('id')=='city'){//ตรวจสอบการคลิก list menu จังหวัด
  var query = 'city=' + city.val();
 }else if(Obj.attr('id')=='amphur'){//ตรวจสอบการคลิก list menu อำเภอ
  var query = 'city=' + city.val() + '&amphur=' + amphur.val();
 }else{//ค่าเริ่มต้น
  var query = 'city=' + city.val() + '&amphur=' + amphur.val() + '&tumbon=' + tumbon.val();
 }
 $.ajax({
 url:"provinceshow.php?"+query,//ร้องขอข้อมูล
 dataType: 'xml',//รับข้อมูลแบบxml
 success: function(data) {
  var cityNode=$(data).find("city");
  var items = cityNode.find('*');
  $_addSelectOption(city,items,city.val());

  var amphurNode=$(data).find("amphur");
  var items = amphurNode.find('*');
  $_addSelectOption(amphur,items,amphur.val());

  var tumbonNode=$(data).find("tumbon");
  var items = tumbonNode.find('*');
  $_addSelectOption(tumbon,items,tumbon.val());
 }
 });
}
$_addSelectOption=function(obj,items,selected){
var obj_op=obj.find('option');
obj_op.each(function(){//ลบoptionของ list menu
if($(this).val()!=""){
 $(this).remove();
}
});
items.each(function(){
var itemsplit=$(this).text().split("_");
var iTemSelect=selected==itemsplit[0]?'selected="selected"':"";
obj.append('<option value="'+itemsplit[0]+'" '+iTemSelect+'>'+itemsplit[1]+'</option>');
});
}
$(document).ready(function(){
 $('#city ,#amphur').change(function(){
  $_province($(this));
 });
$_province($('#city'));
});
</script>
<title>เลือกที่อยู่</title>
</head>
<body>
<form id="form1" name="form1" method="post" action="">
<p><select id="city" name="city"><option value="">--เลือกจังหวัด--</option></select></p>
<p><select id="amphur" name="amphur"><option value="">--เลือกอำเภอ--</option></select></p>
<p><select id="tumbon" name="tumbon"><option value="">--เลือกตำบล--</option></select></p>
<p><input type="submit" name="btsend" value="ส่ง"/></p>
</form>
</body>
</html>