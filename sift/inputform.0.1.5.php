<?php 
session_start(); 
//$_SESSION['pagename'] = "form_index";
//include 'db/db.php';
//include 'db/error.php'; 
//include 'db/pushhits.php';

?> 

<html><head><title> Form Input </title>
<style>
body {margin: 0; padding: 0;
background-color: #ffffff;
color:#996633;
font-family:"Arial","sans-serif";color:#700070;font-size:14px;}
pre{margin: 0; padding: 0;font-family:"Arial","sans-serif";color:#000000;font-size:14px;}


#content{
font-family: Arial, Helvetica, sans-serif;
font-size: 14px;
color: #330099;
background-color:white;	
position:absolute;
left:350px;
top:100px;
}


</style>


</head>

<body>
<div id = "content">
FOOD DATA INPUT
<br />
<?php
$host = "localhost"; 
$dbname = "food"; 
$dbuser = "coleman"; 
$dbpass = "redhat"; 
$connection = mysql_connect($host, $dbuser, $dbpass) or die("Could not connect to database server"); 
mysql_select_db($dbname, $connection) or die("Could not select database"); 

$result = mysql_query ("SELECT CURDATE();", $connection);
	$row = mysql_fetch_row($result);$date = $row[0];
   
	$result = mysql_query ("SELECT CURTIME();", $connection);
	$row = mysql_fetch_row($result);$time = $row[0];
	
	echo "$date $time <br>";

	$str_time = $time;
	$str_date = $date;
	
	$timedate = $time." ".$date;
echo "$timedate <br>"; 

//echo "$query";
// $result = @ mysql_query ($query, $connection)  or showerror();			
	//mysql_close();

?>

<?php

if(isset($_POST['submit'])){
	$last_input = 	$_POST['last'];
	$first_input = 	$_POST['first'];
	$food_input = $_POST['food'];
	$food_id_input = $_POST['food-id'];
	$fert_quantity_input = $_POST['fert-quantity'];
	$fert_type_input = $_POST['fert-type'];
	$pest_quantity_input = $_POST['pest-quantity'];
	$pest_type_input = $_POST['pest-type'];
	$pest_interval_input = $_POST['pest-interval'];
	$water_quantity_input = $_POST['water-quantity'];
	$water_type_input = $_POST['water-type'];
	$water_interval_input = $_POST['water-interval'];
	$del_method_input = $_POST['del-method'];
	$del_distance_input = $_POST['del-distance'];
	$del_waste_input = $_POST['del-waste'];
	$gmo_input = $_POST['gmo'];
	$comments_input = $_POST['comments'];
	}

	//$str_time = $time;
	//$str_date = $date;
	//$str18 = $time."-".$date;
	
	echo "1 : $last_input <br />";
	echo "2 : $first_input<br />";
	echo "3 : $food_input <br />";
	echo "4 : $food_id_input <br />";
	echo "5 : $fert_quantity_input<br />"; 
	echo "6 : $fert_type_input <br />";
	echo "7 : $pest_quantity_input<br />";
	echo "8 : $pest_type_input <br />";
	echo "9 : $pest_interval_input <br />";
	echo "10: $water_quantity_input <br />";
	echo "11: $water_type_input <br />";
	echo "12: $water_interval_input <br />";
	echo "13: $del_method_input <br />";
	echo "14: $del_distance_input <br />";
	echo "15: $del_waste_input <br />";
	echo "16: $gmo_input <br />";
	echo "18: $comments_input <br />";

	echo "<hr />";
	$insert0 = "INSERT INTO `fooddata` (`last`, `first`, `food_type`, `food_id`, `fert_quantity`, `fert_type`, `pest_quantity`, `pest_type`, `pest_interval`, `water_quantity`, `water_type`, `water_interval`, `delivery_method`, `delivery_distance`, `delivery_waste`, `gmo`, `comments`, `date_time`) VALUES ";
	$insert1 = "('".$last_input; // 1
	$insert1 = 	$insert1."','".$first_input;   //2
	$insert1 = 	$insert1."','".$food_input;   //3
	$insert1 = 	$insert1."','".$food_id_input;   //4
	$insert1 = 	$insert1."','".$fert_quantity_input;  //5
	$insert1 = 	$insert1."','".$fert_type_input;  //6
	$insert1 = 	$insert1."','".$pest_quantity_input;//7
	$insert1 = 	$insert1."','".$pest_type_input;  //8
	$insert1 = 	$insert1."','".$pest_interval_input;  //9
	$insert1 = 	$insert1."','".$water_quantity_input;  //10
	$insert1 = 	$insert1."','".$pest_quantity_input;  //11
	$insert1 = 	$insert1."','".$pest_quantity_input;  //12
	$insert1 = 	$insert1."','".$del_method_input;  //13
	$insert1 = 	$insert1."','".$del_distance_input;  //14
	$insert1 = 	$insert1."','".$del_waste_input;  //15
	$insert1 = 	$insert1."','".$gmo_input;  //16
	$insert1 = 	$insert1."','".$comments_input;  //17
	$insert1 = 	$insert1."','".$timedate;  //18
	$insert1 = 	$insert1."');";
	// 1 $last_input 2 $first_input  3 $food_input 4  $food_id_input 5   $fert_quantity_input  6 $fert_type_input   
	//7 $pest_quantity_input  8 $pest_type_input  9 $pest_interval_input 10  $water_quantity_input  
	//11 $water_type_input  12 $water_interval_input 13 $del_method_input 14  $del_distance_input   
	//15 $del_waste_input  16 $gmo_input 17  $comments_input 18 date
	//('1', '2', 'apple', '4', '5', '6', '7', '8', '9', '10', '11', '12', '13', '14', '15', '16', '17', '170326  0521');
	//echo "$str18 <br />";
	$sql_insert = $insert0.$insert1;
	echo "<hr />";
	echo "$sql_insert";
	echo "<hr />";
	$result = @ mysql_query ($sql_insert, $connection)  or showerror();			
	mysql_close();
?>
<pre>
1		LAST NAME				
2		FIRST INITIAL 			
3		FOOD TYPE		
4		FOOD ID		
5		FERTILIZER QUANTITY 	
6		FERTILIZER TYPE  		
7		PESTICIDE QUANTITY 		
8		PESTICIDE TYPE 			
9		PESTICIDE INTERVAL 		
10		WATER QUANTITY 			
11		WATER TYPE 				
12		WATER INTERVAL 			
13		DELIVERY METHOD 		
14		DELIVERY DISTANCE 		
15		DELIVERY WASTE % 
16		GMO 
17 		COMMENTS
18		DATE AND TIME		
</pre>
<form action="#" method="post">
	<pre>
	USER INPUT NAME
	LAST NAME 				<input type="text" name="last" maxlength="64"> 
	FIRST INITIAL 			<input type="text" name="first" maxlength="1"> 
	FOOD TYPE				<select name="food">
							<option value="APPLE">APPLE</option>
							<option value="BANANA">BANANA</option>
							<option value="LETTUCE">LETTUCE</option>
							<option value="POTATO">POTATO</option>
							<option value="TOMATO">TOMATO</option>
							</select>
							<br />
	FOOD ID 				<input type="text" name="food-id" maxlength="64"> 
	FERTILIZER QUANTITY 	<input type="text" name="fert-quantity" maxlength="64"> 
	FERTILIZER TYPE  		<input type="text" name="fert-type" maxlength="64"> 
	<hr />
	PESTICIDE QUANTITY 		<input type="text" name="pest-quantity" maxlength="64"> 
	PESTICIDE TYPE 			<input type="text" name="pest-type" maxlength="64"> 
	PESTICIDE INTERVAL 		<input type="text" name="pest-interval" maxlength="64"> 
	<hr />
	WATER QUANTITY 			<input type="text" name="water-quantity" maxlength="64"> 
	WATER TYPE 				<input type="text" name="water-type" maxlength="64"> 
	WATER INTERVAL 			<input type="text" name="water-interval" maxlength="64"> 
		<hr />
	DELIVERY METHOD 		<input type="text" name="del-method" maxlength="64"> 
	DELIVERY DISTANCE 		<input type="text" name="del-distance" maxlength="64"> 
	DELIVERY WASTE % 		<input type="text" name="del-waste" maxlength="64"> 
	<hr /> 
	GENETICALLY MODIFIED ORGANISM (GMO) <br />
	GMO 					<input type="text" name="gmo" maxlength="64"> <br />
	COMMENTS   				<textarea rows="4" cols="50" name="comments" >Type comments or remove this this text.</textarea>
</pre>
<input type="submit" name="submit" value="Submit" />
</form></div>
</body>
</html>
