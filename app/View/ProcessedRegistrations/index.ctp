<div class="pendingRegistrations index">
	<h2><?php echo __('Processed Registrations'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('birth_certificate_id'); ?></th>
			<th><?php echo $this->Paginator->sort('name'); ?></th>
			<th><?php echo $this->Paginator->sort('date_of_birth'); ?></th>
			<th><?php echo $this->Paginator->sort('place_of_birth'); ?></th>
			<th><?php echo $this->Paginator->sort('sex'); ?></th>
			<th><?php echo $this->Paginator->sort('date_of_registration'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($processedRegistrations as $processedRegistration): ?>
	<tr>
		<td><?php echo h($processedRegistration['ProcessedRegistration']['birth_certificate_id']); ?>&nbsp;</td>
		<td><?php echo h($processedRegistration['ProcessedRegistration']['name']); ?>&nbsp;</td>
		<td><?php echo h($processedRegistration['ProcessedRegistration']['date_of_birth']); ?>&nbsp;</td>
		<td><?php echo h($processedRegistration['ProcessedRegistration']['place_of_birth']); ?>&nbsp;</td>
		<td><?php echo h($processedRegistration['ProcessedRegistration']['sex']); ?>&nbsp;</td>
		
		<td><?php echo h($processedRegistration['ProcessedRegistration']['date_of_registration']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $processedRegistration['ProcessedRegistration']['birth_certificate_id'])); ?>
			
		</td>
	</tr>
<?php endforeach; ?>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>
	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>

