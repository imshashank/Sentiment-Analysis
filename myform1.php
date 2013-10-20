<?php
error_reporting(E_ALL);
ini_set('display_errors', true);

if($_POST['formSubmit'] == "Submit")
{
	$errorMessage = "";
	echo $_POST['formMovie'];
	if(empty($_POST['formMovie']))
	{
		$errorMessage .= "<li>You forgot to enter the data!</li>";
	}
	
	$varMovie = $_POST['formMovie'];
	
	if(empty($errorMessage)) 
	{
		$myFile = "article.txt";
		$fh = fopen($myFile, 'w') or die("can't open file");
echo $varMovie;
		fwrite($fh,$varMovie);
		fclose($fh);
		exec('java articleAnalysis ', $output);
echo "java";
echo "<pre>";
		print_r($output);
echo "</pre>";

		exit;
	}
}
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd"> 
<html>
<head>
	<title>My Form</title>
</head>

<body>
	<?php
		if(!empty($errorMessage)) 
		{
			echo("<p>There was an error with your form:</p>\n");
			echo("<ul>" . $errorMessage . "</ul>\n");
		} 
	?>
	<form action="myform1.php" method="post">
		<p>
			Enter text to rate?<br>

			<textarea type="text" rows="20" cols="50" name="formMovie" value="enter the text" /></textarea>
		</p>
		<input type="submit" name="formSubmit" value="Submit" />
	</form>
</body>
</html>
