<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8" />
	<title>Socialiko</title>
</head>
<body>
	<?php print_r($this->user);?>
	<h1> HomePage</h1>
	<h2>Name : <?= $this->user[0]['first_name'].' '.$this->user[0]['last_name']?></h2>
	<h3>HomeTown : <?= $this->user[0]['hometown']?></h3>
	<h3>Phone : <?= $this->user[0]['phone']?></h3> 
	<h3>Gender : <?= $this->user[0]['gender']?></h3> 
	<h3>Marital Status : <?= $this->user[0]['martial_status']?></h3>
	<form action="<?=URL?>/post/create" method="post">
		<h1>
			New Post
		</h1>
		<hr/>
		<textarea name="caption" rows="7" cols="70"></textarea>
		<br />
		<label>private</label>
		<input type="radio" value="private" name="state"/>
		<label>public</label>
		<input type="radio" value="public" name="state"/>
		<br/>
		<input type="submit" value="Create post"/>
	</form>

	<?php 
		for ($i = 0 ; $i < count($this->posts) ;$i++) {
			echo '<h3>'.$this->posts[$i]['caption'].'</h3>';
		}
	?>

</body>
</html>



