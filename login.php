<?php
session_start();
if(isset($_SESSION['username']))
{
  unset($_SESSION['username']);
}
?>
<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<title>HOME page</title>
	<style>
body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box;}
.clspopup{

    transform: 100px 100px scale(0.1);
    visibility: hidden;

}
#signup
{
   display: none;
}
#signin{
  top: 10;
  align-content: middle;
  display: none;
  background-size: cover;
}
.popup{
  padding: 50px;
  border-width: bold;
  border-radius: 20px;
      box-shadow: 0px 0px 0px 0px grey;

 background-image: linear-gradient(120deg, #e0c3fc 0%, #8ec5fc 100%);
	position: absolute;
	top: 0;

  	transform: translate(80px,150px);
	
}

	</style>
	<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="indexstyle.css">
</head>
<body id="body">


        <div  ><button class="navbar-right btn btn-primary" onclick="loginopen()" >LOGIN</button></div>
        <br><br>
        <div  ><button class="navbar-right btn btn-primary" onclick="signupopen()" >Sign up</button></div>
		





<div class="  container" id="signin">
  
  <form action="database.php" class=" text-center " method="post">
    <h1 style="text-align: center;">Login</h1>

  

<input type="text" class="col-md-4" placeholder="Enter Email"   name="Email" required><br><br>
    

    
    <input type="password" class="col-md-4" placeholder="Enter Password"  " name="Password" required>

  <br><br>
     <button  class="col-md-4 btn btn-success" type="submit"  >Login</button>
     <br><br>
 
    <button  class="col-md-4 btn btn-danger" type="button"  onclick="closelogin()">Close</button>

  </form>
  


</div>


<div class="signup container" id="signup">
  <button  style="float: right; margin-top: -30px; width: 40px; height: 40px;"class="col-md-1 btn btn-danger" type="button" onclick="closesignup()"> <span class="close"  style="font-size: 15 px ;font-weight: 800px;margin-top: -30px;">&times;</span>
   </button>
  <form class="text-center" action="signup.php" method="Post">
   
      <h2>PERSONAL INFORMATION</h2>
     
          <br>    
        <input type="text" class="col-md-4" name="fname" placeholder="First name" required>
        <small class="col-md-3" ></small>
        <input type="text" class="col-md-4" name="lname" placeholder="Last name" required>
        
    <br>  <br><option >Gender</option>
          

      
        <input type="date" class="col-md-4" name="dob"  required>
        <span class="col-md-3"></span>
        <select placeholder="gender"class="col-md-4" required>
          <option >Gender</option>
          <option>Male</option>
          <option>FeMale</option>
          <option>Not to specify</option>
        </select>
        
   
      
          <br>  <br>
        <input type="text" class="col-md-4" name="phone" placeholder="Contact"required>
        <input type="email" class="col-md-4" name="email" placeholder="Email" required>
      
        <br>  <br>
        <input type="text" class="col-md-4" name="pass" placeholder="password" required>
        <input type="text" class="col-md-4" name="cpass" placeholder="confirm password" required>
          <br>  <br>  <br>
   
        <h2>ID proof</h2>
        <br>  
      
      <select placeholder="ID"class="col-md-4" name="id" required>
        <option >choose the ID</option>
          <option value="aadhar" >Aadhar card</option>
          <option value="familycard">Family card</option>
          <option value="licence">Licence</option>
          <option value="password">Passpord</option>
          <option value="pancard">Pancard</option>

        </select>
                <span class="col-md-2"></span>

        <input type="text" class="col-md-4" name="idnumber" placeholder="Enter the ID Number" required>
     
        <br>  <br>  <br>

<button class=" col-md-6 btn btn-success" type="submit">submit</button><br><br>


      </div>
  
      
  </form>



</div>



<!------JS----->
<script>
function loginopen() {

    document.getElementById('signin').style.display="block";

document.getElementById('signin').classList.add("popup");
document.getElementById('signin').classList.remove("clspopup");
document.getElementById('signup').classList.add("clspopup");




  
 
}
function signupopen()
{

  document.getElementById('signup').style.display="block";
  document.getElementById('signup').classList.add("popup");

document.getElementById('signup').classList.remove("clspopup");
document.getElementById('signin').classList.add("clspopup");


}
function closelogin()
{


document.getElementById('signin').classList.add("clspopup");



}
function closesignup()
{
document.getElementById('signup').classList.add("clspopup");

}


</script>

<br><br><br>












</body>

</html>













