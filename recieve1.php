<html>
<body bgcolor="orange">
<?php
 $dbh =mysql_connect('localhost','root','') or die(mysql_error());
 mysql_select_db('sanjay') or die(mysql_error());
   
   $sl_no = null;
   $material_name = $_REQUEST ['material_name'];
   $unit = $_REQUEST ['unit'];
   $quantity= $_REQUEST ['quantity'];
   $date=null;
   
 $query = "INSERT INTO recieve VALUES ('$sl_no','$date','$material_name','$unit','$quantity')";
 $result = mysql_query($query) or die(mysql_error());
 echo "RECIEVED MATERIAL INFORMATION STORED SUCCESSFULLY";
?>
<p>
<a href="middle.html"> HOME </a>
</p>
</body>
</html>