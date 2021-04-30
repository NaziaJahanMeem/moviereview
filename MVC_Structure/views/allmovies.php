<html>
<head>
	<title>WELCOME!</title>
	<script src="<?=ASSETS?>https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	<script src="<?=ASSETS?>js/bootstrap/js"></script>
	<script src="<?=ASSETS?>css/bootstrap/js"></script>
	<link rel="stylesheet" href="<?ASSETS?>//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="<?=ASSETS?>css/bootstrap.css">
	<script type="text/javascript" src="<?=ASSETS?>js/jquery-1.4.2.min.js"></script>
	<script type="text/javascript" src="<?=ASSETS?>js/jquery-func.js"></script>
	<link rel="stylesheet" type="text/css" href="<?=ASSETS?>css/style.css">
	<link rel="stylesheet" href="<?=ASSETS?>css/ie6.css" type="text/css" media="all" />
	<link rel="stylesheet" type="text/css" href="<?=ASSETS?>css/all.min.css">
	<link rel="stylesheet" type="text/css" href="<?=ASSETS?>css/fontawesome.min.css">
	

	
	
</head>
<body>

	
	<div class="top_bar">
		
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
				<?php if($_SESSION['role']<2): ?>
				<a href="#">
					<i class="far fa-user "></i><?=$_SESSION['user_id'] ?>
				</a>
				<?php endif; ?>
				<?php if($_SESSION['role']==2): ?>
					<a href="<?=ROOT?>admin">
						<i class="far fa-user "></i><?=$_SESSION['user_id'] ?>
					</a>
					
				<?php endif; ?>
				<?php if($_SESSION['role']==1): ?>
					<a href="<?=ROOT?>genreadd">
						<i class="fas fa-film"></i>ADD Genre 
					</a>
					
					<a href="<?=ROOT?>movieadd">
						<i class="fas fa-film"></i>ADD Movie
					</a>
				<?php endif; ?>
				
				<a href="<?=ROOT?>logout">
					<i class="fas fa-sign-out-alt "></i>Logout 
				</a>
				<?php endif; ?>
			
			


		</nav>
		
	</div>
	
	<div class="ft">
	<h2> All Movies</h2>
	</div>
	<?php if(is_array($data['viewall'])): ?>
	<?php foreach(($data['viewall']) as $row): ?>
	
	 
		 
			
			<div class="features">
			<div class="row">
			<div class="card2">
            <div class="card-body">
			 <div class="col-md-2">
               
                    <img class="full-img" src="<?=ROOT. $row->image?>" width="250px" height="350px" alt=""/>
				</div>
			<div class="col-md-9">
					
                      <h3>NAME:  <?=$row->name?></h3>
					  <h3>PLOT:  <?=$row->plot?></h3>
					<h3>RELEASE DATE:  <?=$row->release_date?></h3>
                      <h3>RATING:  <?=$row->rating?></h3> 
               </div>
               </div> 
              </div>
             </div> 	
             </div>
        
	 
	
	<?php endforeach; ?>
	<?php endif; ?>
	
	</body>
</html>
