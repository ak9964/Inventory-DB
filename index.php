<!doctype html>  
<html>  
<head>  
<title>Login</title>  
   <style type="text/css">
body {background-image:url(7.jpg);
background-position:center}
  {  
              
    margin-top: 100px;  
    margin-bottom: 100px;  
    margin-right: 150px;  
    margin-left: 80px;  
    background-color: azure ;  
    color: palevioletred;  
    font-family: verdana;  
    font-size: 18pt;  
      
        }           h1 {  
    color: black;  
    font-family: verdana;  
    font-size: 15pt;  
}  
        h3 {  
    color: indigo;  
    font-family: verdana;  
    font-size: 20pt;  
} </style>  
</head>  
<body>  
     <center><h3>USER LOGIN</h3></center>   
  
<form action="" method="POST">  
<h1>Username: <input type="text" name="user"><br />  
Password: <input type="password" name="pass"><br />  
 <input type="submit" value="Login" name="submit"  style="font-size:13pt;color:white;background-color:green;border:2px solid #336600;padding:3px"/>  
</h1>
</form>  
 
<?php  
if(isset($_POST["submit"])){  
  
if(!empty($_POST['user']) && !empty($_POST['pass'])) {  
    $user=$_POST['user'];  
    $pass=$_POST['pass'];  
  
     $con=mysql_connect('localhost','root','') or die(mysql_error());  
    mysql_select_db('sanjay') or die("cannot select DB");  
  
    $query=mysql_query("SELECT * FROM login WHERE user='".$user."' AND pass='".$pass."'");  
    $numrows=mysql_num_rows($query);  
    if($numrows!=0)  
    {  
    while($row=mysql_fetch_assoc($query))  
    {  
    $dbuser=$row['user'];  
    $dbpass=$row['pass'];  
    }  
  
    if($user == $dbuser && $pass == $dbpass)  
    {  
    session_start();  
    $_SESSION['sess_user']=$user;  
  
    /* Redirect browser */  
  header("Location:first.html");  
    }  
    } else {  
    echo "Invalid username or password!";  
    }  
  
} else {  
    echo "All fields are required!";  
}  
}  
?>  
</body>
</html>
  