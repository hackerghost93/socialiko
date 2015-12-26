
		<div class="user-data">
			<h1><?= $this->user[0]['first_name'].' '.$this->user[0]['last_name']?> 's profile</h1>
			<img src="<?=$this->user[0]['image_path']?>">
			<?php if($this->access == false):?>
				<!-- it can be done with js -->
					<?php if($this->requested): ?>
						<h4>request is sent</h4>
					<?php else: ?>
					<form action="<?=URL?>/friend_request/request/<?=$this->id?>" method="get">
						<button type="submit" class="btn btn-default">Add Friend</button>
					</form>
					<?php endif; ?>
			<?php endif; ?>
			<h3>HomeTown : <?= $this->user[0]['hometown']?></h3>
			<h3>Phone : <?= $this->user[0]['phone']?></h3> 
			<h3>Gender : <?= $this->user[0]['gender']?></h3> 
			<h3>Marital Status : <?= $this->user[0]['martial_status']?></h3>
			<?php if($this->access == true): ?>
			<h3>Birthdate : <?= $this->user[0]['birthdate'] ?></h3>
			<h3>About me : <?= $this->user[0]['about_me'] ?> </h3>
			<?php endif; ?>
		</div>
		<?php if($this->me == true): ?>
		<div class="form-group">
		<form action="<?=URL?>/post/create" method="post" enctype="multipart/form-data" >
			<h1>
				New Post
			</h1>
			<hr/>
			<textarea name="caption" placeholder="Write post" rows="7" cols="70" class="form-control"></textarea>
			<br />
			<label for="post_picture">Insert Image</label>
		    <input type="file" id="exampleInputFile" name="post_picture">
			<div class="radio">
				<label><input type="radio" value="private" name="state" />private</label>	
				<label><input type="radio" value="public" name="state" checked="checked" />public</label>
			</div>
			<br/>
			<button type="submit" class="btn btn-default">Add Post</button>
		</form>
		</div>
		<?php endif; ?>
		<div class="smiles">
		<?php
		for ($i = 0 ; $i < count($this->posts) ;$i++) {
			if($this->access == true && $this->posts[$i]['state'] == 'public')
			{
			echo '<div class="post">';
			echo '<h3>'.$this->posts[$i]['caption'].'</h3>';
			if($this->posts[$i]['image_path'] != null)
				echo '<img src="'.$this->posts[$i]['image_path'].'">';
			echo"</div>";
			echo "\n";
			}
		}
		?>
		</div>

