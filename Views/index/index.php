<h1> This is index.php</h1>


<form action="<?=URL?>/post/create" method="post">
	<h1>
		New Post
	</h1>
	<hr/>
	<textarea name="caption" rows="7" cols="70"></textarea>
	<br />
	<label>private</label>
	<input type="radio" value="private" name="state"/>
	<label>public</label>
	<input type="radio" value="public" name="state"/>
	<br/>
	<input type="submit" value="Create post"/>
</form>



