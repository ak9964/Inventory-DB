<html>
<body bgcolor="cream">
<?php
 $dbh =mysql_connect('localhost','root','') or die(mysql_error());
 mysql_select_db('sanjay') or die(mysql_error());
     $sl_no= null;
   $branch_name= $_REQUEST['branch_name'];
   
 $query = "INSERT INTO branch VALUES ('$sl_no','$branch_name')";
 $result = mysql_query($query) or die(mysql_error());
 echo "Branch is added successfully";
 

 $var=mysql_query("SELECT  * FROM branch");

 echo"<table border size=1>";
 echo"<tr><th>SERIAL NO</th> <th> BRANCH NAME</th></tr>";
  
 while ($arr=mysql_fetch_row($var))
 { 
    echo"<tr> <td>$arr[0]</td> <td>$arr[1]</td> </tr>";
 } 
 echo"</table>";
?>
<a href="middle.html">HOME</a>
</body>
</html>