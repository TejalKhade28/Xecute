<?php
// include ('db.php');

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins&family=Roboto+Slab&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="contact.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css" integrity="sha256-mmgLkCYLUQbXn0B1SRqzHar6dCnv9oZFPEC1g1cwlkk=" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous"/>

  </head>  
<style>
    * {
    padding: 0;
    margin: 0;
    color: #fff;
    box-sizing: border-box;
    font-family: 'Poppins', sans-serif;
    border: none;
}

body {
    background-image: url('https://img.freepik.com/free-vector/glow-curve-line-dark-blue-abstract-background_115968-134.jpg?size=626&ext=jpg');
    width: 100%;
    height: 100vh;
    background-size: 100% 150vh;
    position: relative;
    background-repeat:no-repeat;
}

header {
    position: absolute;
    text-align: center;
    width: 75%;
    left: 12%;
    top: 2rem;
}

header h1 {
    font-size: 30px;
}

.empty {
    width: 100%;
    height: 100vh;
    /* background-color: rgba(0, 0, 0, 0.5); */
    position: absolute;
    top: 0px;
    left: 0;
    z-index: -1;
}

.content {
    display: flex;
    min-height: 110vh;
}

.content section {
    margin-top: 8vh;
    margin-left: 20vh;
}

.content-form {
    margin-top: 2rem;
}

section i{
    font-size: 29px;
    background-color: transparent;
    color: dodgerblue;
    cursor: pointer;
}
section i:hover{
    color: #AC7088;
}

.form {
    display: flex;
    position: absolute;
    top: 0;
    left: 0;
    margin-top: 10%;
    margin-left: 50%;
    justify-content: center;
    align-items: center;
    min-height: 110vh;
}

.form .contact-form input {
    width: 30rem;
    background-color: transparent;
    border: 0px;
    border: transparent;
    margin: 20px;
    padding: 10px;
    font-size: 18px;
    border-bottom: 2px solid #fff;
}

.form .contact-form input~span {
    position: absolute;
    left: 20px;
    transition: 0.9s ease-in-out;
    margin-top: 10px;
}

.form .contact-form input:focus~span {
    transform: translateY(-20px);
    pointer-events: none;
}

.form .contact-form textarea {
    width: 30rem;
    border: 0px;
    background-color: transparent;
    margin: 20px;
    font-size: 17px;
    border-bottom: 2px solid white;
}

.form .contact-form textarea~span {
    position: absolute;
    left: 20px;
    margin-top: 10px;
    transition: 0.9s ease-in-out;
}

.form .contact-form textarea:focus~span {
    transform: translateY(-20px);
    pointer-events: none;
}

.form .contact-form input[type=submit] {
    background-color: dodgerblue;
    border: 2px solid dodgerblue;
    font-size: 18px;
    width: 50%;
    height: 40px;
    padding: 5px;
    border-radius: 35px;
    cursor: pointer;
}

.form .contact-form input[type=submit]:hover {
    background-color: transparent;
    color: dodgerblue;
}

.media {
    position: absolute;
    top: 85vh;
    right: 20vh;
    display: flex;
    list-style: none;
}

.media li {
    margin: 20px 30px;
}

/* Added background image  */
.container{
    background-image: url(./images/bg.jpg);
	background-size: cover;
}

@media screen and (max-width: 900px) {
    body {
        background-repeat: repeat-y;
        overflow: auto;
    }
    header {
        position: absolute;
        left: 0;
        top: 20%;
        width: 100%;
    }
    .empty {
        height: 210vh;
    }
    .form {
        position: absolute;
        top: 80vh;
        margin-left: 10%;
    }
    .content-form {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        grid-gap: 0;
        margin-top: 100vh;
        margin-left: 10vh;
    }
    .content section {
        margin-top: 0vh;
        margin-left: 0vh;
    }
    .media {
        position: absolute;
        top: 190vh;
        right: 30px;
    }
}

:root {
    --primary-color: rgba(2, 19, 41, 0.75);
    --overlay-color: rgba(24, 39, 51, 0.85);
    --menu-speed: 0.75s;
}

.nav-bar {
    
    background-image: linear-gradient(60deg, #184d8a 0%, #1a070b 100%);
    padding: 0px;
    border-radius: 10px;
    font-family: sans-serif;
    background-color: #0047AB;
    box-shadow: 0 0 25px 0 blue  !important;
}
.nav-bar img {
    height: 35px;
    float: right;
    margin-right: 20px;
}
.active {
  background-color: #04AA6D;
}

.menu-right{
text-align: left;
}

ul li {
display: inline-block;
margin: 10px;
list-style: none;
}


#footer{
	border: 2px solid #000;
	height: 6rem;
	width: 100%;
	display: flex;
	text-align: center;
	justify-content: space-around;
	align-items: center;
	background-color: #071245;
}

.footer_div1{
	display: flex;
	flex-direction: column;
}

.footer_div1 a{
	text-decoration: none;
	color: #fff;
	letter-spacing: 1px;
	font-size: 1.2rem;
	margin: 3px 0;
    font-family: 'Noto Serif', serif;
}
.footer_div1 a:hover{
    color: #AC7088;
    text-decoration: underline;
    font-weight: bold;
    font-family: 'Noto Serif', serif;
}

.footer_div2 p{
	color: #fff;
	letter-spacing: 1px;
}

.footer_div3 i{
	color: #fff;
	font-size: 1.8rem;
	padding: 0 1rem;
	cursor: pointer;
}

#insta{
	color: rgb(214, 84, 66);
}

#twitter{
	color: #1DA1F2;
}
#github{
	color: #000000;
}
.fa-instagram:hover{
    color: wheat !important;
  background-color: #f435b7;
  border-radius: 30px;
  padding: 2px;
}
.fa-twitter:hover{
  color:wheat !important;
  background-color:#55acee;
  border-radius: 30px;
  padding: 2px;
}
.fa-github:hover{
  color:wheat !important;
  background:  #000;
  border-radius: 28px;
  padding: 2px;
}

.title{
    font-size: 1.8rem;
    font-family: 'Noto Serif', serif;
    margin: 0.3rem 0;
    color: whitesmoke;
}

.sub_title{
    /* margin-top: 10px; */
	font-weight: bold;
    font-size: 1.4rem;
    margin: 0.3rem 0;
    color: whitesmoke;
    font-family: 'Noto Serif', serif;
    margin: 1rem 0;
}



</style>   

<!-- <div class="menu-wrap">
    <input type="checkbox" class="toggler">
    <div class="hamburger">
        <div></div>
    </div>
    <div class="menu">
        <div>
            <div>
                <ul>

                    <li> <a href="index1.html">Home</a></li>
                    <li><a href="index.html">TO DO</a></li>
                    <li><a href="contact.html">Contact</a></li>
                    <li><a href="about.html">About Us</a></li>

                </ul>
            </div>
        </div>
    </div>
</div> -->
<body>
<div class="nav-bar" >
        
    <div class="menu-right">
      
        <ul id="menu">  
            <li><a href="index.php" style="display: block; color: white; text-align: center; padding: 14px 16px; text-decoration: none;"><i class="fa fa-fw fa-home"></i>&nbsp;HOME</a></li>
            <li><a href="contact.php" style="display: block; color: white; text-align: center; padding: 14px 16px; text-decoration: none;"><i class="fa fa-fw fa-envelope"></i>&nbsp;CONTACT US</a></li>
            <li><a href="about.html" style="display: block; color: white; text-align: center; padding: 14px 16px; text-decoration: none;"><i class="fa fa-fw fa-info-circle"></i>&nbsp;ABOUT US</a></li>
            <li  style="float:right"><a href="index1.html" style="display: block; color: white; text-align: center; padding: 14px 16px; text-decoration: none;"><i class="fa fa-fw fa-user"></i>&nbsp;LOGOUT</a></li>
            
        </ul>
    </div>
</div>


<div class="container"><br>
    <!-- <header> --><center>
    <h3 class="title">Let's Start a Conversation!</h3> 
        <h3 class="sub_title">We Would Love to Hear From You
        Whether you are curious about our features or would like to give suggestions, we are ready to answer all your questions.
        </h3>
        </center>
    <!-- </header> -->
    <div class="content">
        <div class="content-form">
            <section>
                <i class="fas fa-map-marker-alt"></i>
                <h2>Address</h2>
                <p>
                    MARINE LINES ROAD . <br> WARLEY BRIDGE . <br> NAVI MUMBAI 
                </p>
            </section>

            <section>
            <i class="fas fa-phone" ></i>
                <h2>Phone</h2>
                <p>123-456-78901548</p>
            </section>

            <section>
            <i class="fas fa-envelope"></i>
                <h2>E-mail</h2>
                <p>ABC123@GMAIL.COM</p>
            </section>
        </div>
    </div>

    
<form action="pro.php" method="POST">
         <div class="form">
            <div class="right">
                <div class="contact-form">
                    <input type="text" name="name" class="form-control" required>
                    <span>Full Name</span>
                </div>

                <div class="contact-form">
                    <input type="email" name="email" class="form-control" required>
                    <span>E-mail Id</span>
                </div>
                <div class="contact-form">
                  <textarea class="form-control" name="message"></textarea>
                    <span> Type your Message....</span>
                </div>

                <div class="contact-form">
                    <input type="submit" name="submit">
                    
                </div>
            </div>
        </div>
</div>
</form>
<div class="media">
    <li><i class="fa fa-facebook-square fa-2x" aria-hidden="true"></i></li>
    <li><i class="fa fa-instagram fa-2x" aria-hidden="true"></i></li>
    <li><i class="fa fa-whatsapp fa-2x" aria-hidden="true"></i></li>
    <li><i class="fa fa-twitter-square fa-2x" aria-hidden="true"></i></li>
</div>
<div class="empty">

</div>
</div>

<footer id="footer">
          <div class="footer_div1">
              <a href="index1.html" target="_blank">Home Page</a>
              <a href="about.html" target="_blank">About Page</a>
              <a href="contact.php" target="_blank">Contact Page</a>
          </div>
          <div class="footer_div2">
              <p>Made By TejalKhade 💖 Copyright &copy; 2022</p>
          </div>

          <div class="footer_div3">
            <i class="fab fa-instagram" id="insta"></i>          
            <i class="fab fa-twitter" id="twitter"></i>
            <a href="https://github.com/TejalKhade28/Xecute" target="_blank" id="github"><i class="fab fa-github"></i></a>
          </div>
      </footer>  
</body>

</html>



