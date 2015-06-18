<div class="form-group">
	<label>Website ID</label>
	<input type="text" name="shame[website_id]" <? if($readonly) echo 'READONLY'; ?> value="<?= $shame['website_id'] ?>" class="form-control" placeholder="123">
</div>
<div class="form-group">
	<label>Shame</label>
	<input type="text" name="shame[shame]" <? if($readonly) echo 'READONLY'; ?> value="<?= $shame['shame'] ?>" class="form-control" placeholder="shame">
</div>
<div class="form-group">
	<label>User ID</label>
	<input type="text" name="shame[user_id]" <? if($readonly) echo 'READONLY'; ?> value="<?= $shame['user_id'] ?>" class="form-control" placeholder="user">
</div>
<div class="form-group">
	<label>Notes</label>
	<input type="text" name="shame[notes]" <? if($readonly) echo 'READONLY'; ?> value="<?= $shame['notes'] ?>" class="form-control" placeholder="shame notes">
</div>