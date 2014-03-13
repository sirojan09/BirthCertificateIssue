<div class="pendingRegistrations form">
<?php echo $this->Form->create('PendingRegistration'); ?>
	<fieldset>
		<legend><?php echo __('Edit Pending Registration'); ?></legend>
	<?php
		echo $this->Form->input('birth_certificate_id',array('type'=>'text'));
		echo $this->Form->input('name');
		echo $this->Form->input('date_of_birth');
		echo $this->Form->input('place_of_birth');
		echo $this->Form->input('sex');
		echo $this->Form->input('father_full_name');
		echo $this->Form->input('father_date_of_birth');
		echo $this->Form->input('father_place_of_birth');
		echo $this->Form->input('father_race');
		echo $this->Form->input('father_job');
		echo $this->Form->input('mother_full_name');
		echo $this->Form->input('mother_date_of_birth');
		echo $this->Form->input('mother_place_of_birth');
		echo $this->Form->input('mother_race');
		echo $this->Form->input('mother_age');
		echo $this->Form->input('parent_married');
		echo $this->Form->input('grandfather_full_name');
		echo $this->Form->input('grandfather_date_of_birth');
		echo $this->Form->input('grandfather_place_of_birth');
		echo $this->Form->input('informant_full_name');
		echo $this->Form->input('informant_street_no');
		echo $this->Form->input('informant_street');
		echo $this->Form->input('Informant_city');
		echo $this->Form->input('informant_designation');
		echo $this->Form->input('date_of_registration');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('PendingRegistration.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('PendingRegistration.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Pending Registrations'), array('action' => 'index')); ?></li>
	</ul>
</div>
