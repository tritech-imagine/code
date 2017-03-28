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
	background-color:#425c9f;	
	color: #fff;
	
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
<div id = "content">
	<?php
include 'db/db.php';
include 'db/error.php'; 
		
		$connection = mysql_connect($host,$dbuser,$dbpass);
		mysql_select_db($dbname, $connection);
		$sql = "select * from food.fooddata";
		$result = mysql_query ($sql, $connection);
		$therows = mysql_num_rows($result);
		echo "$therows items selected. <br />";
		while ($row = mysql_fetch_row($result)){
				if ($row[2] > 1000 || $row[2] < 2000000)$photo = "photos/apples.jpg";

				echo "<img src =img/line1.png> <br /><br />";
				echo "<div class =label > <img src = $photo >FOOD TYPE: </div>";		
					echo "$row[2] <br />";
				echo "<div class =label >FOOD ID	: </div>";
					echo "$row[3] <br />";		
				echo "<div class =label >FERTILIZER QUANTITY : </div>";
					echo "$row[4] <br />";		
				echo "<div class =label >FERTILIZER TYPE : </div>";	
					echo "$row[5] <br />";	
				echo "<div class =label >PESTICIDE QUANTITY : </div>";	
					echo "$row[6] <br />";
				echo "<div class =label >PESTICIDE TYPE : </div>";	
					echo "$row[7] <br />";		
				echo "<div class =label >PESTICIDE INTERVAL : </div>";
					echo "$row[8] <br />" ;		
				echo "<div class =label >WATER QUANTITY  : </div>";	
					echo "$row[9] <br />"	;		
				echo "<div class =label >WATER TYPE : </div>";
					echo "$row[10] <br />";					
				echo "<div class =label >WATER INTERVAL : </div>";
					echo "$row[11] <br />";		
				echo "<div class =label >DELIVERY METHOD  : </div>";
					echo "$row[12] <br />";		
				echo "<div class =label >DELIVERY DISTANCE  : </div>";
					echo "$row[13] <br />";			
				echo "<div class =label >DELIVERY WASTE % : </div> ";
					echo "$row[14] <br />";	
				echo "<div class =label >GMO  : </div> ";
					echo "$row[15] <br />";
				echo "<div class =label >COMMENTS : </div> ";
					echo "$row[16] <br />";
				echo "<div class =label >$row[0] $row[1]. </div>";
				echo "<br /><img src =img/line1.png>";
				echo " <br /><br />";
     	
		}
	
		mysql_close($connection);
	
?>
</div>
</body>
</html>  
