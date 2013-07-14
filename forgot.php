<?php 
    $gotAnswer = False;
    $isPost = False;

    if($_SERVER['REQUEST_METHOD'] == 'POST') {
        $isPost = True;
	if ($_POST['question'] == "3")
        	if (str_replace(' ','',strtoupper($_POST['answer'])) == 'MRMUFFY') $gotAnswer = True;
    }
?>
            

<!DOCTYPE html>
<!--[if IE 8]> 				 <html class="no-js lt-ie9" lang="en" > <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en" > <!--<![endif]-->

<head>
	<meta charset="utf-8" />
  <meta name="viewport" content="width=device-width" />
  <title>Hacme Central</title>

  
  <link rel="stylesheet" href="css/foundation.css" />
  

  <script src="js/vendor/custom.modernizr.js"></script>

</head>
<body>

	<div class="row">
		<div class="large-12 columns">
			<h2>Foundstone's Hacme Central</h2>
			<hr />
		</div>
	</div>
<?php if ($isPost == True && $gotAnswer == True) { ?>
    <div class = "row">
        <div class="large-6 large-centered columns">
            <h2>Forgot Password</h2>
            <p>Your password is: <font color="red">ILoveMyFluffyMrMuffy</font></p>
        </div>
        <div class="large-6 large-centered columns">
            <p><a href="index.php">Return to login page</a></p>
        </div>
    </div>
<?php } else { ?>
    <div class="row">
        <div class="large-6 large-centered columns">
            <h3>Forgot Password</h3>
            <p><?php 
                if ($isPost == True && $gotAnswer == False) 
                    echo "<label class=\"error\">Sorry, what you provided didn't match what we have on file</label>";
                else
                    echo "<label>Please specify a question and provide an answer</label>";
            ?></p>
            <form action="forgot.php" method="POST">
                <div class="row">
                    <div class="large-8 columns">
                        <label for="questionDropdown">Select the question</label>
                        <select id="questionDropdown" name="question" class="medium">
                            <option value="1">What is your mother's maiden name?</option>
                            <option value="2">What is your favorite teacher's name?</option>
                            <option value="3">What is your pet's name?</option>
                            <option value="4">What town did you grow up in?</option>
                        </select>
                    </div>
                </div>
                <div class="row">
                    <div class="large-8 columns">
                        <input type="text" name="answer" placeholder="Answer" >
                    </div>
                </div>
                <div class="row">
                    <div class="large-7 large-offset-1 columns">
                        <input type="submit" class="small button" value="Submit">    
                    </div>
                </div>
            </form>
        </div>
<?php } ?>
    </div>

  <script>
  document.write('<script src=' +
  ('__proto__' in {} ? 'js/vendor/zepto' : 'js/vendor/jquery') +
  '.js><\/script>')
  </script>
  
  <script src="js/foundation.min.js"></script>
  <script src="js/foundation/foundation.forms.js"></script>
  <script>
    $(document).foundation();
  </script>
</body>
</html>
