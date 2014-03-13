<div class="informants form">
<?php echo $this->Form->create('Informant'); ?>
	<fieldset>
		<legend><?php echo __('Add Informant'); ?></legend>
	<?php
		//echo $this->Form->input('informer_id',array('type'=>'hidden'));
		//echo $this->Form->input('person',array('type'=>'hidden','value'=>$id));
		echo $this->Form->input('first_name');
		echo $this->Form->input('last_name');
		echo $this->Form->input('street_no');
		echo $this->Form->input('street_name');
		echo $this->Form->input('city',array('label'=>'District','options'=>array('Ampara'=>'Ampara','Anuradhapura'=>'Anuradhapura','Badulla'=>'Badulla','Batticaloa'=>'Batticaloa',
		'Colombo'=>'Colombo','Galle'=>'Galle','Gampaha'=>'Gampaha','Hambantota'=>'Hambantota','Jaffna'=>'Jaffna','Kalutara'=>'Kalutara',
		'Kandy'=>'Kandy','Kegalle'=>'Kegalle','Kilinochchi'=>'Kilinochchi','Kurunegala'=>'Kurunegala','Mannar'=>'Mannar',
		'Matale'=>'Matale','Matara'=>'Matara','Moneragala'=>'Moneragala','Mullaitivu'=>'Mullaitivu','Nuwara Eliya'=>'Nuwara Eliya',
		'Polonnaruwa'=>'Polonnaruwa','Puttalam'=>'Puttalam','Ratnapura'=>'Ratnapura','Trincomalee'=>'Trincomalee','Vavuniya'=>'Vavuniya')));
		echo $this->Form->input('designation');
		echo $this->Form->input('home_telephone',array('label'=>'<b>Home Telephone</b>'));
		echo $this->Form->input('office_telephone',array('label'=>'<b>Office Telephone</b>'));
		echo $this->Form->input('mobile',array('label'=>'<b>Mobile</b>'));
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Informants'), array('action' => 'index')); ?></li>
	</ul>
</div>
