<div class="people index">
	<h2><?php echo __('People'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('birth_certificate_id'); ?></th>
			<th><?php echo $this->Paginator->sort('mother_birth_certificate_id'); ?></th>
			<th><?php echo $this->Paginator->sort('father_birth_certificate_id'); ?></th>
			<th><?php echo $this->Paginator->sort('parent_married'); ?></th>
			<th><?php echo $this->Paginator->sort('name'); ?></th>
			<th><?php echo $this->Paginator->sort('date_of_birth'); ?></th>
			<th><?php echo $this->Paginator->sort('place_of_birth'); ?></th>
			<th><?php echo $this->Paginator->sort('sex'); ?></th>
			<th><?php echo $this->Paginator->sort('father_race'); ?></th>
			<th><?php echo $this->Paginator->sort('mother_race'); ?></th>
			<th><?php echo $this->Paginator->sort('mother_age'); ?></th>
			<th><?php echo $this->Paginator->sort('father_job'); ?></th>
			<th><?php echo $this->Paginator->sort('date_of_registration'); ?></th>
			<th><?php echo $this->Paginator->sort('registrar_id'); ?></th>
			<th><?php echo $this->Paginator->sort('informer_id'); ?></th>
			<th><?php echo $this->Paginator->sort('status'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($persons as $person): ?>
	<tr>
		<td><?php echo h($person['Person']['birth_certificate_id']); ?>&nbsp;</td>
		<td><?php echo h($person['Person']['mother_birth_certificate_id']); ?>&nbsp;</td>
		<td><?php echo h($person['Person']['father_birth_certificate_id']); ?>&nbsp;</td>
		<td><?php echo h($person['Person']['parent_married']); ?>&nbsp;</td>
		<td><?php echo h($person['Person']['name']); ?>&nbsp;</td>
		<td><?php echo h($person['Person']['date_of_birth']); ?>&nbsp;</td>
		<td><?php echo h($person['Person']['place_of_birth']); ?>&nbsp;</td>
		<td><?php echo h($person['Person']['sex']); ?>&nbsp;</td>
		<td><?php echo h($person['Person']['father_race']); ?>&nbsp;</td>
		<td><?php echo h($person['Person']['mother_race']); ?>&nbsp;</td>
		<td><?php echo h($person['Person']['mother_age']); ?>&nbsp;</td>
		<td><?php echo h($person['Person']['father_job']); ?>&nbsp;</td>
		<td><?php echo h($person['Person']['date_of_registration']); ?>&nbsp;</td>
		<td><?php echo h($person['Person']['registrar_id']); ?>&nbsp;</td>
		<td><?php echo h($person['Person']['informer_id']); ?>&nbsp;</td>
		<td><?php echo h($person['Person']['status']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $person['Person']['birth_certificate_id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $person['Person']['birth_certificate_id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $person['Person']['birth_certificate_id']), null, __('Are you sure you want to delete # %s?', $person['Person']['birth_certificate_id'])); ?>
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
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Person'), array('action' => 'add')); ?></li>
	</ul>
</div>
