<h1>Users</h1>
<hr/>
<?php if(is_null($this->users)): ?>
			<h3>No Users were found</h3>
<?php else: ?>
	<?php foreach ($this->users as $user): ?>
		<a href="<?=URL."/post/index/".$user['user_id']?>">
		<h2><?=$user['first_name']." ".$user['last_name']?></h2>
		</a>
	<?php endforeach; ?>
<?php endif; ?>
<hr/>
<h1>Posts</h1>
<hr/>
<div class="smiles">
	<?php if(is_null($this->posts)): ?>
				<h3>No Posts were found</h3>
	<?php else: ?>
		<?php foreach ($this->posts as $post): ?>
			<h2><?=$post['caption']?></h2>
		<?php endforeach; ?>
	<?php endif; ?>
</div>
