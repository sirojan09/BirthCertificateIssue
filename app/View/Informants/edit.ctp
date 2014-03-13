<div class="informants form">
<?php echo $this->Form->create('Informant'); ?>
	<fieldset>
		<legend><?php echo __('Edit Informant'); ?></legend>
	<?php
		echo $this->Form->input('informer_id');
		echo $this->Form->input('first_name');
		echo $this->Form->input('last_name');
		echo $this->Form->input('street_no');
		echo $this->Form->input('street_name');
		echo $this->Form->input('city');
		echo $this->Form->input('designation');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Informant.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Informant.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Informants'), array('action' => 'index')); ?></li>
	</ul>
</div>
