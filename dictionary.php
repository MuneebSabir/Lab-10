<html>
<head>
<title>
Dictionary
</title>
</head>
<h2 align="center" style="color: blue;">Webster's Dictionary</h2>
<body style="background: skyblue">
	
	<form action="<?php $_PHP_SELF ?>" method="GET">
	<input type="text" name="input" placeholder="Enter Word"><br><br>
<!--	<textarea name="textarea" cols="24" rows="7" placeholder="Definition is:"></textarea><br><br> -->

	<input type="submit" value="Search">
<!--	<input type="reset" name="Submit2" value="reset"> -->
</form>
<?php
		$str = file_get_contents('dictionary.json');
$json = json_decode($str, true); // decode the JSON into an associative array
//print_r($json);
$counter=0;
if(isset($_GET['input'])){
$word = $_GET['input'];
foreach ($json as $key => $value) {
	if ($_GET["input"]==$key){
	//echo "Hey";
	print_r($value);
$counter++;
}

}
if ($counter==0) {
 	echo '<h3 style="color: red;">Word not found</h3>';
	
 } 
}


	?>
</body>

</html>