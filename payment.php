<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Payment gateway</title>
	<style type="text/css">
	#payment
	{

padding: 10px;
color: blue;
	}
	</style>
	       <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="indexstyle.css">
	
</head>
<body>
	<div  style="background-color: orangered; padding: 10px;">
	        <div class="container">
		        <div class="row">
			        <div class="col-md-1"><img  id="logo" src="" height="80px" width="80px"></div>
				    <div class="col-md-5 "><h1 style="margin-top: 10px; color: white;" >PROUD INDIAN PILGRIMAGES</h1></div>
				    
				    
				    	<div class="col-md-2 mar"><a  href="" >SERVICES</a></div>
				<div class="col-md-2 mar"><a href="" >ABOUT US</a></div>
				<div class="col-md-2 mar"><a href="" >HELP</a></div>
				    
                 
                                
                            
                    
                </div>
		    </div>
        </div>
	
<div id ="payment" class=" justify-content-center text-center" ><br><br>
	<h3>Payment </h3>
	<br><br>
	<div class="row justify-content-center">
	<input class ="col-md-1" type="radio" value="upi" name="foo"><label class ="col-md-1">UPI</label>
	<input class ="col-md-1" type="radio"value="card" name="foo"><label class ="col-md-1">Card</label>
	</div>
	<br><br>

</div>

<div class="upi">
	<form class="justify-content-center text-center">
		<h2>UPI</h2>
     
          <br>

        <select placeholder="ID"class="col-md-2" name="idval" required>
        <option >choose the UPI</option>
          <option value="Paytm" >Paytm</option>
          <option value="Phonepe">Phonepe</option>
                    <option value="others">others</option>
                        
        
     </select>
     <input type="text" class="col-md-2" name="upid" placeholder=" Enter Your UPI" required><br><br>
     <button class="col-md-2">Submit</button>
		
	</form>
</div>

<div class="card">
	<form class="justify-content-center text-center">
		<h2>Card</h2>
     
          <br>

        <select placeholder="ID"class="col-md-2" name="idval" required>
        	        <option >choose the Card</option>

          <option value="debit" >Debit Card</option>
          <option value="credit">credit Card</option>
                    <option value="others">others</option>
                        
        
     </select>
     <input type="text" class="col-md-2" name="upid" placeholder=" Enter Your UPI" required><br><br>
     <button class="col-md-2">Submit</button>
		
	</form>
</div>
          
            
 

</body>
</html>