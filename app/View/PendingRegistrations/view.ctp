

<div class="pendingRegistrations view">
<h2><?php echo __('Pending Registration'); ?></h2>
	<dl>
		<dt><?php echo __('Birth Certificate Id'); ?></dt>
		<dd>
			<?php echo h($pendingRegistration['PendingRegistration']['birth_certificate_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($pendingRegistration['PendingRegistration']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Date Of Birth'); ?></dt>
		<dd>
			<?php echo h($pendingRegistration['PendingRegistration']['date_of_birth']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Place Of Birth'); ?></dt>
		<dd>
			<?php echo h($pendingRegistration['PendingRegistration']['place_of_birth']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Sex'); ?></dt>
		<dd>
			<?php echo h($pendingRegistration['PendingRegistration']['sex']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Father Full Name'); ?></dt>
		<dd>
			<?php echo h($pendingRegistration['PendingRegistration']['father_full_name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Father Date Of Birth'); ?></dt>
		<dd>
			<?php echo h($pendingRegistration['PendingRegistration']['father_date_of_birth']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Father Place Of Birth'); ?></dt>
		<dd>
			<?php echo h($pendingRegistration['PendingRegistration']['father_place_of_birth']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Father Race'); ?></dt>
		<dd>
			<?php echo h($pendingRegistration['PendingRegistration']['father_race']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Father Job'); ?></dt>
		<dd>
			<?php echo h($pendingRegistration['PendingRegistration']['father_job']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Mother Full Name'); ?></dt>
		<dd>
			<?php echo h($pendingRegistration['PendingRegistration']['mother_full_name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Mother Date Of Birth'); ?></dt>
		<dd>
			<?php echo h($pendingRegistration['PendingRegistration']['mother_date_of_birth']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Mother Place Of Birth'); ?></dt>
		<dd>
			<?php echo h($pendingRegistration['PendingRegistration']['mother_place_of_birth']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Mother Race'); ?></dt>
		<dd>
			<?php echo h($pendingRegistration['PendingRegistration']['mother_race']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Mother Age'); ?></dt>
		<dd>
			<?php echo h($pendingRegistration['PendingRegistration']['mother_age']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Parent Married'); ?></dt>
		<dd>
			<?php echo h($pendingRegistration['PendingRegistration']['parent_married']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Grandfather Full Name'); ?></dt>
		<dd>
			<?php echo h($pendingRegistration['PendingRegistration']['grandfather_full_name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Grandfather Date Of Birth'); ?></dt>
		<dd>
			<?php echo h($pendingRegistration['PendingRegistration']['grandfather_date_of_birth']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Grandfather Place Of Birth'); ?></dt>
		<dd>
			<?php echo h($pendingRegistration['PendingRegistration']['grandfather_place_of_birth']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Informant Full Name'); ?></dt>
		<dd>
			<?php echo h($pendingRegistration['PendingRegistration']['informant_full_name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Informant Street No'); ?></dt>
		<dd>
			<?php echo h($pendingRegistration['PendingRegistration']['informant_street_no']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Informant Street'); ?></dt>
		<dd>
			<?php echo h($pendingRegistration['PendingRegistration']['informant_street']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Informant City'); ?></dt>
		<dd>
			<?php echo h($pendingRegistration['PendingRegistration']['Informant_city']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Informant Designation'); ?></dt>
		<dd>
			<?php echo h($pendingRegistration['PendingRegistration']['informant_designation']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Informant Home Phone'); ?></dt>
		<dd>
			<?php echo h($pendingRegistration['PendingRegistration']['informant_home_phone']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Informant Office Phone'); ?></dt>
		<dd>
			<?php echo h($pendingRegistration['PendingRegistration']['informant_office_phone']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Informant Mobile Phone'); ?></dt>
		<dd>
			<?php echo h($pendingRegistration['PendingRegistration']['informant_mobile_phone']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Date Of Registration'); ?></dt>
		<dd>
			<?php echo h($pendingRegistration['PendingRegistration']['date_of_registration']); ?>
			&nbsp;
		</dd>
	</dl>
	
	
	<table>
	<tr>
	<td width=180px align=right>
	<?php echo $this->Html->link(__('Approve'), array('controller' => 'Persons','action' => 'approve',$pendingRegistration['PendingRegistration']['birth_certificate_id']),array('class'=>'greenbutton')); ?>
	<?php //echo '<a href="/cake/persons/approve/'.$pendingRegistration['PendingRegistration']['birth_certificate_id']. '" class="greenbutton">Approve</a>';	?>
	</td><td width=180px>
	<?php echo $this->Html->link(__('Reject'), array('controller' => 'Persons','action' => 'reject', $pendingRegistration['PendingRegistration']['birth_certificate_id']),array('class'=>'redbutton')); ?>
	</td>
	</tr>
	
	</div>
</div>

