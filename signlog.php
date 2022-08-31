<!DOCTYPE html>
<html>

<head>
    <title>SignUp and Login</title>
    <link rel="stylesheet" type="text/css" href="style2.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


    <style>
        body{
                background-image: url(./images/bg2.jpg);
                background-size: cover;
                overflow-y: hidden;
                background-repeat: no-repeat;
                
            }
        a:hover{
            color: blue;
        }
        button{
            cursor: pointer;
            background-color: #607EAA;
            
        }
        button:hover{
            background-color: white;
            border: 2px solid #607EAA;
            color: #607EAA;
            font-weight: 700;
        }
        .overlay{
            background: #607EAA;
            /* background: #3AB4F2;
            background: #7FB5FF; */
        }
        h1{
            font-family: ‘Georgia’, serif;
            font-weight: bolder;
            font-size: 37px;
        }
       

    </style>
</head>

<body>
<!-- REGISTER  -->
    <div class="container" id="container">
        <div class="form-container sign-up-container">

            <form action="registration.php" method="post">
                <h1>Sign Up</h1>
                <!-- <div class="social-container">
                    <a href="#" class="social"><i class="fa fa-facebook"></i></a>
                    <a href="#" class="social"><i class="fa fa-google"></i></a>
                    <a href="#" class="social"><i class="fa fa-linkedin"></i></a>
                </div> -->
                <!-- <span>or use your email for registration</span> -->
                <div class="form-group">
                    
                <input type="text" name="name" placeholder="Name" class = "form-control" required>
                 </div>
                 <div class="form-group">
                    
                <input type="email" name="email"  placeholder="Email"  class = "form-control" required>
                 </div>
                 <div class="form-group">

                 <div class="form-group">
                <input type="text" name="squestion"  placeholder="Your Nick Name"  class = "form-control" required>
                 </div>
                   
                <input type="password" name="password"  placeholder="Password"  class = "form-control" required>
                 </div>
                 
               
                <button type="submit" class="btn btn-primary">Sign Up</button>
            </form>
        </div>
        <!-- REGISTER ENDS HERE -->
        <!-- LOGIN -->
        <div class="form-container sign-in-container">
            <form action="validation.php" method="post">
                <h1>Sign In</h1>
                <!-- <div class="social-container">
                    <a href="#" class="social"><i class="fa fa-facebook"></i></a>
                    <a href="index2.php" class="social"><i class="fa fa-google"></i></a>
                    <a href="#" class="social"><i class="fa fa-linkedin"></i></a>
                </div> -->
                
                <!-- <span>or use your account</span> -->
                <div class="form-group">
                <input type="text" name=" name" placeholder="Name" class = "form-control" required>
                 </div>

                 <div class="form-group">  
                <input type="password" name="password"  placeholder="Password" class = "form-control" required>
                 </div>
               
                <button type="submit" class="btn btn-primary">Sign In</button>
                <br>

                <div style="font-size:0.8em; text-align:center">Forgot Your Password?<a href="forgot_password.php"> Click here</a>
                </div>
            
            </form>
        </div>
        <!-- LOGIN ENDS HERE -->
        <div class="overlay-container"> 
            <div class="overlay">
                <div class="overlay-panel overlay-left">
                    <h1>Welcome Back!</h1>
                    <p>To Centralize and prioritize your tasks please login to Xecute</p>
                    <button class="ghost" id="signIn">Sign In</button>
                </div>
                <div class="overlay-panel overlay-right">
                    <h1>Hello, Friend!</h1>
                    <p>Be more Effective and Start your Journey with Us</p>
                    <button class="ghost" id="signUp">Sign Up</button>
                </div>
            </div>
        </div>
    </div>

    <script type="text/javascript">
        const signUpButton = document.getElementById('signUp');
        const signInButton = document.getElementById('signIn');
        const container = document.getElementById('container');

        signUpButton.addEventListener('click', () => {
            container.classList.add("right-panel-active");
        });
        signInButton.addEventListener('click', () => {
            container.classList.remove("right-panel-active");
        });
    </script>


</body>

</html>