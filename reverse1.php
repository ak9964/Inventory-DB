<html>
<body bgcolor="orange">
<?php
 $dbh =mysql_connect('localhost','root','') or die(mysql_error());
 mysql_select_db('sanjay') or die(mysql_error());
   
   $sl_no = null;
   $branch_name = $_REQUEST ['branch_name'];
   $material_name = $_REQUEST ['material_name'];
   $unit = $_REQUEST ['unit'];
   $quantity= $_REQUEST ['quantity'];
   $date=null;
   $opening_balance=null;   

   $var=mysql_query("SELECT  * FROM marketting;");
   while ($arr=mysql_fetch_row($var))
   { 
     if(($arr[2] == $material_name) && ($arr[4] == $unit))
     {
        $opening_balance = $arr[7];
     }
   }
   
   $closing_balance= $opening_balance + $quantity;


 $query = "INSERT INTO marketting VALUES ('$sl_no','$date','$material_name','$quantity','$unit','$branch_name','$opening_balance','$closing_balance')";
 $result = mysql_query($query) or die(mysql_error());
 echo "REVERSE MATERIAL INFORMATION STORED SUCCESSFULLY";
?>
<p>
<a href="middle.html"> HOME </a>
</p>
</body>
</html>
</html>