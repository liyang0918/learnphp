<form action="" method="post" enctype="multipart/form-data" name="form">
    <input name="up_file" type="file" />
    <input type="submit" name="submit" value="UPLOAD" />
</form>


<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 15-9-2
 * Time: 下午2:44
 */
    if (!empty($_FILES[up_file][name])) {
        $fileinfo = $_FILES[up_file];
        if ($fileinfo['size'] < 1000000 && $fileinfo['size'] > 0) {
            move_uploaded_file($fileinfo['tmp_name'], $fileinfo['name']);
        } else {
            echo 'File is too large or unknown';
        }
    }