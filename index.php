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

//$file = fopen("article.txt","w");
//echo fwrite($file,"Hello World. Testing!");
//fclose($file);

                $fs = fopen("article.txt","w");
                fwrite($fs,$varMovie);
//file_put_contents($fs, $varMovie);
                fclose($fs);
		exec('javac articleAnalysis.java');
                exec('javac articleAnalysis.javajava articleAnalysis ', $output);
echo "<pre>";
                print_r($output);
echo "</pre>";
//              header("Location: thankyou.html");
                exit;
        }
}
?>


<!DOCTYPE HTML>
<!--
	Overflow 1.0 by HTML5 UP
	html5up.net | @n33co
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>Sentiment Analysis by Shashank Agarwal</title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,300italic" rel="stylesheet" type="text/css" />
		<!--[if lte IE 8]><script src="css/ie/html5shiv.js"></script><![endif]-->
		<script src="js/jquery.min.js"></script>
		<script src="js/jquery.poptrox-2.2.js"></script>
		<script src="js/skel.min.js"></script>
		<script src="js/init.js"></script>
		<noscript>
			<link rel="stylesheet" href="css/skel-noscript.css" />
			<link rel="stylesheet" href="css/style.css" />
		</noscript>
		<!--[if lte IE 8]><link rel="stylesheet" href="css/ie/v8.css" /><![endif]-->
	</head>
	<body>

		<!-- Header -->
			<section id="header">
				<header>
					<h1>Sentiment Analysis </h1>
					<p>by Shashank Agarwal</p>
				</header>
				<footer>
					<a href="#banner" class="button style2 scrolly">About the project</a>
				</footer>
			</section>
		
		<!-- Banner -->
			<section id="banner">
				<header>
					<h2>Sentiment Analysis</h2>
				</header>
				<p>This is a simple word by word analysis tool to rate a piece of text.<br />
				I have used the the ANEW words and FINN lexicon as the lexicon base for analysis<br />
				You can get the whole code at <a href="https://github.com/imshashank/Sentiment-Analysis">Github</a>.</p>
				<footer>
					<a href="#first" class="button style2 scrolly">Now let's analyze: </a>
				</footer>
			</section>
				
		<!-- Contact -->
	
<section>
			<article class="container box style3">

				<header>
					<h2>Analysis</h2>
					<p>Just enter the text to be analyzed</p>
				</header>
				<form action="index.php" method="post">
					<div class="row half">
						<div class="12u">
		<textarea type="text" rows="5" cols="10" name="formMovie" value="enter the text" /></textarea>

						</div>
					</div>
					<div class="row">
						<div class="12u">
							<ul class="actions">
								<li>
		<input type="submit" name="formSubmit"class="button form" value="Submit" />
</li>
							</ul>
						</div>
					</div>
				</form>
			</article>
</section>
<article class="container box style3" id="rating">
<section>
					<header>
						<h3>The ratings</h3>
					</header>
					<ol class="default">

						<li><?php echo "Valence rating:" . $output[sizeof($output)-6];?>
</li>
						<li><?php echo "Arousal rating:" . $output[sizeof($output)-5]; ?>

</li>
						<li><?php echo "Dominance rating:" . $output[sizeof($output)-4]; ?>
</li>

						<li><?php echo "Finn rating:" . $output[sizeof($output)-2]."</br>"; 
							 echo $output[sizeof($output)-3];
?></li>
					</ol>
				</section></article>
		
		
		<section id="footer">
			<ul class="icons">
				<li><a href="http://twitter.com/itsshashank" class="icon icon-twitter solo"><span>Twitter</span></a></li>
				<li><a href="http://fb.me/agarwal.shashank" class="icon icon-facebook solo"><span>Facebook</span></a></li>
				<li><a href="https://plus.google.com/107862114554859378569/posts" class="icon icon-google-plus solo"><span>Google+</span></a></li>
				<li><a href="www.linkedin.com/pub/shashank-agarwal/2a/ba6/366/" class="icon icon-linkedin solo"><span>LinkedIn</span></a></li>
			</ul>
			<div class="copyright">
				<ul class="menu">
					<li>&copy; Sentiment Analysis. All rights reserved.</li>

				</ul>
			</div>
		</section>

	</body>
</html>
