<table>
	<tr>
		<th>Name</th>
		<th>Adress</th>
	</tr>

	<?php
	if(count($events)>0){ 
		foreach($enents as $event){ ?>	
		<tr>
			<td><?php echo $event['event_name'];?></td>
			<td><?php echo $event['adress'];?></td>
		</tr>
	<?php 
		}
	} ?>
</table>