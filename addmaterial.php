<html>
<body bgcolor="orange">
<?php
 $dbh =mysql_connect('localhost','root','') or die(mysql_error());
 mysql_select_db('sanjay') or die(mysql_error());
   
   $sl_no = null;
   $material_name = $_REQUEST ['material_name'];
   $unit = $_REQUEST ['unit'];
   
   
 $query = "INSERT INTO material VALUES ('$sl_no','$material_name','$unit')";
 $result = mysql_query($query) or die(mysql_error());
 echo "MATERIALS ADDED SUCCESSFULLY";

 $var=mysql_query("SELECT  * FROM material");

 echo"<table border size=1>";
 echo"<tr><th>SERIAL NO</th> <th> MATERIAL NAME</th>  <th> UNIT </th></tr>";
  
 while ($arr=mysql_fetch_row($var))
 { 
    echo"<tr> <td>$arr[0]</td> <td>$arr[1]</td> <td>$arr[2]</td> </tr>";
 } 
 echo"</table>";
?>
<a href="middle.html">HOME</a>
</body>
</html>