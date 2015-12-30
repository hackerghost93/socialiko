<?php if($this->posts != null):?>
<?php foreach ($this->posts as $post): ?>
<div class="post"> 
	<div class="smalluser">
	<img src="<?=URL.'/'.$post['path']?>" class="img-circle" id="username">
	<h3><?=$post['first_name'].' '.$post['last_name']?></h3>
	</div>
	<img src="<?=URL.'/'.$post['image_path']?>">
	<?php if(!empty($post['comments'])):?>
		<?php foreach ($post['comments'] as $comment): ?>
			<div class="comments">
			<div class="smalluser">
				<img src="<?=URL.'/'.$comment['image_path']?>" class="img-circle">
				<h4><?=$comment['first_name']." ".$comment['last_name']?></h4>
			</div>
				<div class="smiles">
					<h4><?=$comment['comment_text']?></h4>
				</div>
			</div>
		<?php endforeach; ?>
	<?php else: ?>
		<h4>No comments</h4>	
	<?php endif;?>
	<form action="<?=URL.'/comment/createComment/'.$post['post_id']?>">
			<textarea rows="2" cols="70" placeholder="Write Comment" class="form-control"></textarea>
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
	<form action="<?=URL.'/comment/createLike/'.$post['post_id']?>">
		<input type="submit" class="btn btn-default" value="Like">
	</form>

</div>
<?php endforeach; ?>
<?php endif; ?>