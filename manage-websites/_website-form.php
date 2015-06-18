<div class="form-group">
	<label>User Id</label>
	<input type="text" name="website[user_id]" <? if($readonly) echo 'READONLY'; ?> value="<?= $website['user_id'] ?>" class="form-control" placeholder="1230">
</div>
<div class="form-group">
	<label>URL</label>
	<input type="text" name="website[website]" <? if($readonly) echo 'READONLY'; ?> value="<?= $website['website'] ?>" class="form-control" placeholder="www.google.com">
</div>

