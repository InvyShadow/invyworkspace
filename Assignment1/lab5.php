<!DOCTYPE html
    PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Untitled Document</title>
</head>

<body>

<?php

    function giaibac2 ($a,$b,$c) {
        if ($a == 0) {
            
        }

        if ($a <> 0) {
            $delta = pow($b, 2) - 4 * $a * $c;
            if ($delta < 0) {
                $nghiem = "Phuong trinh vo nghiem";
            } else if ($delta = 0) {
                $nghiem = (-$b)/(2*$a);
            } else {
                $candelta = sqrt($delta);
                $x1 = (-$b + $candelta)/ (2*$a);
                $x2 = (-$b - $candelta) / (2*$a);
                $nghiem = "Phuong trinh co 2 nghiem phan biet x1 = " . round($x1) . " x2 = " . round($x2);
            
            }
        }
        return $nghiem;
    }
    if (isset($_REQUEST["a"]) && isset($_REQUEST["b"]) && isset($_REQUEST["c"])) {
        $nghiem = giaibac2($_REQUEST["a"] , $_REQUEST["b"] , $_REQUEST["c"]); 
    }

?>
    <form action="#" method="post">
        <table width="806" border="1">
            <tr>
                <td colspan="4" bgcolor="#336699"><strong>Giải phương trình bậc 2</strong></td>
            </tr>
            <tr>
                <td width="83">Phương trình </td>
                <td width="236">
                    <input name="a" type="text" />
                    X^2 +
                </td>
                <td width="218"><label for="textfield3"></label>
                    <input type="text" name="b" id="textfield3" />
                    X+
                </td>
                <td width="241"><label for="textfield"></label>
                    <input type="text" name="c" id="textfield" />
                    =0
                </td>
            </tr>
            <tr>
                <td colspan="4">
                    Nghiệm
                    <label for="textfield2"></label>
                    <input name="textfield" type="text" id="textfield2" width="400" value="<?php if(isset($nghiem)) echo $nghiem ?>" />
            </tr>
            <tr>
                <td colspan="4" align="center" valign="middle"><input type="submit" name="chao" id="chao"
                        value="Xuất" /></td>
            </tr>
        </table>
    </form>
</body>

</html>