<div class="applications form">
<?php echo $this->Form->create('Application'); ?>
	<fieldset>
		<legend><?php echo __('Application For Birth Certificate'); ?></legend>
	<?php
		//echo $this->Form->input('application_id');
		echo $this->Form->input('applicant_name');
		echo $this->Form->input('sex',array('options'=>array('Male'=>'Male','Female'=>'Female')));
		echo $this->Form->input('father_name');
		echo $this->Form->input('mother_name');
		echo $this->Form->input('grand_father_name');
		echo $this->Form->input('mother_father_name',array('label'=>"Mother's Father Name"));
		echo $this->Form->input('date_of_birth');
		echo $this->Form->input('division');
		echo $this->Form->input('district');
		echo $this->Form->input('birth_certificate_id',array('type'=>'text','label'=>'<b>Birth certificate id</b>'));
		echo $this->Form->input('email');
		//echo $this->Form->input('status');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
