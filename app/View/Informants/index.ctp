

<div class="informants index">
	
	<?php echo $this->Form->create('Filter');?>
	<table>
	<tr>
	<td width='180px'>
	<?php echo $this->Form->input('District',array('label'=>'<B>District</B>','align'=>'left','options'=>array('Ampara'=>'Ampara','Anuradhapura'=>'Anuradhapura','Badulla'=>'Badulla','Batticaloa'=>'Batticaloa',
		'Colombo'=>'Colombo','Galle'=>'Galle','Gampaha'=>'Gampaha','Hambantota'=>'Hambantota','Jaffna'=>'Jaffna','Kalutara'=>'Kalutara',
		'Kandy'=>'Kandy','Kegalle'=>'Kegalle','Kilinochchi'=>'Kilinochchi','Kurunegala'=>'Kurunegala','Mannar'=>'Mannar',
		'Matale'=>'Matale','Matara'=>'Matara','Moneragala'=>'Moneragala','Mullaitivu'=>'Mullaitivu','Nuwara Eliya'=>'Nuwara Eliya',
		'Polonnaruwa'=>'Polonnaruwa','Puttalam'=>'Puttalam','Ratnapura'=>'Ratnapura','Trincomalee'=>'Trincomalee','Vavuniya'=>'Vavuniya')));?>
	</td>
	<td>
	<?php echo $this->Form->end(__('Filter'));?>
	</td>

	</tr>
	</table>
	
	<h2><?php echo __('Informants'); ?></h2>
	
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo 'Select' ?></th>
			<th><?php echo $this->Paginator->sort('informer_id'); ?></th>
			<th><?php echo $this->Paginator->sort('first_name'); ?></th>
			<th><?php echo $this->Paginator->sort('last_name'); ?></th>
			<th><?php echo $this->Paginator->sort('street_no'); ?></th>
			<th><?php echo $this->Paginator->sort('street_name'); ?></th>
			<th><?php echo $this->Paginator->sort('district'); ?></th>
			<th><?php echo $this->Paginator->sort('designation'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($informants as $informant): ?>
	<tr>
		<td><?php echo $this->Form->input('radioField', array(
			'div' => true,
			'label' => true,
			'type' => 'radio',
			'legend' => false,
			'required'=>'required',
			'options' => array($informant['Informant']['informer_id'] => '')
			)); 
			echo $this->Form->error('radioField');
			?></td>
		<td><?php echo h($informant['Informant']['informer_id']); ?>&nbsp;</td>
		<td><?php echo h($informant['Informant']['first_name']); ?>&nbsp;</td>
		<td><?php echo h($informant['Informant']['last_name']); ?>&nbsp;</td>
		<td><?php echo h($informant['Informant']['street_no']); ?>&nbsp;</td>
		<td><?php echo h($informant['Informant']['street_name']); ?>&nbsp;</td>
		<td><?php echo h($informant['Informant']['city']); ?>&nbsp;</td>
		<td><?php echo h($informant['Informant']['designation']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $informant['Informant']['informer_id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $informant['Informant']['informer_id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $informant['Informant']['informer_id']), null, __('Are you sure you want to delete # %s?', $informant['Informant']['informer_id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
	<p>
	<?php
	echo $this->Form->end(__('Submit')); 
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
		<li><?php echo $this->Html->link(__('Create New (if not exist)'), array('action' => 'add')); ?></li>
	</ul>
</div>
