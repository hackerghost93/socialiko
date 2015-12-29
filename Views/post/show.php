 <div class="post">
	<h1><?=$this->post[0]['caption']?></h1>
	<img src="<?=URL.'/'.$this->post[0]['image_path']?>">
	
	<h3>Comments</h3>
	<?php if($this->post[0]['comments'] != null):?>
		<?php foreach($this->post[0]['comments'] as $comment):?>
			<div class="comment"><h4><?= $comment ?> </h4></div>
		<?php endforeach ; ?>
	<?php else: ?>
		<h4>No Commets</h4>
	<?php endif; ?>
		
	<h3>Likes</h3>
	<?php if($this->post[0]['likes'] != null):?>
		<?php foreach($this->post[0]['likes'] as $like):?>
			<div class="like"><?=$like['first_name']." ".$like['last_name'] ?><h4>
		<?php endforeach ; ?>
	<?php else: ?>
		<h4>No Likes</h4>
	<?php endif; ?>
</div> 