	<h1>Your Friends</h1>
	<hr/>
		<?php if(is_null($this->friends)): ?>
			<h3>No friends exist</h3>
		<?php else: ?>
			<?php foreach ($this->friends as $friend): ?>
				<div class="user">
				<a href="<?=URL?>/post/index/<?=$friend['user_id']?>">
					<h2><?= $friend['first_name']." ".$friend['last_name']?></h2>
				</a>
				</div>
			<?php endforeach; ?>
		<?php endif; ?>