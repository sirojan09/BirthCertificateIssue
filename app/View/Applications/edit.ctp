<div class="applications form">
<?php echo $this->Form->create('Application'); ?>
	<fieldset>
		<legend><?php echo __('Edit Application'); ?></legend>
	<?php
		echo $this->Form->input('application_id');
		echo $this->Form->input('applicant_name');
		echo $this->Form->input('father_name');
		echo $this->Form->input('mother_name');
		echo $this->Form->input('grand_father_name');
		echo $this->Form->input('date_of_birth');
		echo $this->Form->input('division');
		echo $this->Form->input('district');
		echo $this->Form->input('birth_certificate_id');
		echo $this->Form->input('email');
		echo $this->Form->input('status');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Application.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Application.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Applications'), array('action' => 'index')); ?></li>
	</ul>
</div>
