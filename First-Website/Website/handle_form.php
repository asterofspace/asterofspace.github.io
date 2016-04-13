
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title> Feedback Form</title>
    <link rel="stylesheet" href="css/normalize.css">
    <link href='http://fonts.googleapis.com/css?family=Source+Code+Pro:300|Titillium+Web' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/responsive.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  </head>
  <body>
    <header>
      <a href="index.html" id="logo">
        <h1> Asterofspace</h1>
        <h2>Student Work</h2>
		<h3> <a href="Devrating.html">  <bold>Developer Ratings</bold> </a> </h3>
      </a>
      <nav>
        <ul>
          <li><a href="index.html" >Portfolio</a></li>
          <li><a href="about.html">About</a></li>
          <li><a href="contact.html"class="selected">Contact</a></li>
           <li> <a href="http://www.twitter.com/asterofspace" id="Follow"> Follow Me</a></li>
        </ul>
		
		
      </nav>
	  
	  
	  
    </header>
    
	
	
      <section>
	  <body>
	  <?php 
	  ini_set ('display_errors',1);
	  error_reporting (E_ALL | E_STRICT);
	  $title = $_POST['title'];
	$name = $_POST['name'];
	$response = $_POST['response'];
	$comments = $_POST['comments'];
	
	print "<p> Thank You, $title $name, for your comment. </p>
	<p> You stated that you found this example to be '$response' and commented: <br/> $comments</p>"
 ?>
 </body>
	  </section>
	 	
		
		


	 <footer>
	  
        <a href="http://twitter.com/asterofspace"><img src="img/twitter-wrap.png" alt="Twitter Logo" class="social-icon"></a>
        <a href="http://facebook.com"><img src="img/facebook-wrap.png" alt="Facebook Logo" class="social-icon"></a>
        <p>&copy; 2015 Heraldo Hernandez.</p>
      </footer>
    </div>
  </body>
</html>