<html>
<body bgcolor="pink">
<form action="stockatbranch1.php" target=_blank method="post">
<h2 align="center"> STOCK AT BRANCH </h2>
<hr>
<?php
	$dbh=mysql_connect('localhost','root','') or die(mysql_error());
	mysql_select_db('sanjay') or die (mysql_error());
         

	echo "<p>";
        $sql2 = "SELECT DISTINCT(branch_name) FROM marketting";
	$result2 = mysql_query($sql2);
	echo"BRANCH:";
        echo "<br />";
	echo "<select name='branch_name'>";
	while ($row1 = mysql_fetch_array($result2)) 
	{
    		echo "<option value='" . $row1['branch_name'] ."'>" . $row1['branch_name'] ."</option>";
	}
	echo "</select>";
        echo "<br />";
        echo "</p>";
        
        echo "<p>";
        $sql = "SELECT DISTINCT(material_name) FROM marketting";
	$result1 = mysql_query($sql);
	echo "MATERIALS:";
        echo "<br />";
        while ($row = mysql_fetch_array($result1)) 
	{  
	       echo '<input type="checkbox" '
			.       'checked="checked" '
                              .      'value="' . $row['material_name']. '" ' 
                             .      'name="material_name[]"/>';
		echo $row['material_name'];
                  echo "<br />";

 	}

        echo "<br />";
        echo "</p>";
        echo "<p>";
        $sql = "SELECT DISTINCT(date) FROM marketting";
	$result1 = mysql_query($sql);
        echo "FROM:" ; 
        echo "<select name='fromdate'>";
        while($row = mysql_fetch_array($result1))
        {
          	echo "<option>" . $row['date'] ."</option>";
	}
	echo "</select>";
        echo "</p>";
 	echo "<p>";
          $sql = "SELECT DISTINCT(date) FROM marketting";
	$result1 = mysql_query($sql);
         echo "TO:";
        echo "<select name='todate'>";
        while($row = mysql_fetch_array($result1))
        {
          echo "<option>" . $row['date'] ."</option>";	
	}
	echo "</select>";
        echo "</p>"
      
?>
<input type="submit" value="GO" />
<p>
<a href="middle.html"> HOME </a>
</p>
</form>
</body>
</html>