<section>
	<a href="<?php echo base_url('primo'); ?>"><h2>View List</h2></a>
	<form action="<?php echo base_url('primo/add_primo');?>" method="post">
		<label>Primo Name</label>
		<input type="text" name="primo_name" />
<br /><br />
		<label>Primo Description</label>
		<textarea name="primo_des"></textarea>
<br /><br />
		<input type="submit" value="Add" />

	</form>
</section>
