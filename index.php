<?php 
    $gotUser = False;
    $gotPass = False;
    $isPost = False;

    if($_SERVER['REQUEST_METHOD'] == 'POST') {
        $isPost = True;
        if (strtoupper($_POST['username']) == 'BRAD') $gotUser = True;
        if ($_POST['password'] == 'ILoveMyFluffyMrMuffy') $gotPass = True;
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
<?php if ($isPost == True && $gotUser == True && $gotPass == True) { ?>
    <div class = "row">
        <div class="large-6 large-centered columns">
            <h2>Nice Job!</h2>
            <p>Way to go, you hacked my account! now that you're hacking stuff, its important to realize there are some rules for hacking:</p>
        </div>
        <div class="large-6 large-centered columns">
            <p>
            <ol>
                <li>Don't hack anything you don't own</li>
                <li>Get permissions to hacking anything else</li>
                <li>Don't be a Jerk!</li>
            </ol>
            </p>
        </div>
    </div>
<?php } else { ?>
    <div class="row">
        <div class="large-6 large-centered columns">
            <h3>Login</h3>
            <p><?php 
                if ($isPost == True && $gotUser == False) 
                    echo "<label class=\"error\">Incorrect Username and Password</label>";
                else if ($isPost == True && $gotUser == True && $gotPass == False)
                    echo "<label class=\"error\">Incorrect Password</label>";
                else
                    echo "<label>Please provide your username and password to login</label>";
            ?></p>
            <form action="index.php" method="POST">
                <div class="row">
                    <div class="large-8 columns">
		        	         <input type="text" name="username" placeholder="Username" <?php if ($isPost == True && $gotUser == False) echo "class=\"error\"" ?> >
                    </div>
                </div>
                <div class="row">
                    <div class="large-8 columns">
                        <input type="password" name="password" placeholder="Password" <?php if (($isPost == True && $gotUser == False) || ($isPost == True && $gotUser == True && $gotPass == False)) echo "class=\"error\"" ?> >
                    </div>
                </div>
                <div class="row">
                    <div class="large-4 columns">
                        <a href="forgot.php">forgot password</a>
                    </div>
                    <div class="large-7 large-offset-1 columns">
                        <input type="submit" class="small button" value="Login">    
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
  <script>
    $(document).foundation();
  </script>
</body>
</html>
