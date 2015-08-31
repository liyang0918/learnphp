<!DOCTYPE html>
<html>
<body>
<!-- 获取单选框的值 -->
<form action="" method="post" name="form1">sex:
    <input name="sex" type="radio" value="1" checked>Man
    <input name="sex" type="radio" value="0">Woman
    <table width="445" cellpadding="0" cellspacing="0">
        <tr>
            <td width="443" height="41" align="center" valign="top">The kind of Books:<br />
                <input type="checkbox" name="mrbook[]" value="ForChildren">For children<br />
                <input type="checkbox" name="mrbook[]" value="ForHumen">For humen<br />
                <input type="checkbox" name="mrbook[]" value="ForSuperman">For superman<br />
                <input type="checkbox" name="mrbook[]" value="ForTalent">For talent<br />
            </td>
        </tr>
    </table>
    <input type="submit" name="Submit1" value="Submit">
</form>

<?php
echo "Radio value is :".$_POST["sex"]
?>
<br />

<?php
if (($_POST[mrbook] != null)) {
    echo "Checkbox value is : ";
    for ($i = 0; $i < count($_POST[mrbook]); $i++)
        echo $_POST[mrbook][$i]."&nbsp;&nbsp";
}
?>

<br />
<!-- 获取多选框的值 -->
<form name="form2" method="post" action="ly_t8-3.php">
    <table width="445" cellpadding="0" cellspacing="0">
        <tr>
            <td width="443" height="41" align="center" valign="top">The kind of Books:<br />
                <input type="checkbox" name="mrbook[]" value="ForChildren">For children<br />
                <input type="checkbox" name="mrbook[]" value="ForHumen">For humen<br />
                <input type="checkbox" name="mrbook[]" value="ForSuperman">For superman<br />
                <input type="checkbox" name="mrbook[]" value="ForTalent">For talent<br />
                <input type="submit" name="submit" value="submit">
            </td>
        </tr>
    </table>
</form>

<?php
if (($_POST[mrbook] != null)) {
    echo "Checkbox value is : ";
    for ($i = 0; $i < count($_POST[mrbook]); $i++)
        echo $_POST[mrbook][$i]."&nbsp;&nbsp";
}
?>

<br />
<!-- 获取选择菜单的值 -->
<form name="form3" method="post" action="">
    <table width="280" border="0" cellpadding="0" cellspacing="0">
        <tr>
            <td width="80" height="20" align="center"><span class="style2">Subject:</span></td>
            <td width="194">
                <select name="select[]" size="3" multiple>
                    <option value="Your Friends" selected>Your Friends</option>
                    <option value="Your Family">Your Family</option>
                    <option value="Your Parents">Your Parents</option>
                    <option value="Your Wife">Your Wife</option>
                </select>&nbsp;&nbsp;&nbsp;
                <input type="submit" name="submit" value="suuuuuuuuub">
            </td>
        </tr>
    </table>
</form>

<?php
if ($_POST[select] != "") {
    echo "Select value is : <br />";
    for ($i = 0; $i < count($_POST[select]); $i++)
        echo $_POST[select][$i]."&nbsp;&nbsp";
}
?>

<br />
<form name="form4" method="post" action="ly_t8-3.php">
    <input type="file" name="file" size="15">
    <input type="submit" name="upload" value="upload">
</form>
<?php
echo $_POST[file];
?>

</body>
</html>
