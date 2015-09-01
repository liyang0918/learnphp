<!DOCTYPE html>
<html>
<body>
<form id="form1" name="form1" method="post" action="ly_t11-2.php?<?=session_name(); ?>=<?=session_id(); ?>">
</form>
<?php
$sess_name = session_name();
$sess_id = $_GET[$sess_name];
session_id($sess_id);
session_start();
$_SESSION['admin'] = "mrsoft";

?>


</body>
</html>
