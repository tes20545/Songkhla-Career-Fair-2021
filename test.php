<?php
echo "<form action=\"page.php\" method=\"post\">";
echo "favorite color:<input type=\"text\" name=\"color\" size=\"20\"><br/>";
echo "name:<input type=\"text\" name=\"name\" size=\"20\"><br/>";
echo "<input type=\"submit\" value=\"Submit\" />";
echo "<br /><input type=\"hidden\" name=\"submitted\" value=\"true\" />";
?>