<div class="people form">
<?php echo $this->Form->create('Person'); ?>
	<fieldset>
		<legend><?php echo __('Edit Person'); ?></legend>
	<?php
		echo $this->Form->input('birth_certificate_id');
		echo $this->Form->input('mother_birth_certificate_id');
		echo $this->Form->input('father_birth_certificate_id');
		echo $this->Form->input('parent_married');
		echo $this->Form->input('name');
		echo $this->Form->input('date_of_birth');
		echo $this->Form->input('place_of_birth');
		echo $this->Form->input('sex');
		echo $this->Form->input('father_race');
		echo $this->Form->input('mother_race');
		echo $this->Form->input('mother_age');
		echo $this->Form->input('father_job');
		echo $this->Form->input('date_of_registration');
		echo $this->Form->input('registrar_id');
		echo $this->Form->input('informer_id');
		echo $this->Form->input('status');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Person.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Person.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List People'), array('action' => 'index')); ?></li>
	</ul>
</div>
