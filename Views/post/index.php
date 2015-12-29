
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
					echo '<a href="'.URL.'/post/show/'.$this->posts[$i]['post_id'].'">';
					echo '<h3>'.$this->posts[$i]['caption'].'</h3>';
					echo '</a>';
					if($this->posts[$i]['image_path'] != null)
						echo '<img src="'.URL.'/'.$this->posts[$i]['image_path'].'"/>';
					echo '<h2>Liked from:</h2>';
					if($this->posts[$i]['likes'] != null) {
						for($j = 0 ; $j < count($this->posts[$i]['likes']) ; ++$j) {
						 	echo '<h4>'.$this->posts[$i]['likes'][$j]['first_name']." ".
										$this->posts[$i]['likes'][$j]['last_name'].'</h4>'.'</br>';
						}
					} else echo '<h4>No one.</h4>';
					echo '<h2>Comments:</h2>';
					if($this->posts[$i]['comments']) {
						for($j = 0 ; $j < count($this->posts[$i]['comments']) ; ++$j) {
							echo '<h4>'.$this->posts[$i]['comments'][$j]['first_name']." ".
							 $this->posts[$i]['comments'][$j]['last_name'].': '.
							 $this->posts[$i]['comments'][$j]['comment_text'].'</h4>';
						}
					} else echo '<h4>No comments on this post.</h4>';
					echo '<form action ="'.URL;
					//$this->view->isLiked = 
					if($this->posts[$i]['isLiked'])
						echo '/like/removeLike/';
					else echo '/like/createLike/';
					echo $this->posts[$i]['post_id'].'" method = "post"></br>';
					echo "<input type = \"submit\" class = \"btn btn-default\"";
					if($this->posts[$i]['isLiked']) 
						echo "value = \"Unlike\" />"."</br>";
					else echo "value = \"Like\" />"."</br>";
					echo "</form>"."</br>";
					echo "</div>";
					echo "\n";
				}
			}
			?>
		</div>

