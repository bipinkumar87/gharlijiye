<?php
session_start();
session_destroy();
header("Location: http://localhost/gharlijiye-main/index.php");
?>