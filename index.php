<?php
session_start();
if($_SESSION['logged_in']=true)
{
	session_destroy();
}
?>
<!DOCTYPE html>
<html lang="en" class="no-js"> 
    <head>
        <meta charset="UTF-8" />
        <!-- <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">  -->
        <title>Welcome</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
        <link rel="shortcut icon" href="../favicon.icon"> 
        <link rel="stylesheet" type="text/css" href="dist/css/demo.css" />
		<link rel="stylesheet" type="text/css" href="dist/css/style.css">
		<link rel="stylesheet" type="text/css" href="dist/css/animate-custom.css" />
<script type="text/javascript">
function validatePassword(){
	var password=document.getElementById("rpassword").value;
	var cpassword=document.getElementById("rcpassword").value;
	if(password!=cpassword){
		alert("Password Do not Match");
		document.getElementById("rcpassword").value="";
	}
}
</script>
    </head>

    <body>
        <div class="container">
            <!-- Codrops top bar -->
            <div class="codrops-top">
                
                <div class="clr"></div>
            </div><!--/ Codrops top bar -->
            <header>
                <img src="dist/img/logo.jpeg">
          </header>
            <section>				
                <div id="container_demo" >
                    <!-- hidden anchor to stop jump http://www.css3create.com/Astuce-Empecher-le-scroll-avec-l-utilisation-de-target#wrap4  -->
                    <a class="hiddenanchor" id="toregister"></a>
                    <a class="hiddenanchor" id="tologin"></a>
                    <div id="wrapper">
                        <div id="login" class="animate form">
                            <form  action="userdb.php" autocomplete="on" method="post"> 
                                <h1>Welcome Back</h1> 
                                <p> 
                                    <label for="authority" class="youpasswd" > Authority</label><br><br>
                                   <input type="radio" value="0" id="authority" name="authority" required>&nbsp;Admin&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                   <input type="radio" value="1" id="authority" name="authority" >&nbsp;Super Admin
                                    
                                </p>
                                <p> 
                                    <label for="username" class="uname" data-icon="u" >Username </label>
                                    <input id="username" name="username" required="required" type="text" placeholder="Username"/>
                                </p>
                                <p> 
                                    <label for="password" class="youpasswd" data-icon="p"> Password </label>
                                    <input id="password" name="password" required="required" type="password" placeholder="Password" /> 
                                </p>
                                <p class="forgotpassword">  
									<label for="forgotpassword">Forgot Password</label>
								</p>
                                <p class="login button"> 
                                    <input type="submit" value="Login" name="login" /> 
								</p>
                                <p class="change_link">
									Not a member yet ?
									<a href="#toregister" class="to_register">Join us</a>
								</p>
                            </form>
                        </div>

                        <div id="register" class="animate form">
                            <form  action="userdb.php" method="post" id="myform" name="myform"> 
                                <h1> Sign up </h1> 
                                <p> 
                                    <label for="usernamesignup" class="uname" data-icon="u">Your Name</label>
                                    <input id="rname" name="rname" required="required" type="text" placeholder="Full Name" />
                                </p>
                                <p> 
                                    <label for="username" class="uname" data-icon="u">Your username</label>
                                    <input id="rusername" name="rusername" required="required" type="text" placeholder="eg. mysuperusername690" />
                                </p>
                                <p>                                     
                                    <label for="password" class="youpasswd" data-icon="p">Password</label>
									<input type="password" id="rpassword" name="rpassword" requires="required" placeholder="Password"/>
                                     
                                </p>
                                <p> 
                                    <label for="password_again" class="youpasswd" data-icon="d">Confirm Password </label>
									<input type="password" id="rcpassword" name="rcpassword" requires="required" placeholder="ConfirmPassword" onChange="validatePassword()"/>
                                </p>
                                <p> 
                                    <label for="sanswer" class="uname" data-icon="s" >Security Answer </label>
                                    <input id="rsanswer" name="rsanswer" required="required" type="text" placeholder="Security Answer"/>
                                </p>
                                <p> 
                                    <label for="authority" class="youpasswd" > Authority</label><br><br>
                                   <input type="radio" value="0" id="rauthority" name="rauthority" required>&nbsp;Admin&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                   <input type="radio" value="1" id="rauthority" name="rauthority" >&nbsp;Super Admin
                                    
                                </p>
                               

                                <p class="signin button"> 
									<input type="submit" value="Sign up" name="signup" /> 
								</p>
                                <p class="change_link">  
									Already a member ?
									<a href="#tologin" class="to_register"> Go and log in </a>
								</p>
                            </form>
                        </div>
						
                    </div>
                </div>  
            </section>
        </div>
    </body>
</html>
