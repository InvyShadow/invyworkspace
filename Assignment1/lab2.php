
<!DOCTYPE html
    PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Chào các bạn</title>
</head>

<body>
    
<?php
    if (isset($_REQUEST["a"]) && isset($_REQUEST["b"])) {
        $a = $_REQUEST["a"];
        $b = $_REQUEST["b"];
        if ($a == 0) {
            if ($b == 0) {
                $nghiem = "Phuong trinh vo so nghiem";
            }
            if ($b <> 0) {
                $nghiem = "Phuong trinh vo nghiem";
            }
        } else {
            $nghiem = -($b/$a);
        }
    }
?>
    <form action="lab2.php" method="post">
        <table width="744" border="1">
            <tr>
                <td colspan="3" bgcolor="#336699"><strong>Giải phương trình bậc 1 </strong></td>
            </tr>
            <tr>
                <td width="120">Phương trình </td>
                <td width="250">
                    <input name="a" type="text" />
                    X +
                </td>
                <td width="352"><label for="textfield"></label>
                    <input name="b" type="text" id="textfield" />
                    = 0
                </td>
            </tr>
            <tr>
                <td colspan="3">
                    Nghiệm
                    <label for="textfield2"></label>
                    <input name="kq" type="text" id="textfield2" value="<?php if(isset($nghiem)) echo $nghiem ?>"/>
            </tr>
            <tr>
                <td colspan="3" align="center" valign="middle"><input type="submit" name="chao" id="chao"
                        value="Xuất" /></td>
            </tr>
        </table>
    </form>
</body>

</html>

