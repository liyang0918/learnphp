<?php
if (!isset($_COOKIE["visittime"])) {
    setcookie("visittime", date("y-m-d H:i:s"));
    echo "This is your first visit!";
} else {
    setcookie("visittime", date("y-m-d H:i:s"), time()+60);
    echo "The last time you visit is : ".$_COOKIE["visittime"];
    echo "<br>";
}
echo "Current time: ".date("y-m-d H:i:s");

?>
