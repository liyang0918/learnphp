<!DOCTYPE html>
<html>
<body>
<table width="500" border="1" cellspacing="0" cellpadding="0">
    <tr>
        <td width="253" height="100" align="right" valign="middle" scope="col">readfile():</td>
        <td width="241" height="100" align="center" valign="middle" scope="col">
            <?php readfile("_manage.sh"); ?>
        </td>
    </tr>
    <tr>
        <td height="100" align="right" valign="middle">file():</td>
        <td height="100" align="center" valign="middle">
            <?php
            $f_arr = file("_manage.sh");
            foreach($f_arr as $cont) {
                echo $cont."<br>";
            }
            ?>
        </td>
    </tr>
    <tr>
        <td width="250" height="25" align="right" valign="middle" scope="col">file_get_contents(): </td>
        <td height=25" align="center" valign="middle" scope="col">
        <?php
            $f_chr = file_get_contents("_manage.sh");
            echo $f_chr;
        ?>
        </td>
    </tr>
</table>
</body>
</html>

