<html><body>
<?php
session_start();
session_destroy();
header("location: home.php");
?>
</body></html>