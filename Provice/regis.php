<html>
    <head>
        <title>jQuery</title>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <script type="text/javascript" src="jquery-2.0.3.min.js"></script>
        <?php
        include("connectDB.php");
        ?>
        <script type="text/javascript">
            function OpenPopup(intlocal) {
                window.open('getlocal' + intlocal + '.php?Line=' + intlocal, 'myPopup', 'width=350,height=400,toolbar=0, menubar=0,location=0,status=1,scrollbars=1,resizable=1,left=0,top=0');
            }
            function OpenPopup2(intlocal) {
                var Geo1 = document.form.GeographyID_1.value;
                window.open('getlocal' + intlocal + '.php?Line=' + intlocal + '&Line2=' + Geo1, 'myPopup', 'width=350,height=400,toolbar=0, menubar=0,location=0,status=1,scrollbars=1,resizable=1,left=0,top=0');
            }
            function OpenPopup3(intlocal) {
                var Geo1 = document.form.GeographyID_1.value;
                var Pro1 = document.form.ProvinceID_2.value;
                window.open('getlocal' + intlocal + '.php?Line=' + intlocal + '&Line2=' + Geo1 + '&Line3=' + Pro1, 'myPopup', 'width=350,height=400,toolbar=0, menubar=0,location=0,status=1,scrollbars=1,resizable=1,left=0,top=0');
            }
            function OpenPopup4(intlocal) {
                var Geo1 = document.form.GeographyID_1.value;
                var Pro1 = document.form.ProvinceID_2.value;
                var Amp1 = document.form.AmphurID_3.value;
                window.open('getlocal'+ intlocal + '.php?Line=' + intlocal + '&Line2=' + Geo1 + '&Line3=' + Pro1 + '&Line4=' + Amp1, 'myPopup', 'width=350,height=400,toolbar=0, menubar=0,location=0,status=1,scrollbars=1,resizable=1,left=0,top=0');
            }
            $(document).ready(function() {

                $("#Pro").hide();
                $("#Pro2").hide();
                $("#Pro3").hide();
                $("#btnPopup_1").click(function() {
                    $("#Pro").show();
                });
                $("#btnPopup_2").click(function() {
                    $("#Pro2").show();
                });
                $("#btnPopup_3").click(function() {
                    $("#Pro3").show();
                });
            });
        </script>
    </head>
    <body>
        <form name="form" method="post" action="">
            <table width="400" border="1">
                <tr>
                    <td width="100">
                        <div align="center">
                            ภาค
                        </div>
                    </td>
                    <td width="300">
                        <div align="center">
                            <INPUT TYPE="TEXT" SIZE="20" NAME="Geography_1"  disabled="disabled" ID="Geography_1" VALUE="" >
                            <INPUT TYPE="BUTTON" NAME="btnPopup_1"  ID="btnPopup_1" VALUE="..." OnClick="OpenPopup(1)">
                            <INPUT TYPE="hidden"  NAME="GeographyID_1"  ID="GeographyID_1" VALUE="">
                        </div>
                    </td>
                </tr>
            </table>
            <table  ID="Pro" width="400" border="1">
                <tr>
                    <td width="100">
                        <div align="center">
                            จังหวัด
                        </div>
                    </td>
                    <td  width="300">
                        <div align="center">
                            <INPUT TYPE="TEXT" SIZE="20" NAME="Province_2" disabled="disabled" ID="Province_2" VALUE="">
                            <INPUT TYPE="BUTTON" NAME="btnPopup_2"  ID="btnPopup_2" VALUE="..." OnClick="OpenPopup2(2)">
                            <INPUT TYPE="hidden"  NAME="ProvinceID_2"  ID="ProvinceID_2" VALUE="">
                            <INPUT TYPE="hidden"  NAME="ProvinceCODE_2"  ID="ProvinceCODE_2" VALUE="">
                        </div>
                    </td>
                </tr>
            </table>
            <table ID="Pro2" width="400" border="1">
                <tr>
                    <td width="100">
                        <div align="center">
                            อำเภอ
                        </div>
                    </td>
                    <td width="300">
                        <div align="center">
                            <INPUT TYPE="TEXT" SIZE="20" NAME="Amphur_3"  disabled="disabled" ID="Amphur_3" VALUE="">
                            <INPUT TYPE="BUTTON" NAME="btnPopup_3"  ID="btnPopup_3" VALUE="..." OnClick="OpenPopup3(3)">
                            <INPUT TYPE="hidden"  NAME="AmphurID_3"  ID="AmphurID_3" VALUE="">
                            <INPUT TYPE="hidden"  NAME="AmphurCODE_3"  ID="AmphurCODE_3" VALUE="">
                        </div>
                    </td>
                </tr>
            </table>
            <table  ID="Pro3" width="400" border="1">
                <tr>
                    <td width="100">
                        <div align="center">
                            ตำบล
                        </div>
                    </td>
                    <td width="300">
                        <div align="center">
                            <INPUT TYPE="TEXT" SIZE="20" NAME="District_4"  disabled="disabled" ID="District_4" VALUE="">
                            <INPUT TYPE="BUTTON" NAME="btnPopup_4"  ID="btnPopup_4" VALUE="..." OnClick="OpenPopup4(4)">
                            <INPUT TYPE="hidden"  NAME="DistrictID_4"  ID="DistrictID_4" VALUE="">
                            <INPUT TYPE="hidden"  NAME="DistrictCODE_4"  ID="DistrictCODE_4" VALUE="">
                        </div>
                    </td>
                </tr>
            </table>
        </form>

    </body>
</html>