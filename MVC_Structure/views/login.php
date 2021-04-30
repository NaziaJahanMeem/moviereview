<html lang="en">
  <head>
      <title>Welcome</title>
	  <link type="text/css" rel="stylesheet" href="<?=ASSETS?>css/login_style.css"/>
	  
	  
  </head>

  <body> 
    <div class="back">
		<div class="login_box">
			
			<div class ="login_header">
			<h1>WELCOME!</h1>
			 Login Below to Rate Movies
			</div>
		
			<form class="form_design" method="post">
			
				Username: <input type="text" name="user_id"> <br/>
				Password : <input type="password" name="password">  <br/>
				<input type="submit" value="Log In">
				<p><?php check_message() ?></p>
				<p class="message">Not registered? <a href="<?=ROOT?>signup">Create an account</a></p>
			</form>
		</div>
	
	</div>

	<?php $this->view("footer",$data);?>
  </body> 
</html>
