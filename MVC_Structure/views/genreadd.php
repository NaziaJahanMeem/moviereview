<html>
		<head>
			<title>Add Genre</title>
			<script src="<?=ASSETS?>https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
			<script src="<?=ASSETS?>js/bootstrap/js"></script>
			<script src="<?=ASSETS?>css/bootstrap/js"></script>
			<link rel="stylesheet" href="<?ASSETS?>//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
			<link rel="stylesheet" type="text/css" href="<?=ASSETS?>css/bootstrap.css">
			
			<link rel="stylesheet" type="text/css" href="<?=ASSETS?>css/all.min.css">
			<link rel="stylesheet" type="text/css" href="<?=ASSETS?>css/fontawesome.min.css">
			<link rel="stylesheet" type="text/css" href="<?=ASSETS?>css/genrebg.css">
			
			
		</head>
		<body>
			<div class="top_bar">
			<div class="sitename">
				<a href="home.php">WELCOME!</a>
			</div>
			<nav>
				<a href="#">
						<i class="fas fa-search"></i>Search
				</a>
				
				<?php if(!isset($_SESSION['user_id'])): ?>
					<a href="<?=ROOT?>signup">
						<i class="fa fa-sign-in fa-lg "></i>Signup 
					</a>
					
					<a href="<?=ROOT?>login">
					<i class="fa fa-sign-in fa-lg "></i>LogIn 
					</a>
					
					<?php else: ?>
					
					<a href="#">
						<i class="far fa-user "></i><?=$_SESSION['user_id'] ?>
					</a>
					<?php if(isset($_SESSION['role'])): ?>
						<a href="<?=ROOT?>genreadd">
							<i class="fas fa-film"></i>ADD Genre 
						</a>
						
						<a href="<?=ROOT?>movieadd">
							<i class="fas fa-film"></i>ADD Movie
						</a>
					
					<?php endif; ?>
					<a href="<?=ROOT?>logout">
						<i class="fas fa-sign-out-alt "></i>>Logout 
					</a>
					<?php endif; ?>
				
			


		</nav>
		<div class= "genrebg">
			
				<div class="box">
				<div class= "head">
					<h1>Suggest a New Genre?</h1>
				</div>
					<form method="post">
						<input type="text" name="name" placeholder="Genre">
						<br>
						<input type="submit" name="submit" value="Submit">
						
						
						<p><?php check_message() ?></p>
						
						 
					</form>
					
				</div>
		</div>
		<?php $this->view("footer",$data);?>
	</body>
 </html>
