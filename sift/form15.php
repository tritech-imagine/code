<?php 
session_start(); 
$_SESSION['pagename'] = "form_index";
include 'db/db.php';
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
	<a href = "select.php" target = "_blank"> select * from stream.fooddata order by id desc;</a>
<?php  
if(isset($_POST['submit'])){
	$name_input = 	$_POST['name'];
	$food_input = $_POST['food'
	$three_inout = $_POST['three'];
	$four_inout = $_POST['four'];
	$five_input = $_POST['five'];
	$comments_input = $_POST['comments'];
	}
	
	echo "$name_input <br />";
	echo "$food_input <br />";
	echo "$three_input <br />";
	echo "$four_input <br />";
	echo "$five_input <br />";
	echo "$comments_input <br />";
?>


<form action="#" method="post">
	USER WHO TPYED IN DATA
	LAST NAME <input type="text" name="last" maxlength="64"> <br />
	FIRST NAME INITIAL <input type="text" name="last" maxlength="1"> <br />
	FOOD TYPE
		<select name="food">
		<option value="APPLE">APPLE</option>
		<option value="BANANA">BANANA</option>
		<option value="LETTUCE">LETTUCE</option>
		<option value="POTATO">POTATO</option>
		<option value="TOMATO">TOMATO</option>
		</select>
		<br />
	Input Three <input type="text" name="three" maxlength="64"> <br />
	Input Four  <input type="text" name="four" maxlength="64"> <br />
	Input Five  <input type="text" name="five" maxlength="64"> <br />
	Comments    <textarea rows="4" cols="50" name="comment" >Type comments or remove this this text.</textarea>

<input type="submit" name="submit" value="Submit" />

</form>




foodname 				:	name of the food
	fertalizer-quantity 	: 	quantity of feralizer used
	fertalizer-type 		: 	type of feralizer
	pesticide-quantity		: 	quantity of pecticide used
	pesticide-type 			:	type of pecticide used
	pesticide-interval 		:	pesticide 
	water-amount			:	how often is the crop watered
	irrigation-type 		:	type of water used for irrigation
	water-interval 			: 	how often is is the crop watered
	gmo 					:	genetically modified organism
	delivery-method 		: 	how is the crop delivered to the distributor
	delivery-distance 		: 	how far is it delivered
	delivery-waste-perent	: 	what percentage is wasted during delivery
	comments text NOT NULL	: 	comments


</div>
</body>
</html>
