<div class="pendingapplications index">
	<h2><?php echo __('Pending Applications'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('application_Id'); ?></th>
			<th><?php echo $this->Paginator->sort('applicant_name'); ?></th>
			<th><?php echo $this->Paginator->sort('sex'); ?></th>
			<th><?php echo $this->Paginator->sort('father_full_name'); ?></th>
			<th><?php echo $this->Paginator->sort('mother_full_name'); ?></th>
			<th><?php echo $this->Paginator->sort('date_of_birth'); ?></th>
			<th><?php echo $this->Paginator->sort('division'); ?></th>
			<th><?php echo $this->Paginator->sort('district'); ?></th>
			<th><?php echo $this->Paginator->sort('birth_certificate_id'); ?></th>
			<th><?php echo $this->Paginator->sort('email'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($pendingapplications as $pendingapplication): ?>
	<tr>
		<td><?php echo h($pendingapplication['Pendingapplication']['application_Id']); ?>&nbsp;</td>
		<td><?php echo h($pendingapplication['Pendingapplication']['applicant_name']); ?>&nbsp;</td>
		<td><?php echo h($pendingapplication['Pendingapplication']['sex']); ?>&nbsp;</td>
		<td><?php echo h($pendingapplication['Pendingapplication']['father_full_name']); ?>&nbsp;</td>
		<td><?php echo h($pendingapplication['Pendingapplication']['mother_full_name']); ?>&nbsp;</td>
		<td><?php echo h($pendingapplication['Pendingapplication']['date_of_birth']); ?>&nbsp;</td>
		<td><?php echo h($pendingapplication['Pendingapplication']['division']); ?>&nbsp;</td>
		<td><?php echo h($pendingapplication['Pendingapplication']['district']); ?>&nbsp;</td>
		<td><?php echo h($pendingapplication['Pendingapplication']['birth_certificate_id']); ?>&nbsp;</td>
		<td><?php echo h($pendingapplication['Pendingapplication']['email']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $pendingapplication['Pendingapplication']['application_Id'])); ?>
			
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

