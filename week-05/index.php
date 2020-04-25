<!DOCTYPE html>
<html>
<head>
	<title>Amrutha Somayaji PHP</title>
</head>
<body>
	<h1>Amrutha Somayaji's PHP page</h1>
	<p>
		
		<?php
		echo 
		"The hash SHA256 of 'Amrutha Somayaji' is \n";
		print hash('sha256', 'Amrutha Somayaji');
		?>	
	</p>
<pre>
<?php
echo 
"ASCII art:	
	 
     $$$$$$  
    $$    $$ 
    $$    $$ 
    $$$$$$$$ 
    $$    $$ 
    $$    $$ 
    $$    $$ 
"
?>
		              	
	</pre>	

	<a href="check.php">Click here to check error settings</a>
	<br>
	<a href="fail.php">Click here to cause a trace back</a>
</body>
</html>