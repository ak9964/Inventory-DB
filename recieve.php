<html>
<body> 
<form action="recieve1.php">
<h2 align="center"> RECIEVE MATERIAL </h2>
<hr>
<?php
	$dbh=mysql_connect('localhost','root','') or die(mysql_error());
	mysql_select_db('sanjay') or die (mysql_error());
         
	echo "<p>";
        $sql2 = "SELECT DISTINCT(material_name) FROM material";
	$result2 = mysql_query($sql2);
	echo"MATERIAL:";
	echo "<select name='material_name'>";
	while ($row = mysql_fetch_array($result2)) 
	{
    		echo "<option>" . $row['material_name'] ."</option>";
	}
	echo "</select>";
        echo "<br />";
        echo "</p>";
        echo "<p>";
        $sql2 = "SELECT DISTINCT(unit) FROM material";
	$result2 = mysql_query($sql2);
	echo"UNIT:";
	echo "<select name='unit'>";
	while ($row = mysql_fetch_array($result2)) 
	{
    		echo "<option value='" . $row['unit'] ."'>" . $row['unit'] ."</option>";
	}
	echo "</select>";
        echo "<br />";
        echo "</p>";
?>    
 	<p>
	QUANTITY:<input type="text"  name="quantity" /><br />
	<br />
         </p>
        <input type="SUBMIT" value="SAVE" />
        <br />
	<p>
        <a href="middle.html">HOME</a>
	</p>
</form>
</body>
</html>