<html>
<head>
	<title>Welcome!</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	<script src="js/bootstrap/js"></script>
	<script src="css/bootstrap/js"></script>
	<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
	
	<link rel="stylesheet" type="text/css" href="<?=ASSETS?>css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="<?=ASSETS?>css/useredit.css">
</head>
<body>

	<div class="top_bar">
		<div class="sitename">
			<a href="index.php">WELCOME!</a>
		</div>
		<nav>
			<a href="<?=ROOT?>logout">
					<i class="fas fa-sign-out-alt "></i>Logout 
			</a>
			
			
		</nav>
	</div>
	

	<div class="content">
		<h2 class="page-title">Manage User</h2>
	<table>
		
			<th>Name</th>
			<th>User_id</th>
			<th>Role</th>
			<th>Usertype</th>
			<?php if(is_array($data['adminedit'])): ?>
			<?php foreach(($data['adminedit']) as $row): ?>
			
			<tr>
				<td><?=$row->name?></td>
				<td> <?=$row->user_id?></td>
				<td><?=$row->role?></td>
				
				<td>
					
					<form method="post">
						<input type="hidden" name="edit_id" value="<?=$row->user_id?>">
						<select name="update">
						<option value="0"> 0 </option>
						<option value="1"> 1 </option>
						</select>
						<button type="submit" name="edit_btn" class="btn btn-success">Edit</button>
					</form>
					
				</td>
				
				
			</tr>
			<?php endforeach; ?>
			<?php endif; ?>
				
	</table>
	</div>				
	<div class="content2">
		<h2 class="page-title">Feature Movies</h2>
	<table>
		<tr>
			<th>Name</th>
			<th>Plot</th>
			<th>Rating</th>
			<th>Release Date</th>
			<th>Feature</th>
			<th>Edit</th>
			<th>Delete</th>
		</tr>
		<?php if(is_array($data['movieedit'])): ?>
			<?php foreach(($data['movieedit']) as $row): ?>
			
			<tr>
				<td><?=$row->name?></td>
				<td><?=$row->plot?></td>
				<td><?=$row->rating?></td>
				<td><?=$row->release_date?></td>
				<td><?=$row->feature?></td>
				<td>
					
					<form method="post">
						<input type="hidden" name="permission" value="<?=$row->name?>">
						<select name="update2">
						<option value="YES"> YES </option>
						<option value="NO"> NO </option>
						</select>
						<button type="submit" name="edit_btn2" class="btn btn-success">Edit</button>
					</form>
					
				</td>
				<td>
					<form method="post">
						<input type="hidden" name="delete" value="<?=$row->name?>">
						
						<button type="submit" name="deletebtn" class="btn btn-danger">Delete</button>
					</form>
				</td>
				<?php endforeach; ?>
				<?php endif; ?>
			</tr>
	</table>