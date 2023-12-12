<?php include("header.html")
?>

<body>  
<div class="reg1">
<form>  
    
  <div class="container">  
   <h1 style="text-decoration: double;"> Registeration Form</h1> 
  <label><b> Firstname:  </b></label>   
<input type="text" name="firstname" placeholder= "Firstname" size="15" required /> <br><br> 
<label><b> Middlename:</b> </label>   
<input type="text" name="middlename" placeholder="Middlename" size="15" required /> <br><br>    
<label><b>Lastname:</b>  </label>    
<input type="text" name="lastname" placeholder="Lastname" size="15"required /> <br><br> 
  
<b> Gender :  </b>
</label><br>  
<input type="radio" value="Male" name="gender" checked > Male   
<input type="radio" value="Female" name="gender"> Female   
<input type="radio" value="Other" name="gender"> Other  
<label><br><br>   
<b> Phone :  </b>
</label>  
<input type="text" name="country code" placeholder="Country Code"  value="+91" size="15"/><br><br>


 <label for="email"><b>Email:</b></label>
 <input type="text" placeholder="Enter Email" name="email" required><br><br>
  
    <label for="psw"><b>Password:</b></label>  
    <input type="password" placeholder="Enter Password" name="psw" required><br><br> 
  
    <label for="psw-repeat"><b>Re-type Password:</b></label>  
    <input type="password" placeholder="Retype Password" name="psw-repeat" size="15" required> <br><br> 
    <button type="submit" class="registerbtn" style="margin-left:100px ;">Register</button> 
</div>  
</div>
</form>  
</body> 
<?php include("footer.html")
?>