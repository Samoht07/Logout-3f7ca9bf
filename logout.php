<?php
session_start();
session_destroy();
echo 'You have been logged out. <a href="aanmelden.php">Go back</a>';
?>