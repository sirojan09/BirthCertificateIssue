<div class="pendingapplications form">
<?php echo $this->Form->create('Pendingapplication'); ?>
	<fieldset>
		<legend><?php echo __('Add Pendingapplication'); ?></legend>
	<?php
		echo $this->Form->input('application_Id');
		echo $this->Form->input('applicant_name');
		echo $this->Form->input('sex',array('options'=>array('Male'=>'Male','Female'=>'Female')));
		echo $this->Form->input('father_full_name');
		echo $this->Form->input('mother_full_name');
		echo $this->Form->input('date_of_birth');
		echo $this->Form->input('division');
		echo $this->Form->input('district');
		echo $this->Form->input('birth_certificate_id');
		echo $this->Form->input('email');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Pendingapplications'), array('action' => 'index')); ?></li>
	</ul>
</div>
