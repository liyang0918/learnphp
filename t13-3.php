<table width="500" border="0" cellspacing="0" cellpadding="0">
    <form action="" method="post" enctype="multipart/form-data">
        <tr>
            <td width="150" heigth="30" align="right" valign="middle">Please select file to upload: </td>
            <td width="250">
                <input type="file" name="upfile"/>
            </td>
            <td width="100">
                <input type="submit" name="submit" value="UPLOAD"/>
            </td>
        </tr>
    </form>
</table>


<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 15-9-2
 * Time: 下午2:26
 */
    if (!empty($_FILES)) {
        foreach ($_FILES['upfile'] as $name => $value) {
            echo $name.'='.$value.'<br>';
        }

    }
?>