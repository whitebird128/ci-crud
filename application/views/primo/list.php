<section>
	<a href="<?php echo base_url('primo/add'); ?>"><h2>Add Primo</h2></a>
	<table id="primo_table" class="display" cellspacing="0" width="100%">
		<thead>
			<tr>
				<th>Name</th>
				<th>Description</th>
				<th>Action</th>
			</tr>
		</thead>
		<tfoot>
			<tr>
				<th>Name</th>
				<th>Description</th>
				<th>Action</th>
			</tr>
		</tfoot>
		<tbody>
			<?php if(sizeof($primo_list) > 0): ?>
			<?php 
			foreach ($primo_list as $primo) {
			?>
				<tr>
					<td><?php echo $primo->primo_name;?></td>
					<td><?php echo auto_link($primo->primo_des);?></td>
					<td>
						<a href="<?php echo base_url('primo/edit?primo_id=') . $primo->id;?>">Edit</a>&nbsp;
						<a href="<?php echo base_url('primo/delete?primo_id=') . $primo->id;?>" onclick="if(!confirm('Really?')) return false;">Delete</a>
					</td>
				</tr>
			<?php } ?>
			<?php endif; ?>
		</tbody>
	</table>
</section>
<script type="text/javascript" language="javascript" class="init">

	$(document).ready(function() {
		$('#primo_table').DataTable();
	} );

</script>