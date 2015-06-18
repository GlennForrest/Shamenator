<div class="form-group">
	<label>Username</label>
	<input type="text" name="user[username]" <? if($readonly) echo 'READONLY'; ?> value="<?= $user['username'] ?>" class="form-control" placeholder="Johnny">
</div>
<div class="form-group">
	<label>Password</label>
	<input type="text" name="user[password]" <? if($readonly) echo 'READONLY'; ?> value="<?= $user['password'] ?>" class="form-control" placeholder="******">
</div>