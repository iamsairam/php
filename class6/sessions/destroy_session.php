<?php
session_start();
session_destroy();
echo "session value destroyed";
echo $_SESSION['name'];
?>