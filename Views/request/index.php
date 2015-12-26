<?php if($this->requests != null):?>
	<?php foreach($this->requests as $request): ?>
		<div class="users">
			<a href="<?=URL?>/post/index/<?=$request['user_id']?>">
				<h3><?=$request['first_name']." ".$request['last_name']?></h3>
				<img src="<?=URL.'/'.$request['image_path']?>">
			</a>
			<form action="<?=URL?>/friend_request/accept/<?=$request['user_id']?>"
				method="post">
				<input type="submit" class="btn btn-default">
			</form>
		</div>
	<?php endforeach; ?>
<?php else: ?>
	<h3>No friend requests</h3>
<?php endif; ?>