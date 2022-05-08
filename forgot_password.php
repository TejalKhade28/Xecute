<?php
$con = mysqli_connect('localhost','root','','3307');
mysqli_select_db($con, 'task-manager');
$email_err=$pwd_err=$cpwd_err=$match_err=$msg=$error='';
if(isset($_POST['submit']))
{
  $email = $_POST['email'];
  $pwd = $_POST['password'];
  $cpwd = $_POST['cpassword'];
  $squestion = $_POST['squestion'];

  $query = "select * from usertable where email = '$email' && squestion = '$squestion' " ;
  $run = mysqli_query($con,$query);
  $row = mysqli_num_rows($run);
  
  if($row == 0){
    //$email_err = "Entered details are Invalid";
    echo "<script>alert('Entered details are Invalid');</script>";
  }
  else if($squestion==''){
    $squestion_err = "Please enter your new password";
  }
  else if($pwd==''){
      $pwd_err = "Please enter your new password";
  }
  else if($cpwd==''){
    $cpwd_err = "Please Re-enter your new password";
  }
  else if($pwd !== $cpwd){
    $match_err = "Password Does not Match";
  }
  else{
      $sql = "Update usertable set password = '$pwd' where email = '$email'";
      $run = mysqli_query($con,$sql);
      if($run){
          $msg = "Password Changed Successfully";
      }
      else{
          $error = "Unable to change password";
      }
  }

}

?>


<!DOCTYPE html>
<head>
    <title>Forgot Password</title>
   
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css">
</head>
<style>
    @import url('https://fonts.googleapis.com/css?family=Montserrat:400,800');
    

body {
    background-image: url('https://img.freepik.com/free-vector/glow-curve-line-dark-blue-abstract-background_115968-134.jpg?size=626&ext=jpg');
    width: 100%;
    height: 100vh;
    background-size: 100% 110vh;
    position: relative;
    background-repeat: no-repeat;
    color : white ;
}


input {
    background-color: #eee;
    border: none;
    padding: 12px 20px;
    margin: 8px 0;
    width: 100%;
}

h3 {
    font-weight: bold;
    margin: 10px;
    text-align: center;

}
.form-control{
    background-color: #eee;
    border: 50%;
    padding: 12px 20px;
    margin: 5px 0;
    width: 100%;
}  
</style>
<body>

      <!--FORGOT PASSWORD-->
      <div class="container">
          <div class="row">
              <div class="col-md-4 offset-md-4 form-div forgot password">
                <form action="forgot_password.php" method="post">
                    <h3 class="text-center">Recover Your Password</h3><br>
                    <p>
                        Please enter your email address you used to sign up .
                        We will assist you in recovering your password.
                    </p>

                        <div class="form-group">
                        <label>Enter Email</label>
                        <input type="email" name="email"  class = "form-control" placeholder="Enter your email address" required>
                        <span class="float-right text-danger font-weight-bold"><?php echo  $email_err ; ?></span>
                        
                        </div><br>

                        <div class="form-group">
                        <label>Enter Your Nick Name</label>
                        <input type="text" name="squestion"  class = "form-control" placeholder="Enter your Nick Name" required>
                        <span class="float-right text-danger font-weight-bold"></span>
                        
                        </div><br>

                        <div class="form-group">
                        <label>Enter Password</label>
                        <input type="password" name="password"  class = "form-control" placeholder="Enter new password" required>
                        <span class="float-right text-danger font-weight-bold"><?php echo  $pwd_err ; ?></span>
                        </div><br>

                        <div class="form-group">
                        <label>Confirm New Password</label>
                        <input type="password" name="cpassword"  class = "form-control" placeholder="Re-enter confirm password" required>
                        <span class="float-right text-danger font-weight-bold"><?php echo  $cpwd_err ; echo $match_err; ?></span>
                        </div><br>

                        <p class="text-center font-weight-bold"><?php echo $msg; echo $error; ?></p>
                        <div class="form-group">  
                        <input type="submit" name="submit" value="Reset" class = "btn btn-primary"></button>
                        
                        </div>
                </form>
              </div>
            </div>
        </div>
    <!-- FORGOT PASSWORD ENDS HERE -->      
</body>
</html>
