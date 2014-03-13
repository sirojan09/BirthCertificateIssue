<div class="applications index">
	<h2><?php echo __('Applications'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php //echo $this->Paginator->sort('application_id'); ?></th>
			<th><?php echo $this->Paginator->sort('applicant_name'); ?></th>
			<th><?php echo $this->Paginator->sort('sex'); ?></th>
			<th><?php echo $this->Paginator->sort('father_name'); ?></th>
			<th><?php echo $this->Paginator->sort('mother_name'); ?></th>
			<th><?php echo $this->Paginator->sort('grand_father_name'); ?></th>
			<th><?php echo $this->Paginator->sort('mother_father_name'); ?></th>
			<th><?php echo $this->Paginator->sort('date_of_birth'); ?></th>
			<th><?php echo $this->Paginator->sort('division'); ?></th>
			<th><?php echo $this->Paginator->sort('district'); ?></th>
			<th><?php echo $this->Paginator->sort('birth_certificate_id'); ?></th>
			<th><?php echo $this->Paginator->sort('email'); ?></th>
			<th><?php //echo $this->Paginator->sort('status'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($applications as $application): ?>
	<tr>
		<td><?php //echo h($application['Application']['application_id']); ?>&nbsp;</td>
		<td><?php echo h($application['Application']['applicant_name']); ?>&nbsp;</td>
		<td><?php echo h($application['Application']['sex']); ?>&nbsp;</td>
		<td><?php echo h($application['Application']['father_name']); ?>&nbsp;</td>
		<td><?php echo h($application['Application']['mother_name']); ?>&nbsp;</td>
		<td><?php echo h($application['Application']['grand_father_name']); ?>&nbsp;</td>
		<td><?php echo h($application['Application']['mother_father_name']); ?>&nbsp;</td>
		<td><?php echo h($application['Application']['date_of_birth']); ?>&nbsp;</td>
		<td><?php echo h($application['Application']['division']); ?>&nbsp;</td>
		<td><?php echo h($application['Application']['district']); ?>&nbsp;</td>
		<td><?php echo h($application['Application']['birth_certificate_id']); ?>&nbsp;</td>
		<td><?php echo h($application['Application']['email']); ?>&nbsp;</td>
		<td><?php //echo h($application['Application']['status']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $application['Application']['application_id'])); ?>
			
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

