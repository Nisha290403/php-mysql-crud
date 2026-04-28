<?php

include("db.php");

if(isset($_GET['id'])) {
  $id = filter_var($_GET['id'], FILTER_VALIDATE_INT);
  if($id === false) {
    die("Invalid ID.");
  }

  $stmt = mysqli_prepare($conn, "DELETE FROM task WHERE id = ?");
  if(!$stmt) {
    die("Query Failed.");
  }

  mysqli_stmt_bind_param($stmt, "i", $id);
  $result = mysqli_stmt_execute($stmt);
  if(!$result) {
    die("Query Failed.");
  }

  $_SESSION['message'] = 'Task Removed Successfully';
  $_SESSION['message_type'] = 'danger';
  header('Location: index.php');
}

?>