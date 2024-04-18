<?php
session_start();
$_SESSION["check_chair"]="No";
$_SESSION["check_reviewer"]="No";
$_SESSION["check_author"]="No";
header("Location:index.php");
?>