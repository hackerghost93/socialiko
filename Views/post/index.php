
		<div class="user-data">
			<h1><?= $this->user[0]['first_name'].' '.$this->user[0]['last_name']?> 's profile</h1>
			<img src="<?=$this->user[0]['image_path']?>">
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

