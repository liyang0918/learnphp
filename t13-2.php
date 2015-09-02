<table border="1" cellspacing="0" cellpadding="0">
    <tr>
        <td align="right" valign="middle" scope="col">ʹ��fgets()����:</td>
        <td align="center" valign="middle" scope="col">
            <?php
            $fopen = fopen('ly_t13-1.php', 'rb');
            while (!feof($fopen)) {

                echo fgets($fopen);
            }
            fclose($fopen);
            ?>
        </td>
    </tr>
    <tr>
        <td align="right" valign="middle">ʹ��fgetss()����: </td>
        <td align="center" valign="middle">
            <?php
            $fopen = fopen('ly_t13-1.php', 'rb');
            while (!feof($fopen)) {
                echo fgetss($fopen);
            }
            fclose($fopen);
            ?>
        </td>
    </tr>
</table>