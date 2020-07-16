<?php
session_start();
session_destroy();
echo "you have sucessfully logged out .<br>to log in again <a href='login.php'>click here</a>";

?>