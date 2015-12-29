<?php if($this->requests != null):?>
	<?php foreach($this->requests as $request): ?>
		<div class="friend_request_btns">
			<a href="<?=URL?>/post/index/<?=$request['user_id']?>">
				<h3><?=$request['first_name']." ".$request['last_name']?></h3>
				<img src="<?=URL.'/'.$request['image_path']?>" class="img-circle">
			</a>
			<form action="<?=URL?>/friend_request/accept/<?=$request['user_id']?>"
				method="post">
				<input value="Confirm" type="submit" class="btn btn-default">
			</form>
			<form action="<?=URL?>/friend_request/ignore/<?=$request['user_id']?>"
				method="post">
				<input value="Delete Request" type="submit" class="btn btn-default">
			</form>
		</div>
	<?php endforeach; ?>
<?php else: ?>
	<h3>No friend requests</h3>
<?php endif; ?>