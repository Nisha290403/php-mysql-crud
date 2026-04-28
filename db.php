<?php
session_start();

$conn = mysqli_connect(
  getenv('DB_HOST') ?: 'localhost',
  getenv('DB_USER'),
  getenv('DB_PASSWORD'),
  getenv('DB_NAME') ?: 'php_mysql_crud'
) or die(mysqli_error($conn));

?>