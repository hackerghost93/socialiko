<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8" />
	<title>Socialiko</title>
	<link rel="stylesheet" type="text/css" href="<?=URL?>/Public/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="<?=URL?>/Public/Files/Emotions Template/jquery.emotions.fb.css">
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
	<script src="<?=URL?>/Public/Files/Emotions Template/jquery.emotions.js"></script>
	<style type="text/css">
		.container{
			margin-top: 50px ;
			width : 70%;
		}
		.user-data{
			border : 1px solid black;
			padding: 20px ;
		}
	</style>
</head>
<body>
	<div class="navbar navbar-inverse navbar-fixed-top" role="navigation">

		<div class="navbar-header">
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand" rel="home" href="/" title="Aahan Krish's Blog - Homepage">Socialiko</a>
		</div>

		<div class="collapse navbar-collapse navbar-ex1-collapse">

			<div class="col-sm-3 col-md-3">
				<form class="navbar-form" action="<?=URL?>/login/search" method="get">
					<div class="input-group">
							<input type="text" class="form-control" placeholder="Search" name="val" id="srch-term">
							<div class="input-group-btn">
								<button class="btn btn-default" type="submit"><i class="glyphicon glyphicon-search"></i></button>
							</div>
					</div>
				</form>
			</div>

			<ul class="nav navbar-nav pull-right">
				<li><a href="<?=URL?>/post/index">Home</a></li>
				<li><a href="<?=URL?>/friend/getFriends">Friends</a></li>
				<li><a href="<?=URL?>/login/logout">Sign out</a></li>
			</ul>
		</div>
	</div>
	<div class="container">
		<div class="user-data">
			<h1><?= $this->user[0]['first_name'].' '.$this->user[0]['last_name']?> 's profile</h1>
			<?php if($this->access == false):?>
				<!-- it can be done with js -->
				<?php if($this->friend != true): ?>
					<form action="<?=URL?>/friend/AddFriend/<?=$this->id?>" method="get">
						<button type="submit" class="btn btn-default">Add Friend</button>
					</form>
				<?php endif; ?>
			<?php endif; ?>
			<hr/>
			<h3>HomeTown : <?= $this->user[0]['hometown']?></h3>
			<h3>Phone : <?= $this->user[0]['phone']?></h3> 
			<h3>Gender : <?= $this->user[0]['gender']?></h3> 
			<h3>Marital Status : <?= $this->user[0]['martial_status']?></h3>
		</div>
		<?php if($this->access == true): ?>
		<div class="form-group">
		<form action="<?=URL?>/post/create" method="post" >
			<h1>
				New Post
			</h1>
			<hr/>
			<textarea name="caption" placeholder="Write post" rows="7" cols="70" class="form-control"></textarea>
			<br />
			<div class="radio">
				<label><input type="radio" value="private" name="state" />private</label>	
				<label><input type="radio" value="public" name="state" />public</label>
			</div>
			<br/>
			<button type="submit" class="btn btn-default">Add Post</button>
		</form>
		</div>
		<?php endif; ?>
		<div class="smiles">
		<?php
		for ($i = 0 ; $i < count($this->posts) ;$i++) {
			echo '<div class="post">';
			echo '<h3>'.$this->posts[$i]['caption'].'</h3>';
			//echo '<br/>';
			echo"</div>";
			echo "\n";
		}
		?>
		</div>
	</div>
	<script>
    $(document).ready(function(){
        $('.smiles').emotions();
    });
	</script>
</body>
</html>
