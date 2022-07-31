<!DOCTYPE html>
<html>
    <head>
        <title>Virtual Visit to Indian Pilgrimages</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="indexstyle.css">
        <!--owl carousel css-->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.css" integrity="sha512-OTcub78R3msOCtY3Tc6FzeDJ8N9qvQn1Ph49ou13xgA9VsH9+LRxoFU6EqLhW4+PKRfU+/HReXmSZXHEkpYoOA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link rel="stylesheet" href="http://fontawesome.io/assets/font-awesome/css/font-awesome.css" >
        <style>
            .owl-prev{
                left: 30px;
            }
            .owl-next{
                right: 30px;
            }
            .owl-next, .owl-prev{
                position: absolute;
                top: 30%;
            }
            .owl-next span, .owl-prev span{
                font-size: 60px;
                color: #787878;
            }
            .owl-theme .owl-nav [class*="owl-"]:hover {
                background-color: transparent;
            }
        </style>
        <style>
            li{
                display: inline;
            }
        </style>
    </head>
    <body>
        <!-------navbar----->
        <div  style="background-color: orangered; padding: 10px;">
            <div class="container">
                <div class="row">
                    <div class="col-md-1"><img  id="logo" src="logo.png" height="80px" width="80px"></div>
                    <div class="col-md-4 "><h1 style="margin-top: 10px; color: white;" >PROUD INDIAN PILGRIMAGES</h1></div>
                    
                    <div class="col-md-7 mar">
                            <ul>
                                
                                <li><a href="">Events</a></li>
                                <li><a href="">Destinations</a></li>
                                <li><a href="">About Us</a></li>
                                <li><a href="">Contact</a></li>
                                <li><button type="button" class="btn btn-dark" onclick="signupopen()">Sign Up</button></li>
                                <li><button class="btn btn-dark"  onclick="loginopen()">login</button></li>
                            </ul>
                    </div>
                </div>
            </div>
        </div>
        
        <!-----navbar ends here------>

        <!------big pictures slideshow------->
        <div class="w3-content w3-section">
            <img class="mySlides" src="hampi.jpg" style="width:100%">
            <img class="mySlides" src="temple.jpg" style="width:100%">
            <img class="mySlides" src="shimlachurch.jpeg" style="width:100%">
          </div>

        <!---------green container--------->
        <div class ="green" style="background-color: rgba(23, 120, 23, 0.852); color: white; padding: 10px;">
            <h3 style="margin-left: 290px;">Purpose of the website</h3>
            <div class="row">
                <div class="col-md-4"></div>
            <div class="col-md-5" style="font-size: larger;">
                <p>The rich heritage of India, one of the world's oldest civilizations, is an confluence of religions and traditions. <br>
                The highlights of Indian heritage lie in the treasure of its art, classical dance, music, flora and fauna, and the innate secular philosophy of its people.</p>
            </div>
            <div class="col-md-3"></div>
            </div>
        </div>

        <!-------images------->
        <!--jquery-->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <!--popper script-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.11.5/umd/popper.min.js" integrity="sha512-8cU710tp3iH9RniUh6fq5zJsGnjLzOWLWdZqBMLtqaoZUA6AWIE34lwMB3ipUNiTBP5jEZKY95SfbNnQ8cCKvA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <!--bootstrap script-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.0/js/bootstrap.min.js" integrity="sha512-8Y8eGK92dzouwpROIppwr+0kPauu0qqtnzZZNEF8Pat5tuRNJxJXCkbQfJ0HlUG3y1HB3z18CSKmUo7i2zcPpg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <!--owl carousel js-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

        <!--carousel-->
        <div class="mt-4 mb-4">
            <div class="owl-carousel owl-theme">
                <div class="ms-2 me-2" style="background-color: grey">
                    <div class="card">
                        <img src="IMG_5044.JPG" alt="5044" class="card-img-top">
                        <div class="card-body">
                            <h5 class="card-title">Post Title 1</h5>
                            Post Description 1
                        </div>
                    </div>
                </div>
                <div class="ms-2 me-2" style="background-color: grey">
                    <div class="card">
                        <img src="IMG_5043.JPG" alt="5043" class="card-img-top">
                        <div class="card-body">
                            <h5 class="card-title">Post Title 2</h5>
                            Post Description 2
                        </div>
                    </div>
                </div>
                <div class="ms-2 me-2" style="background-color: grey">
                    <div class="card">
                        <img src="IMG_5044.JPG" alt="5044" class="card-img-top">
                        <div class="card-body">
                            <h5 class="card-title">Post Title 3</h5>
                            Post Description 3
                        </div>
                    </div>
                </div>
                <div class="ms-2 me-2" style="background-color: grey">
                    <div class="card">
                        <img src="IMG_5044.JPG" alt="5044" class="card-img-top">
                        <div class="card-body">
                            <h5 class="card-title">Post Title 4</h5>
                            Post Description 4
                        </div>
                    </div>
                </div>
                <div class="ms-2 me-2" style="background-color: grey">
                    <div class="card">
                        <img src="IMG_5044.JPG" alt="5044" class="card-img-top">
                        <div class="card-body">
                            <h5 class="card-title">Post Title 5</h5>
                            Post Description 5
                        </div>
                    </div>
                </div>
                <div class="ms-2 me-2" style="background-color: grey">
                    <div class="card">
                        <img src="IMG_5044.JPG" alt="5044" class="card-img-top">
                        <div class="card-body">
                            <h5 class="card-title">Post Title 6</h5>
                            Post Description 6
                        </div>
                    </div>
                </div>
                <div class="ms-2 me-2" style="background-color: grey">
                    <div class="card">
                        <img src="IMG_5044.JPG" alt="5044" class="card-img-top">
                        <div class="card-body">
                            <h5 class="card-title">Post Title 7</h5>
                            Post Description 7
                        </div>
                    </div>
                </div>
                <div class="ms-2 me-2" style="background-color: grey">
                    <div class="card">
                        <img src="IMG_5044.JPG" alt="5044" class="card-img-top">
                        <div class="card-body">
                            <h5 class="card-title">Post Title 8</h5>
                            Post Description 8
                        </div>
                    </div>
                </div>
                <div class="ms-2 me-2" style="background-color: grey">
                    <div class="card">
                        <img src="IMG_5044.JPG" alt="5044" class="card-img-top">
                        <div class="card-body">
                            <h5 class="card-title">Post Title 9</h5>
                            Post Description 9
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script>
            $('.owl-carousel').owlCarousel({
                autoplay: true,
                autoplayHoverPause: true,
                items: 4,
                nav: true,
                dots: true,
                loop: true
            });
        </script>
        <!------------login---->
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

<!------------signup-------->
<div class="signup container" id="signup">
  <button  style="float: right; margin-top: -30px; width: 40px; height: 40px;"class="col-md-1 btn btn-danger" type="button" onclick="closesignup()"> <span class="close"  style="font-size: 15 px ;font-weight: 800px;margin-top: -30px;">&times;</span>
   </button>
  <form class="text-center" action="signup.php" method="Post">
   
      <h2>PERSONAL INFORMATION</h2>
     
          <br>    
        <input type="text" class="col-md-4" name="fname" placeholder="First name" required>
        <small class="col-md-3" ></small>
        <input type="text" class="col-md-4" name="lname" placeholder="Last name" required>
        
    <br>  <br>

      
        <input type="date" class="col-md-4" name="dob"  required>
        <span class="col-md-3"></span>
   <select placeholder="ID"class="col-md-4" name="id" required>
        <option value="male">Male</option>
          <option value="Female">Female</option>
          <option value="not to specify">Not to specify</option>

        </select>
        
   
      
          <br>  <br>
        <input type="text" class="col-md-4" name="phone" placeholder="Contact"required>
        <input type="email" class="col-md-4" name="email" placeholder="Email" required>
      
        <br>  <br>
        <input type="text" class="col-md-4" name="pass" placeholder="password" required>
        <input type="text" class="col-md-4" name="cpass" placeholder="confirm password" required>
          <br>  <br>  <br>
   
        <h2>ID proof</h2>
        <br> <select placeholder="ID"class="col-md-4" name="idval" required>
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
        

        <!------footer------>
        <div class="footer" style="background-color:orangered; padding:10px">
            <div class="container">
              <div class="row">
                  <div class="col-md-4 mar"><a  href="" >SERVICES</a></div>
                  <div class="col-md-4 mar"><a href="" >ABOUT US</a></div>
                  <div class="col-md-3 mar"><a href="" >HELP</a></div>
                  <div class="row">
                    <p class=" col-md-12 text-center ">CopyRight</p>
                  </div>
              </div>
            </div>
        </div>
        <!------footer ends here--------->


        <!---------------------------login-------------------->

    </body>
</html>

<script>
    var myIndex = 0;
    carousel();
    
    function carousel() {
      var i;
      var x = document.getElementsByClassName("mySlides");
      for (i = 0; i < x.length; i++) {
        x[i].style.display = "none";  
      }
      myIndex++;
      if (myIndex > x.length) {myIndex = 1}    
      x[myIndex-1].style.display = "block";  
      setTimeout(carousel, 4000); // Change image every 2 seconds
    }
    </script>