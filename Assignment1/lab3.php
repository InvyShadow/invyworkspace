<!DOCTYPE html
    PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Xuất số thành chữ</title>
</head>

<body>
<?php 
    if(isset($_REQUEST["so"])) {
        if (is_numeric($_REQUEST["so"])) {
            $so = $_REQUEST["so"];
            switch($so){
                case 0:
                    $chu = "Khong";
                    break;
                case 1:
                    $chu = "Mot";
                    break;
                case 2:
                    $chu = "Hai";
                    break;
                case 3:
                    $chu = "Ba";
                    break;
                case 4:
                    $chu = "Bon";
                    break;
                case 5:
                    $chu = "Nam";
                    break;
                case 6:
                    $chu = "Sau";
                    break;
                default:
                break;
            }
        }
    }
?>
    <form action="#" method="POST">
        <table width="519" border="1">
            <tr>
                <td colspan="3">Đọc số</td>
            </tr>
            <tr>
                <td>Nhập số (0-9)</td>
                <td width="69" rowspan="2"><input type="submit" name="button" id="button" value="Submit" /></td>
                <td> Bằng chữ</td>
            </tr>
            <tr>
                <td width="177">
                    <p>
                        <label for="textfield"></label>
                        <input type="text" name="so" id="textfield" />
                    </p>
                </td>
                <td width="232"><label for="textfield2"></label>
                    <input type="text" name="chu" id="textfield2" value="<?php if (isset($chu)) echo $chu  ?>"/>
                </td>
            </tr>
        </table>
    </form>
</body>

</html>

