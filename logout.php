<?php
session_start();
error_reporting(1);
include_once('db');
session_destroy();
echo "<script>";
echo "window.location.href='index';";
echo "</script>";

?>