<!DOCTYPE html>
<html><body>

<?php

/* 连接数据库 mysql_connect() */
$link = mysql_connect("localhost", "php", "php123456") or die("Connect error".mysql_error());
if($link) {
	echo "Connect success!"."<br>";
}

/* 选择数据库mysql_select_db(databasename, link) link是已建立的数据库连接 */
$db_selected = mysql_select_db("php1", $link);
if ($db_selected) {
	echo "Select success!"."<br>";
}

/* 执行sql语句 mysql_query(string,$link),返回的result是一个resuorce类型 */
#$result = mysql_query("insert index_tbl values(10010, 'LiYanNian', 'Man', 26)", $link);
#$arr = mysql_fetch_array($result);
#print_arr($arr);

$result = mysql_query("select Number,name,age from index_tbl order by age");
/* 从$result中提取数组mysql_fetch_array() ,如果查询结果有多条，则每次返回一条结果的数组 */
$arr = mysql_fetch_array($result);
if ($arr):
?>
<table align="left">
	<tr>
		<th><?php echo "Number"; ?></th>
		<th><?php echo "name"; ?></th>
		<th><?php echo "age"; ?></th>
	</tr>
<?php endif ?>
<?php
	do {
		$number = $arr["Number"];
		$name = $arr["name"];
		$age = $arr["age"];
		echo "<tr><td>$number</td><td>$name</td><td>$age</td></tr>";
		$arr = mysql_fetch_array($result);
	} while ($arr);
?>

</table>

</body></html>
