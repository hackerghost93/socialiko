<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8" />
	<title>Socialiko</title>
	<link rel="stylesheet" href="<?=URL?>/Public/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="<?=URL?>/Public/bootstrap/css/styles.css" >
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
				<form class="navbar-form" role="search">
					<div class="input-group">
						<input type="text" class="form-control" placeholder="Search" name="srch-term" id="srch-term">
						<div class="input-group-btn">
							<button class="btn btn-default" type="submit"><i class="glyphicon glyphicon-search"></i></button>
						</div>
					</div>
				</form>
			</div>

			<ul class="nav navbar-nav pull-right">
				<li><a href="<?=URL?>/post/index">Home</a></li>
				<li><a href="<?=URL?>/post/index">Friends</a></li>
				<li><a href="<?=URL?>/login/logout">Sign out</a></li>
			</ul>
		</div>
	</div>
	<div class="container">
		<div class="user data">
			<?php print_r($this->user);?>
			<h1><?= $this->user[0]['first_name'].' '.$this->user[0]['last_name']?> 's profile</h1>
			<hr/>
			<h3>HomeTown : <?= $this->user[0]['hometown']?></h3>
			<h3>Phone : <?= $this->user[0]['phone']?></h3> 
			<h3>Gender : <?= $this->user[0]['gender']?></h3> 
			<h3>Marital Status : <?= $this->user[0]['martial_status']?></h3>
		</div>
		<form action="<?=URL?>/post/create" method="post" class="form-group">
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

		<?php 
		for ($i = 0 ; $i < count($this->posts) ;$i++) {
			echo '<h3>'.$this->posts[$i]['caption'].'</h3>';
		}
		?>
	</div>

</body>
</html>
