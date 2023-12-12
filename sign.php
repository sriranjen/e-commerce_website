<?php include("header.html")
?>
<div class="signin">
<center>  
<body class="signin1">    
     <h1 style="padding-left: 500px; padding-top: 100px;"> CUSTOMER LOGIN </h1>  
    <form>  
        <div class="container">   
            <label>Username : </label>   
            <input type="text" placeholder="Enter Username" name="username" required><br> <br> 
            <label>Password : </label>
            <input type="password" placeholder="Enter Password" name="password" required><br> <br>
            <button  type="submit">Login</button> 
            <button type="button" class="cancelbtn"> Cancel</button> <br> <br>
            <input type="checkbox" checked="checked"> Remember me  <br>
            Forgot <a href="#"> password? </a>  <br>
        </div>   
    </form>   
    <h4 style="padding-left: 500px;">or</h4>  
    <a href="join.php" style="padding-left: 500px;">create new accout</a>
</body>   
</div>
<?php include("footer.html")
?>  