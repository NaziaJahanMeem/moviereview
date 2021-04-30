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
			 Sign In
			</div>
			
			<form class="form_design" method="post">
				<input type="text" name="name" placeholder="Name"/> <br/>
				<input type="text" name="user_id" placeholder="Username"/> <br/>
				<input type="text" name="email" placeholder="Email"/> <br/>
				<input type="text" name="dob" placeholder="Date of Birth"/> <br/>
				<input type="password" name="password" placeholder="password"/> <br/>
				<input type="submit" value="Sign In"> <br/>
				<p><?php check_message() ?></p>
			
				<p class="message">Already registered? <a href="<?=ROOT?>login">Log In</a></p>
			</form>
			
		</div>
	
	</div>

	<?php $this->view("footer",$data);?>
  </body> 
</html>

<script>
	$('.message a').click(function(){
	   $('form').animate({height: "toggle", opacity: "toggle"}, "slow");
	});

	$('form').animate({height: "toggle", opacity: "toggle"}, "slow");

</script>