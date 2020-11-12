<?php
if(isset($_POST['submit'])){
	function sound(){
	$str1 = $_POST['input1'];
	$str2 = $_POST['input2'];

echo metaphone($str1);
echo "<br>";
echo metaphone('$str2');
echo "<br>";
echo "<br>";

soundex($str1);
echo "<br>";
echo soundex($str2);
}
sound();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HOMOPHONES</title>
    <style>
    	.body{
    		margin:0px;
    		padding:0px;
    	}
    	.h1{
    		text-align: center;
    		text-transform: uppercase;
    		background-color: teal;
    		width: 85%;
    		margin-left: 50px;
    		color:#ffffff;
    		font-family:tahoma, Geneva,verdana,sans-serif;
    	}
    	.form{
    		width:40%;
    		height:200px;
    		position:relative;
    		left:400px;
    		background-color: green;
    		right:300px;
    	}
    	.first-input1{
    		width:50%;
    		height:40px;
    		margin-left:30px;
    		margin-top:18px;
    		border-radius:5px;
    		color:blue;
    		font-size:20px;  
    	}
    	.first-input2{
    		width:50%;
    		height:40px;
    		margin-left:30px;
    		margin-top:18px;
    		border-radius:5px;
    		color:blue;
    		font-size:20px; 
    	}
    	.test{
    		position:relative;
    		top:40px;
    		left:120px;
    		width:40%;
    		height:40px;
    		background-color:black;
    		color:white;
    		border-radius:6px;
    		font-size:20px;
    		font-family: Tahoma,Geneva;
    	}
    </style>
<body>
	<h1>Check for homophones and sound of words</h1>
<form action="<?php $_SERVER['PHP_SELF'];?>" method="post">

<label for="$str">First Input</label>
<input type="text" name="input1" class="first-input1" placeholder="........................."><br><br>

<label for="$str2">Second Input</label>
<input type="text" name="input2" class="first-input2" placeholder="........................."><br><br>

<input type="submit" name="submit" value="CHECK" class="test">
</form>
    </body>
</html>hj
