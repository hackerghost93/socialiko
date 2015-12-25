<h1>Users</h1>
<hr/>
<?php foreach ($this->users as $user): ?>
	<a href="<?=URL."/post/index/".$user['user_id']?>">
	<h2><?=$user['first_name']." ".$user['last_name']?></h2>
	</a>
<?php endforeach; ?>

<hr/>
<h1>Posts</h1>
<hr/>
<?php foreach ($this->posts as $post): ?>
	<h2><?=$post['caption']?></h2>
<?php endforeach; ?>
