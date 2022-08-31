<?php
session_start();
if(!isset($_SESSION['username'])){
    header('location:signlog.php');
require_once "header.php";
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>TodoList</title>
    <link href="https://fonts.googleapis.com/css?family=Poppins&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css" integrity="sha256-mmgLkCYLUQbXn0B1SRqzHar6dCnv9oZFPEC1g1cwlkk=" crossorigin="anonymous" />
    <link rel="stylesheet" href="style.css" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous"/>
   <!-- <link rel="stylesheet" href="style1.css" /> -->
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">

<style>
    /* TODO APP */

* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

body {
    background: url(./images/bg.jpg);
    color: whitesmoke;
    font-family: "Poppins", sans-serif;
    min-height: 100vh;
    height: 100%;
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
}

header {
    font-size: 2rem;
}

header,
form {
    min-height: 20vh;
    display: flex;
    justify-content: center;
    align-items: center;
}

form input,
form button {
    padding: 0.5rem;
    font-size: 2rem;
    border: none;
    background: #ffffff87;
}

form button {
    color: rgb(20, 19, 19);
    background: #ffffff87;
    cursor: pointer;
    transition: all 0.3s ease;
}

form button:hover {
    background: rgb(0, 0, 0);
    ;
    color: #fffffffd;
}

.todo-container {
    display: flex;
    justify-content: center;
    align-items: center;
}

.todo-list {
    min-width: 30%;
    list-style: none;
}

.todo {
    margin: 0.5rem;
    background: #ffffffc9;
    font-size: 1.5rem;
    color: black;
    display: flex;
    justify-content: space-between;
    align-items: center;
    transition: all 1s ease;
}

.filter-todo {
    padding: 1rem;
}

.todo li {
    flex: 1;
}

.trash-btn,
.complete-btn {
    background: #ce4f4f;
    color: white;
    border: none;
    padding: 1rem;
    cursor: pointer;
    font-size: 1rem;
}

.complete-btn {
    background: rgb(0, 0, 0);
    ;
}

.todo-item {
    padding: 0rem 0.5rem;
}

.fa-trash,
.fa-check {
    pointer-events: none;
}

.fall {
    transform: translateY(10rem) rotateZ(20deg);
    opacity: 0;
}

.completed {
    text-decoration: line-through;
    opacity: 0.5;
}


/*CUSTOM SELECTOR */

select {
    -webkit-appearance: none;
    -moz-appearance: none;
    -ms-appearance: none;
    appearance: none;
    outline: 0;
    box-shadow: none;
    border: 0 !important;
    background-image: none;
}


/* Custom Select */

.select {
    margin: 1rem;
    position: relative;
    overflow: hidden;
}

select {
    color: rgb(0, 0, 0);
    background: #ffffff87;
    font-family: "Poppins", sans-serif;
    cursor: pointer;
    width: 12rem;
}

.btn-sm {
  margin: 0px 10px;
  border-radius: 15px !important;
  width: 90px !important;
  padding: 4px !important;
  font-size: 15px !important;
}
.btn-sm:hover{
  color: #111 !important;
  font-weight: bold;
}
/* Arrow */

.select::after {
    content: "\25BC";
    position: absolute;
    top: 0;
    right: 0;
    padding: 1rem;
    background: rgb(0, 0, 0);
    cursor: pointer;
    pointer-events: none;
    transition: all 0.5s ease;
}


/* Transition */

.select:hover::after {
    background: rgb(0, 0, 0);
    color: rgb(0, 0, 0);
}


  

.nav-bar {
    
    background-image: linear-gradient(60deg, #184d8a 0%, #1a070b 100%);
    padding: 0px;
    font-family: sans-serif;
    background-color: #0047AB;
    <!-- box-shadow: 0 0 25px 0 blue; -->
}

 .nav-bar img {
    height: 35px;
    float: right;
    margin-right: 20px;
}

.menu-left {
    text-align: left;
}

ul li {
    display: inline-block;
    margin: 10px;
    list-style: none;
}



span {
    margin: 0 20px;
    font-size: 28px;
    cursor: pointer;
 display: none; 
} 

@media only screen and (max-width: 700px) {
    span {
        display: block;
    }
    ul li {
        display: block;
    }
    ul {
        display: none;
    }
}

h1 {
    text-align: center;
    font-size: 65px;
    color: #f1eef7;
}

h2 {
    text-align: center;
    font-size: 65px;
    color: #f1eef7;
}

h3 {
    text-align: center;
    font-size: 65px;
    color: #f1eef7;
}


td {
    color: #f1eef7;
}

/*border-radius: 10px;
  border: 1px solid #73AD21;*/
  

li a:hover:not(.active) {
  background-color: #111;
  border-radius: 100px;
  border: 1px solid #73AD21;
}

.active {
  background-color: #04AA6D;
}

.btn1 {
    display: inline-block;
    border: none;
    background: rgb(0, 0, 0);
    color: #fff;
    padding: 0.75rem 1.5rem;
    margin-top: 1rem;
    transition: opacity 1s ease-in-out;
    text-decoration: none;
}

.btn1:hover {
    opacity: 0.7;
    background-color: rgb(0, 0, 0);
}

.sci {
    position: absolute;
    top: 50%;
    right: 30px;
    transform: translateY(-50%);
    display: flex;
    justify-content: center;
    align-items: center;
    flex-direction: column;
}

/* .sci li {
    list-style: none;
    margin: 5px 0;
    transform: scale(0.7);
    filter: invert(1);
} */

.sci i{
  margin: 10px 0px;
  font-size: 35px;
}

.fa-instagram{
  color: #f435b7;
}
.fa-facebook{
  color:#0077b5;
}
.fa-twitter{
  color:#55acee;
}
 
.fa-instagram:hover{
  color: wheat;
  background-color: #f435b7;
  border-radius: 30px;
  padding: 2px;
}
.fa-facebook:hover{
  color:wheat;
  background-color: #0077b5;
  border-radius: 30px;
}
.fa-twitter:hover{
  color:wheat;
  background-color:#55acee;
  border-radius: 30px;
  padding: 2px;
}
 

.clock {
    position: absolute;
    top: 25%;
    /* left: 50%; */
    right: -11%;
    transform: translateX(-50%) translateY(-50%);
    color: rgb(0, 0, 0);
    font-size: 90px;
    font-family: Orbitron;
    letter-spacing: 10px;
}

.button {
  display: inline-block;
  border-radius: 4px;
  background-color: #f4511e;
  border: none;
  color: #FFFFFF;
  text-align: center;
  font-size: 28px;
  padding: 20px;
  width: 200px;
  transition: all 0.5s;
  cursor: pointer;
  margin: 5px;
}

.button span {
  cursor: pointer;
  display: inline-block;
  position: relative;
  transition: 0.5s;
}

.button span:after {
  content: '\00bb';
  position: absolute;
  opacity: 0;
  top: 0;
  right: -20px;
  transition: 0.5s;
}

.button:hover span {
  padding-right: 25px;
}
.btn-success .btn-lg{
  /* margin-top: 6px; */
  /* border-radius: 25px!important;  */
   padding: 7.5px 19px !important;

}
.form-select{
  padding-top: 11.5px  ;
  padding-bottom: 12px;
  margin-bottom: 5px;
  /* border-radius: 25px!important; */
}
select {
  padding: 5px 15px;
  border: none;
  border-radius: 4px;
  background-color: #cee6ed;
}

.button:hover span:after {
  opacity: 1;
  right: 0;
}
</style>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

</head>

<body>
    <!--<div id="MyClockDisplay" class="clock" onload="showTime()"></div>-->

     
  <!--  <div class="sidebar">
    <h3>  Welcome <?php echo $_SESSION['username']; ?> </h3>
        <a class="active" href="index1.html">Home</a>
        <a href="signlog.php">Sign Up</a>
        <a href="contact.html">Contact</a>
        <a href="about.html">About</a>
        <a href="logout.php">Logout</a>
    </div> -->

    <div class="nav-bar" >
        
        <div class="menu-right">
             <span onClick="myFunction()">&#9776;</span> 
            <ul id="menu">
                 
                 
                <li><a href="index.php" style="display: block; color: white; text-align: center; padding: 14px 16px; text-decoration: none;"><i class="fa fa-fw fa-home"></i>&nbsp;HOME</a></li>
                <li><a href="contact.php" style="display: block; color: white; text-align: center; padding: 14px 16px; text-decoration: none;"><i class="fa fa-fw fa-envelope"></i>&nbsp;CONTACT US</a></li>
                <li><a href="about.html" style="display: block; color: white; text-align: center; padding: 14px 16px; text-decoration: none;"><i class="fa fa-fw fa-info-circle"></i>&nbsp;ABOUT US</a></li>
                <li  style="float:right"><a href="index1.html" style="display: block; color: white; text-align: center; padding: 14px 16px; text-decoration: none;"><i class="fa fa-fw fa-user"></i>&nbsp;LOGOUT</a></li>
                
            </ul>
        </div>


    </div>
    <h3>   Welcome <?php echo $_SESSION['username']; $user1=$_SESSION['username']; ?> </h3>
     <script>
        function myFunction() {
            var x = document.getElementById("menu");

            if (x.style.display == "block") {
                x.style.display = "none";
            } else {
                x.style.display = "block";
            }
        }
    </script>  



<div class="container">
  <div class="row">
    <div class="col-12 m-auto">

    <h2 class="display-4 text-center">This is Your To Do List</h2>
      <form class="mt-4" action="index_valid.php" method="post">
        <div class="form-group col-4"><br><br>
            <input class= "form-control form-control-lg" type="text" name="textfield" placeholder="Enter your task"  >
            <input type="hidden" value="<?php echo $user1; ?>" name="user">
        </div>
        <div class="col-md-3">
    <label for="validationServer04" class="form-label" style="color: lightblue; font-size: 20px;" >Priority</label>
    <select class="form-select is-invalid" id="validationServer04" name="prior" aria-describedby="validationServer04Feedback" required>
      <option selected disabled value="">Select Priority</option>
      <option>High</option>
      <option>Medium</option>
      <option>Low</option>
    </select>
  
    <div id="validationServer04Feedback" class="invalid-feedback">
      Please select a valid state.
    </div>
  </div>
        <div><br>
          <input class=" btn btn-success btn-lg"  type="submit" name="addtask" value="Add Task" >
          
        </div>
      </form>
      <form method="post">
    <div class="col-3  ">
        <label style="color: lightblue; font-size: 25px;"> Tasks To Be Displayed</label>
    </div>

    <div class="text-center">
        <input style="padding-right: 55px;" class="btn btn-info" type="submit" name="all"
                value="&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;All Tasks"/>
    </div>

    <div class="col-2">     
        <input class="btn btn-info" type="submit" name="high"
                value="High Priority Tasks"/>
    </div>
    
    <div class="">    
        <input class="btn btn-info" type="submit" name="medium"
                value="Medium Priority Tasks"/>
    </div>

    <div class="col-2">
        <input  class="btn btn-info" type="submit" name="low"
                value="Low Priority Tasks"/>
    </div>
</form>
        
    </div>
  </div>
<!-- ===================== show delete alert message ============= -->
<?php 
  if(isset($_SESSION['delete_success'])) { ?>

<div class="alert alert-warning text-dark  mx-auto mt-4" role="alert" style="width:66%;">
  <?=$_SESSION['delete_success'];?>
</div>



<?php
  unset($_SESSION['delete_success']);

}

?>

<!-- ========================== update alert message ==================== -->

<?php 
  if(isset($_SESSION['upadate_success'])) { ?>

<div class="alert alert-warning text-dark  mx-auto mt-4" role="alert" style="width:66%;">
  <?=$_SESSION['upadate_success'];?>
</div>



<?php
  unset($_SESSION['upadate_success']);

}

?>

<!-- =================================== table =========================== -->

<!-- ---------------------------------------ALL TASKS-------------------------------------------------   -->
<?php 
if(isset($_POST['all'])) {
    ?>

<table style="width:66%;" class="table table-sm table-borderless table-striped text-center mx-auto mt-3" > 
<thead class="bg-dark text-white text-center">
  <tr>
    <th>Serial</th>
    <th>Task</th>
    <th>Added date</th>
    <th>Added time</th>
    <th>Action </th>
  </tr>
</thead>


<?php


require_once "db.php";
$user=$_SESSION['username'];
$task_show_query = "SELECT * FROM task_table WHERE user='$user'";
$result = $dbcon -> query($task_show_query);
if($result->num_rows!=0){
  $serial = 1;
   foreach ($result as $row) {
    $temp_date_time=(explode(' ',$row['added_tiime']));
    $date = $temp_date_time[0];
    $time = $temp_date_time[1];
  

?>

<tr>
  <td><?=$serial++?></td>
  <td ><?=$row['task_name'] ?></td>
  <td><?=$date?></td>
  <td><?=$time?></td>
  <td>

  <div class="btn-group">
    <a class="btn btn-sm btn-success" href="update.php?id=<?php echo base64_encode($row['id']); ?>">Update</a>
    <a class="btn btn-sm btn-danger" href="delete.php?id=<?php echo base64_encode($row['id']); ?>">Delete</a>
    </div>
  </td>
</tr>

<?php
}
}
// ========================== if no data found ========================
else{
?>
  <tr>
  <td colspan="20" class="text-center display-4" >No task</td>
  </tr>
<?php
}
?>


</table>


<?php } ?>  
<!-- ---------------------------------------HIGH PRIORITY TASKS-------------------------------------------------   -->
<?php 
if(isset($_POST['high'])) {
    ?>

<table style="width:66%;" class="table table-sm table-borderless table-striped text-center mx-auto mt-3" > 
<thead class="bg-dark text-white text-center">
  <tr>
    <th>Serial</th>
    <th>Task</th>
    <th>Added date</th>
    <th>Added time</th>
    <th>Action </th>
  </tr>
</thead>


<?php


require_once "db.php";
$user=$_SESSION['username'];
$task_show_query = "SELECT * FROM task_table WHERE user='$user' AND priority='High' ";
$result = $dbcon -> query($task_show_query);
if($result->num_rows!=0){
  $serial = 1;
   foreach ($result as $row) {
    $temp_date_time=(explode(' ',$row['added_tiime']));
    $date = $temp_date_time[0];
    $time = $temp_date_time[1];
  

?>

<tr>
  <td><?=$serial++?></td>
  <td ><?=$row['task_name'] ?></td>
  <td><?=$date?></td>
  <td><?=$time?></td>
  <td>

  <div class="btn-group">
    <a class="btn btn-sm btn-success" href="update.php?id=<?php echo base64_encode($row['id']); ?>">Update</a>
    <a class="btn btn-sm btn-danger" href="delete.php?id=<?php echo base64_encode($row['id']); ?>">Delete</a>
    </div>
  </td>
</tr>




<?php



}
}
// ========================== if no data found ========================
else{
?>
  <tr>
  <td colspan="20" class="text-center display-4" >No task</td>
  </tr>
<?php
}
?>


</table>


<?php } ?>
<!-- ---------------------------------------LOW PRIORITY TASKS-------------------------------------------------   -->
<?php 
if(isset($_POST['medium'])) {
    ?>

<table style="width:66%;" class="table table-sm table-borderless table-striped text-center mx-auto mt-3" > 
<thead class="bg-dark text-white text-center">
  <tr>
    <th>Serial</th>
    <th>Task</th>
    <th>Added date</th>
    <th>Added time</th>
    <th>Action </th>
  </tr>
</thead>


<?php


require_once "db.php";
$user=$_SESSION['username'];
$task_show_query = "SELECT * FROM task_table WHERE user='$user' AND priority='Medium' ";
$result = $dbcon -> query($task_show_query);
if($result->num_rows!=0){
  $serial = 1;
   foreach ($result as $row) {
    $temp_date_time=(explode(' ',$row['added_tiime']));
    $date = $temp_date_time[0];
    $time = $temp_date_time[1];
  

?>

<tr>
  <td><?=$serial++?></td>
  <td ><?=$row['task_name'] ?></td>
  <td><?=$date?></td>
  <td><?=$time?></td>
  <td>

  <div class="btn-group">
    <a class="btn btn-sm btn-success" href="update.php?id=<?php echo base64_encode($row['id']); ?>">Update</a>
    <a class="btn btn-sm btn-danger" href="delete.php?id=<?php echo base64_encode($row['id']); ?>">Delete</a>
    </div>
  </td>
</tr>




<?php



}
}
// ========================== if no data found ========================
else{
?>
  <tr>
  <td colspan="20" class="text-center display-4" >No task</td>
  </tr>
<?php
}
?>


</table>


<?php } ?>



<!-- ---------------------------------------LOW PRIORITY TASKS-------------------------------------------------   -->
<?php 
if(isset($_POST['low'])) {
    ?>

<table style="width:66%;" class="table table-sm table-borderless table-striped text-center mx-auto mt-3" > 
<thead class="bg-dark text-white text-center">
  <tr>
    <th>Serial</th>
    <th>Task</th>
    <th>Added date</th>
    <th>Added time</th>
    <th>Action </th>
  </tr>
</thead>


<?php


require_once "db.php";
$user=$_SESSION['username'];
$task_show_query = "SELECT * FROM task_table WHERE user='$user' AND priority='Low' ";
$result = $dbcon -> query($task_show_query);
if($result->num_rows!=0){
  $serial = 1;
   foreach ($result as $row) {
    $temp_date_time=(explode(' ',$row['added_tiime']));
    $date = $temp_date_time[0];
    $time = $temp_date_time[1];
  

?>

<tr>
  <td><?=$serial++?></td>
  <td ><?=$row['task_name'] ?></td>
  <td><?=$date?></td>
  <td><?=$time?></td>
  <td>

  <div class="btn-group">
    <a class="btn btn-sm btn-success" href="update.php?id=<?php echo base64_encode($row['id']); ?>">Update</a>
    <a class="btn btn-sm btn-danger" href="delete.php?id=<?php echo base64_encode($row['id']); ?>">Delete</a>
    </div>
  </td>
</tr>




<?php



}
}
// ========================== if no data found ========================
else{
?>
  <tr>
  <td colspan="20" class="text-center display-4" >No task</td>
  </tr>
<?php
}
?>


</table>


<?php } ?>

<!--     --------------------------------------------------------------------------------  -->



     <!-- </div>
  </div> -->

<!-- </div> -->





  <!--  <form>

        <input type="text" class="todo-input" />
        <button class="todo-button" type="submit">
        <i class="fas fa-plus-square"></i>
      </button>
        <div class="select">
            <select name="todos" class="filter-todo">
          <option value="all">All</option>
          <option value="completed">Completed</option>
          <option value="uncompleted">Uncompleted</option>
        </select>
        </div>
    </form>
    <div class="todo-container">
        <ul class="todo-list"></ul>

    </div>-->

    <!--<p align="center"><a href="index1.html" class="btn1">BACK</a></a>
    </p>-->

    <script src="app.js"></script>
    <ul class="sci">
        <!-- <li class="facebook_icon">
            <a href="https://www.facebook.com/raitacm/"><img src="images/facebook.png"><a>
        </li>
        <li class="instagram_icon">
            <a href="https://www.instagram.com/rait_acm/"><img src="images/instagram.png"></a>
        </li>
        <li class="twitter_icon">
            <a href="https://twitter.com/theofficialacm"><img src="images/twitter.png"></a>
        </li> -->
        <a href="https://www.instagram.com/rait_acm/" target="_blank"><i class="fab fa-instagram"></i></a>
        <a href="https://www.facebook.com/raitacm/" target="_blank"><i class="fab fa-facebook"></i></a>
        <a href="https://twitter.com/theofficialacm" target="_blank"><i class="fab fa-twitter"></i></a>
    </ul>

    <div class="clock">
        <!-- <div style="text-align:center;padding:1em 0;"--> 
        <h4><a style="text-decoration:none;" href="https://www.zeitverschiebung.net/en/city/6619347"><span style="color:gray;"></a></h4> <iframe src="https://www.zeitverschiebung.net/clock-widget-iframe-v2?language=en&size=medium&timezone=Asia%2FKolkata"
            width="100%" height="115" frameborder="0" seamless></iframe> </div>
    </div>


</body>

</html>