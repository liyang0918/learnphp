/*<!-- 表单-->*/
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>
<body>
<form action="ly_t8-1.php" method="post" name="form1" enctype="multipart/form-data">
    <table width="405" border="1" cellpadding="1" cellspacing="1" bordercolor="#FFFFFF" bgcolor="#999999">
        <tr bgcolor="#FFCC33">
            <td width="103" heigth="25" align="right">name: </td>
            <td width="144" heigth="25">
                <input name="user" type="text" id="user" size="20" maxlength="100">
            </td>
        </tr>
        <tr bgcolor="#FFCC33">
            <td height="25" align="ligth">sex: </td>
            <td height="25" clospan="2" align="left">
                <input name="sex" type="radio" value="Man" checked>Man
                <input type="radio" name="sex" value="Woman">Woman
            </td>
        </tr>
        <tr bgcolor="#FFCC33">
            <td width="103" height="25" align="right">Password: </td>
            <td width="289" height="25" colspan="2" align="left">
                <input name="pwd" type="password" id="pwd" size="20" maxlength="100">
            </td>
        </tr>
        <tr bgcolor="#FFCC33">
            <td height="25" align="right">Level: </td>
            <td width="289" height="25" colspan="2" align="left">
                <select name="select">
                    <option value="Mid">Mid</option>
                    <option value="High" selected>High</option>
                </select>
            </td>
        </tr>
        <tr bgcolor="#FFCC33">
            <td height="25" align="right">Hobbies: </td>
            <td height="25" colspan="2" align="left">
                <input name="fond[]" type="checkbox" id="fond[]" value="Music">Music
                <input name="fond[]" type="checkbox" id="fond[]"  value="Computer">Computer
                <input name="fond[]" type="checkbox" id="fond[]"  value="Football">Football
                <input name="fond[]" type="checkbox" id="fond[]"  value="Other">Other
            </td>
        </tr>
        <tr bgcolor="#FFCC33">
            <td height="25" align="right">Own Picture:  </td>
            <td height="25" colspan="2">
                <input name="photo" type="file" size="20" maxlength="1000" id="photo">
            </td>
        </tr>
        <tr bgcolor="#FFCC33">
            <td height="25" align="right">Profile:  </td>
            <td height="25" colspan="2">
                <textarea name="intro" cols="28" rows="4" id="intro"></textarea>
            </td>
        </tr>
        <tr align="center" bgcolor="#FFCC33">
            <td height="25" colspan="3">
                <input type="submit" name="submit" value="Submit">
                <input type="reset" name="submit2" value="reset">
            </td>
        </tr>
    </table>
</form>

<?php
if ($_POST[submit] != "") {
    echo "Your Own Resume content is: <br>";
    echo " name: ".$_POST[user]."<br>";
    echo " sex:".$_POST[sex]."<br>";
    echo " Password:".$_POST[pwd]."<br>";
    echo " Resume:".$_POST[select]."<br>";
    echo " Hobbies: "."<br />";
    for ($i = 0; $i < count($_POST[fond]); $i++)
        echo $_POST[fond][$i]."&nbsp;&nbsp;";

    echo "<br />";
    $path = '/home/liyang/upfiles/'.$_FILES['photo']['name'];
    # move_uploaded_file($_FILES['photo']['tmp_name'], $path);
    echo " Own Picture: ".$path."<br>";
    echo " Resume: ".$_POST[intro];
}
?>

</body>
</html>
