<div class="people form">
<?php echo $this->Form->create('Person'); ?>
	<fieldset>
		<legend><?php echo __('Add Person'); ?></legend>
	<?php
		echo $this->Form->input('birth_certificate_id',array('type'=>'hidden'));
		echo $this->Form->input('mother_birth_certificate_id',array('type'=>'number','label'=>'<b>Mother birth certificate id</b>'));
		echo $this->Form->input('father_birth_certificate_id',array('type'=>'number','label'=>'<b>Father birth certificate id</b>'));
		echo $this->Form->input('parent_married',array('options'=>array('Yes'=>'Yes','No'=>'No')));
		echo $this->Form->input('name');
		echo $this->Form->input('date_of_birth',array(
    'label' => 'Date of birth', 
    'dateFormat' => 'DMY',
    'minYear' => date('Y') - 100,
    'maxYear' => date('Y') ));
		echo $this->Form->input('place_of_birth');
		echo $this->Form->input('sex',array('options'=>array('Male'=>'Male','Female'=>'Female')));
		echo $this->Form->input('father_race',array('label'=>'Father\'s Race','options'=>array('Sinhalese'=>'Sinhalese','SriLankan Tamils'=>'SriLankan Tamils','Indian Tamils'=>'Indian Tamils','Muslims'=>'Muslims','Burgers'=>'Burgers','Veddah'=>'Veddah')));
		echo $this->Form->input('mother_race',array('label'=>'Mother\'s Race','options'=>array('Sinhalese'=>'Sinhalese','SriLankan Tamils'=>'SriLankan Tamils','Indian Tamils'=>'Indian Tamils','Muslims'=>'Muslims','Burgers'=>'Burgers','Veddah'=>'Veddah')));
		echo $this->Form->input('mother_age');
		echo $this->Form->input('father_job');
		echo $this->Form->input('date_of_registration',array('type'=>'hidden','value'=>date('Y-m-d')));
		echo $this->Form->input('registrar_id',array('type'=>'hidden'));
		echo $this->Form->input('informer_id',array('type'=>'hidden'));
		echo $this->Form->input('status' , array('type'=>'hidden','value'=>'Pending'));
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>

</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List People'), array('action' => 'index')); ?></li>
	</ul>
</div>
