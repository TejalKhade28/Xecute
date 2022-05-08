<?php

require_once 'db.php';
if(isset($_POST['addtask'])){
  $task_add = $_POST['textfield'];
  $user = $_POST['user'];
  $priority = $_POST['prior'];
  if(!empty($task_add)){
    $task_add_query = "INSERT INTO task_table (task_name, user, priority) VALUES  ('$task_add','$user','$priority')";
    $add_query = $dbcon -> query($task_add_query);
  }

  header('location: index.php');
}

?>
