<?php
session_start();
require_once 'db.php';
$id = base64_decode($_GET['id']);
$data = "SELECT * FROM task_table WHERE id=$id";
$data_from_db = $dbcon->query($data);
$f_result = $data_from_db->fetch_assoc();

if (isset($_POST['update'])) {
  $update_text = $_POST['update_text'];
  $update_query = "UPDATE task_table SET task_name='$update_text' WHERE id=$id";
  $update_date = $dbcon->query($update_query);
  if ($update_date) {
    $_SESSION['upadate_success'] = "Task updated successfully!";
  }
  header('location: index.php');
}

?>

<?php
require_once 'header.php';
?>

<html>

<head>
  <title>Update Task</title>

  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    body {
      background: url(./images/bg.jpg);
      /* background-color: rgb(0, 0, 0); */
      color: whitesmoke;
      font-family: "Poppins", sans-serif;
      min-height: 100vh;
      height: 100%;
      background-position: center;
      background-repeat: no-repeat;
      background-size: cover;
    }

    .btn-block {
      width: 45%;
      display: inline-block;
      margin-left: 28%;
      margin-top: 10px;
      background: #AFB4FF;
      color: #333;
      font-size: 1.5em;
      font-family: ‘Georgia’, serif;
      border-radius: 50px;
      padding: 8px 16px;
      justify-content: center;
      border: none;
    }

    .form-control-lg {
      border-radius: 25px;
      border: black;
      background: #F5E8C7;
    }
  </style>
</head>

<body>
  <div class="container">
    <div class='row'>

      <div class='col-8 mx-auto mt-5'>
        <h2 class=" mx-auto mt-2 text-center" style="font-size: 3rem; color:#0096FF; font-family: ‘Georgia’, serif; ">Update Task</h2>
        <h5 style="margin: 30px 0px;">Have you named it wrong ? Xecute gives you a chance to update or edit your task <center> again.</center>
        </h5>
        <form class="" action="" method="post">
          <div class='form-group'>
            <input class="form-control form-control-lg" type="text" name="update_text" value="<?= $f_result['task_name'] ?>">
          </div>
          <div class='form-group'>
            <button class="btn btn-success btn-block" type="submit" name="update" value="Update">Update</button>
          </div>
          <div>
            <a href="index.php" class="btn btn-danger btn-block">Cancel</a>
          </div>
        </form>
      </div>
    </div>
  </div>

</body>

</html>