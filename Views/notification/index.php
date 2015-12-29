<div class="notification">
<?php if($this->notifications):?>
<?php foreach($this->notifications as $not): ?>
	<a href="<?=URL?>/post/show/<?=$not['post_id']?>">
	<?php if($not['notification_type'] == "like"): ?>
		<h3><?= $not['first_name']." ".$not['last_name']?> liked your post</h3>
	<?php elseif($not['notification_type'] == "comment"): ?>
		<h3><?= $not['first_name']." ".$not['last_name']?> commeted your post</h3>
	<?php endif; ?>
	</a>
<?php endforeach; ?>
<?php else:?>
	<h1>You have no new notifications</h1>
<?php endif;?>
</div>