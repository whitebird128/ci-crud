<section>
	<a href="<?php echo base_url('primo'); ?>"><h2>View List</h2></a>
	<form action="<?php echo base_url('primo/edit_primo');?>" method="post">
		<input type="hidden" name="primo_id" value="<?php echo $primo->id;?>">
		<label>Primo Name</label>
		<input type="text" name="primo_name" value="<?php echo $primo->primo_name;?>" />
<br /><br />
		<label>Primo Description</label>
		<textarea name="primo_des"><?php echo $primo->primo_des;?></textarea>
<br /><br />
		<input type="submit" value="Update" />

	</form>
</section>
