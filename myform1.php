<?php
if($_POST['formSubmit'] == "Submit")
{
	$errorMessage = "";
	
	if(empty($_POST['formMovie']))
	{
		$errorMessage .= "<li>You forgot to enter the data!</li>";
	}
	
	$varMovie = $_POST['formMovie'];
	

	if(empty($errorMessage)) 
	{
		$fs = fopen("article.txt","w");
		fwrite($fs,$varMovie);
		fclose($fs);
		exec('java articleAnalysis ' . $file, $output);
echo "<pre>";
		print_r($output);
echo "</pre>";
//		header("Location: thankyou.html");
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
