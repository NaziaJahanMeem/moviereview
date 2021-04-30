<html>
<head>
	<title>WELCOME!</title>
	<script src="<?=ASSETS?>https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	
	<link rel="stylesheet" href="<?ASSETS?>//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="<?=ASSETS?>css/bootstrap.css">
	<script type="text/javascript" src="<?=ASSETS?>js/jquery-1.4.2.min.js"></script>
	<script type="text/javascript" src="<?=ASSETS?>js/jquery-func.js"></script>
	
	<link rel="stylesheet" type="text/css" href="<?=ASSETS?>css/all.min.css">
	<link rel="stylesheet" type="text/css" href="<?=ASSETS?>css/fontawesome.min.css">
	<link rel="stylesheet" type="text/css" href="<?=ASSETS?>css/img.css">

<body>

	
	<div class="top_bar">
		<div class="sitename">
			<a href = "<?=ROOT?>allmovies">All Movies</a>
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
	<h2> Featured Today</h2>  
	
	</div>
	
	<?php if(is_array($data['viewfeatured'])): ?>
	<?php foreach(($data['viewfeatured']) as $row): ?>
	
	<div class="feature">



        <div class="col-md-2">
            <div class="box">
                <div class="imgbx">

                   <img src="<?=ROOT. $row->image?>" width="250px" height="300px" alt=""/>
                </div>
                <div class="content">
                      <h4 class="card-title"><?=$row->name?></h4>
                      <p class="description"><?=$row->rating?></p>
                </div>
            </div> 

        </div>
    </div>
	
	<?php endforeach; ?>
	<?php endif; ?>
	
	<?php $this->view("footer",$data);?>
  </body> 
	</body>
</html>
