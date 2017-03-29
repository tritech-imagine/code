<html><head><title> <?php echo "FOOD NAME"; ?></title>
<style>
body {margin: 0; padding: 0;
background-color: #ffffff;
color:#996633;
font-family:"Arial","sans-serif";color:#700070;font-size:14px;}
pre{margin: 0; padding: 0;font-family:"Arial","sans-serif";color:#000000;font-size:14px;}


#content{
font-family: Arial, Helvetica, sans-serif;
font-size: 14px;
color: #000;
background-color:white;	
position:absolute;
left:50px;
top:50px;
width:600px;
}

div.label {
	background-color:#fff;	
	color: #777;
	border-style: solid;
    border-color: #ddd #ddd;
    padding: 5px;
	
}

div.dataoutline{
	background-color:#ddd;	
	color: #000;
	border-style: solid;
    border-color: #ddd #ddd;
    padding: 10px;
	
}
div.bolddata {

	font-weight: bold;
   
	
}

div.smalltext{
	font-family: Arial, Helvetica, sans-serif;
	color: #f00;
	    font-size: 8px;
}
td {
	background-color:#ddd;
	color: #000;
	padding : 5px;
	
}

</style>


</head>

<body>

	<?php
		include 'db/db.php';
		include 'db/error.php'; 
		
		$connection = mysql_connect($host,$dbuser,$dbpass);
		mysql_select_db($dbname, $connection);
		$sql = "select * from food.fooddata";
		$result = mysql_query ($sql, $connection);
		$therows = mysql_num_rows($result);
		echo "$therows items selected. <br />";//debug
		echo "<div id = content>";	
		while ($row = mysql_fetch_row($result)){
			echo "<div class = dataoutline>";
				echo "<div class =label >FOOD TYPE: ";		
					echo "<span style=color:#000;font-weight:bold>$row[2] </span></div><br />";
				echo "<div class =label >FOOD ID	: ";
					echo "<span style=color:#000;font-weight:bold>$row[3] </span></div><br />";		
				echo "<div class =label >FERTILIZER QUANTITY : ";
					echo "<span style=color:#000;font-weight:bold>$row[4] </span></div><br />";	
				echo "<div class =label >FERTILIZER TYPE : ";	
					echo "<span style=color:#000;font-weight:bold>$row[5] </span></div><br />";
				echo "<div class =label >PESTICIDE QUANTITY : ";	
					echo "<span style=color:#000;font-weight:bold>$row[6] </span></div><br />";
				echo "<div class =label >PESTICIDE TYPE : ";	
					echo "<span style=color:#000;font-weight:bold>$row[7] </span></div><br />";		
				echo "<div class =label >PESTICIDE INTERVAL : ";
					echo "<span style=color:#000;font-weight:bold>$row[8] </span></div><br />";		
				echo "<div class =label >WATER QUANTITY  : ";	
					echo "<span style=color:#000;font-weight:bold>$row[9] </span></div><br />";	
				echo "<div class =label >WATER TYPE : ";
					echo "<span style=color:#000;font-weight:bold>$row[10] </span></div><br />";					
				echo "<div class =label >WATER INTERVAL : ";
					echo "<span style=color:#000;font-weight:bold>$row[11] </span></div><br />";	
				echo "<div class =label >DELIVERY METHOD  : ";
					echo "<span style=color:#000;font-weight:bold>$row[12] </span></div><br />";		
				echo "<div class =label >DELIVERY DISTANCE  : ";
					echo "<span style=color:#000;font-weight:bold>$row[13] </span></div><br />";	
				echo "<div class =label >DELIVERY WASTE % : ";
					echo "<span style=color:#000;font-weight:bold>$row[14] </span></div><br />";	
				echo "<div class =label >GMO  :  ";
					echo "<span style=color:#000;font-weight:bold>$row[15] </span></div><br />";
				echo "<div class =label >COMMENTS : ";
					echo "<span style=color:#000;font-weight:bold>$row[16] </span></div><br />";
				echo "$row[0] $row[1]";
			
				echo "</div><br />";
			
	
		}
	echo "</div>";
		mysql_close($connection);
	
?>
</div>
</body>
</html>  
