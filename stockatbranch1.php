<html>
<body>
<img src ="logo.png" alt ="error" 
style="float:left;height:80px;" />
<font color="maroon" size=8 face="Ravie"><p align="center">SANJAY ENTERPRISES</p></font>
<hr />
<?php
$dbh =mysql_connect('localhost','root','') or die(mysql_error());
 mysql_select_db('sanjay') or die(mysql_error());
$branch = $_POST['branch_name'];
$from = $_POST['fromdate'];
$to = $_POST['todate'];
$name = $_POST['material_name'];



$var=mysql_query("SELECT  * FROM marketting where date BETWEEN '". $from."' and '".$to."' ORDER by sl_no ASC ");

$n= count($name);

echo"<table border size=1>";
echo"<tr><th>SLNO</th> <th> DATE </th> <th> MATERIAL NAME</th> <th>VOLUME </th> <th> UNIT </th> <th> TOTAL</th> </tr>";
  
while ($arr=mysql_fetch_row($var))
 {  
      if($branch == $arr[5])
      {
	for($i=0;$i<$n;$i++)
        {
          if($name[$i] == $arr[2]) 
           echo"<tr> <td>$arr[0]</td> <td>$arr[1]</td> <td>$arr[2]</td> <td>$arr[3]</td><td>$arr[4]</td><td>$arr[3]</td></tr>";
         }
       }
 } 
 
 echo"</table>";
?>

</body>
</html>