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

<?php if($this->posts != null):?>
<?php foreach ($this->posts as $post): ?>
<div class="post"> <div class="smiles">
	<div class="smalluser">
	<img src="<?=URL.'/'.$post['path']?>" class="img-circle" id="username">
	<h3><?=$post['first_name'].' '.$post['last_name']?></h3>
	</div>
	<h4><?=$post['caption']?></h4>
	<?php if(!empty($post['image_path'])):?>
	<img src="<?=URL.'/'.$post['image_path']?>">
	<?php endif;?>
	<?php if(!empty($post['comments'])):?>
		<?php foreach ($post['comments'] as $comment): ?>
			<div class="comments">
			<div class="smalluser">
				<img src="<?=URL.'/'.$comment['image_path']?>" class="img-circle">
				<h4><?=$comment['first_name']." ".$comment['last_name']?></h4>
			</div>
				
					<h4><?=$comment['comment_text']?></h4>
				
			</div>
		<?php endforeach; ?>
	<?php else: ?>
		<h4>No comments</h4>	
	<?php endif;?>
	<form action="<?=URL.'/comment/createComment/'.$post['post_id'].'/'.$post['user_id']?>" method="post">
			<textarea rows="2" cols="70" placeholder="Write Comment" class="form-control" name="comment_text"></textarea>
			<button type="submit" class="btn btn-default">Add Comment</button>
	</form>
	<?php if(!empty($post['likes'])):?>
		<?php foreach ($post['likes'] as $like): ?>
			<div class="smalluser">
			<img src="<?=URL.'/'.$like['image_path']?>" class="img-circle">
			<h4><?=$like['first_name']." ".$like['last_name']?></h4>
			</div>
		<?php endforeach; ?>
	<?php else:?>
		<h4>No likes</h4>
	<?php endif ;?>
	<form action="<?=URL.'/like/createLike/'.$post['post_id'].'/'.$post['user_id']?>">
		<input type="submit" class="btn btn-default" value="Like" >
	</form>

</div></div>
<?php endforeach; ?>
<?php endif; ?>