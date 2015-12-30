
		<div class="user-data">
			<div class="profilepic">
				<img src="<?=URL.'/'.$this->user[0]['image_path']?>">
				<?php if($this->me == true):?>
					<form action="<?=URL.'/login/editProfilePic'?>" method="post" 
					enctype="multipart/form-data" class="form-group" class="form-control">
						<input type="file" name="profile_picture">
						<input type="submit" name="submit" value="Change Profile Picture" 
						class="form-control">
					</form>
					<form action="<?=URL.'/login/removeProfilePic'?>" method="post" class="form-group">
						<input type="submit" value="Remove Profile Picture" class="form-control">
					</form>
				<?php endif;?>
			</div>
			<h1><?= $this->user[0]['first_name'].' '.$this->user[0]['last_name']?> 's profile</h1>
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
			<?php if(isset($this->user[0]['hometown'])): ?>
				<h3>HomeTown : <?= $this->user[0]['hometown']?></h3>
			<?php endif; ?>
			<?php if(isset($this->user[0]['phone'])): ?>
				<h3>Phone : <?= $this->user[0]['phone']?></h3> 
			<?php endif; ?>
			<h3>Gender : <?= $this->user[0]['gender']?></h3> 
			<h3>Marital Status : <?= $this->user[0]['martial_status']?></h3>
			<?php if($this->access == true): ?>
			<?php if(isset($this->user[0]['birthdate'])): ?>
				<h3>Birthdate : <?= $this->user[0]['birthdate'] ?></h3>
			<?php endif; ?>
			<?php if(isset($this->user[0]['about_me'])): ?>
				<h3>About me : <?= $this->user[0]['about_me'] ?> </h3>
			<?php endif; ?>	
			<?php endif; ?>
		</div>
		<?php if($this->me == true): ?>
		<form action = "<?=URL?>/login/edit" method = "post">
			<button type="submit" class="btn btn-default">Edit Profile</button>
		</form>
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
					echo '<div class="post">'."\n";
					echo '<a href="'.URL.'/post/show/'.$this->posts[$i]['post_id'].'">'."\n";
					echo '<h3>'.$this->posts[$i]['caption'].'</h3>'."\n";
					echo '<h5>'.'Created at: '.$this->posts[$i]['created_at'].
													'</h5>'."\n";
					echo '</a>'."\n";
					if($this->posts[$i]['image_path'] != null)
						echo '<img src="'.URL.'/'.$this->posts[$i]['image_path'].'"/>'."\n";
					echo '<form action ="'.URL;
					//$this->view->isLiked = 
					if($this->posts[$i]['isLiked'])
						echo '/like/removeLike/';
					else echo '/like/createLike/';
					echo $this->posts[$i]['post_id'];
					if(!$this->posts[$i]['isLiked'])
						echo '/'.$this->posts[$i]['user_id'];
					echo '" method = "post"></br>'."\n";
					echo "<input type = \"submit\" class = \"btn btn-default\"";
					if($this->posts[$i]['isLiked']) 
						echo "value = \"Unlike\" />"."</br>"."\n";
					else echo "value = \"Like\" />"."</br>"."\n";
					echo "</form>"."</br>"."\n";
					echo '<h2>Liked from:</h2>'."\n";
					if($this->posts[$i]['likes'] != null) {
						for($j = 0 ; $j < count($this->posts[$i]['likes']) ; ++$j) {
						 	echo '<h4>'.$this->posts[$i]['likes'][$j]['first_name']." ".
										$this->posts[$i]['likes'][$j]['last_name'].'</h4>'.'</br>'."\n";
						}
					} else echo '<h4>No one.</h4>'."\n";
					echo '<h2>Comments:</h2>'."\n";
					if($this->posts[$i]['comments']) {
						for($j = 0 ; $j < count($this->posts[$i]['comments']) ; ++$j) {
							echo '<div class="comments">'."\n";
							echo '<img src="'.URL.'/'.$this->posts[$i]['comments'][$j]['image_path'].'" class="img-circle">';
							echo '<h4>'.$this->posts[$i]['comments'][$j]['first_name']." ".
							 $this->posts[$i]['comments'][$j]['last_name'].': '.
							 $this->posts[$i]['comments'][$j]['comment_text'];
							 echo '</h4>'."\n";
							 echo "</div>\n";
						}

					} else echo '<h4>No comments on this post.</h4>'."\n";
					echo '<form class = "form-group" action="'.URL.'/comment/createComment/'.
							$this->posts[$i]['post_id'].'/'.
							$this->posts[$i]['user_id'];
					echo '" method = "post">'."\n";
					//add comment text and btn
					echo '<textarea name="comment_text"'. 
					 'placeholder="Write comment" rows="2" cols="70"'.
					 ' class="form-control"></textarea>'."\n";
					echo '<input type = "submit" class = "btn btn-default"'. 
						'value = "Add Comment">';
					echo "</div>"."\n";
			}
			?>
		</div>

