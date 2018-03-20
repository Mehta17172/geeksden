<!DOCTYPE html> 
<html>
 <head>  
    <title>Sign Up</title>   
      <link rel="stylesheet" type="text/css" href="style.css"> 
  </head> 
  <body> <img src="start.jpg" width="100%" height="200px"> <br> <div class="header">
<h2>Signup</h2>     </div> 
<form action="signupd.php" method="post">
 <div class="input-group"><label> First Name  </label>   <input type="text" name="fname"
required placeholder="First Name"><br> 
<label> Last Name   </label> <input type="text" name="lname" required placeholder="Last Name"><br> <label> Email Id    </label>  
<input type="text" name="e_id" required placeholder="Enter your email-id"><br></div>  
<label>Gender: </label> <br><input type="radio"
name="gender" value="male" checked>Male<br>                    <input
type="radio" name="gender" value="female">Female<br>
<div class="input-group">
<label>Phone Number</label> <input type="text" name="p_no" required placeholder="e.g., 9125682469"><br> 
<label> Password</label>
<input type="password" name="password_1" required placeholder="**********"><br>
<label> Confirm Password</label><input type="password"
name="password_2"required placeholder="**********"><br></div>
<div class="input-group"> <input type="submit" value="Submit" class="btn"> <input type="reset" class="btn" value="Reset"> </div> <div class="input-group">    Already a member?<a href="Login.php"><u>Log In</u></div></a>
</form> </body> </html>
