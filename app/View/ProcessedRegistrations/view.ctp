<div class="ProcessedRegistrations view">
<h2><?php echo __('Submitted Details'); ?></h2>
	<dl>
		<dt><?php echo __('Birth Certificate Id'); ?></dt>
		<dd>
			<?php echo h($submitDetials['Pendingapplication']['birth_certificate_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($submitDetials['Pendingapplication']['applicant_name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Date Of Birth'); ?></dt>
		<dd>
			<?php echo h($submitDetials['Pendingapplication']['date_of_birth']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Sex'); ?></dt>
		<dd>
			<?php echo h($submitDetials['Pendingapplication']['sex']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Father Full Name'); ?></dt>
		<dd>
			<?php echo h($submitDetials['Pendingapplication']['father_full_name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Mother Full Name'); ?></dt>
		<dd>
			<?php echo h($submitDetials['Pendingapplication']['mother_full_name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Division'); ?></dt>
		<dd>
			<?php echo h($submitDetials['Pendingapplication']['division']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('District'); ?></dt>
		<dd>
			<?php echo h($submitDetials['Pendingapplication']['district']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Email'); ?></dt>
		<dd>
			<?php echo h($submitDetials['Pendingapplication']['email']); ?>
			&nbsp;
		</dd>
		
	
		
	</dl>
</div>












<div class="ProcessedRegistrations view">
<h2><?php echo __('Existing Details'); ?></h2>
<?php if($processedRegistration!=null):?>
	<dl>
		<dt><?php echo __('Birth Certificate Id'); ?></dt>
		<dd>
			<?php echo h($processedRegistration['ProcessedRegistration']['birth_certificate_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($processedRegistration['ProcessedRegistration']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Date Of Birth'); ?></dt>
		<dd>
			<?php echo h($processedRegistration['ProcessedRegistration']['date_of_birth']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Place Of Birth'); ?></dt>
		<dd>
			<?php echo h($processedRegistration['ProcessedRegistration']['place_of_birth']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Sex'); ?></dt>
		<dd>
			<?php echo h($processedRegistration['ProcessedRegistration']['sex']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Father Full Name'); ?></dt>
		<dd>
			<?php echo h($processedRegistration['ProcessedRegistration']['father_full_name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Father Date Of Birth'); ?></dt>
		<dd>
			<?php echo h($processedRegistration['ProcessedRegistration']['father_date_of_birth']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Father Place Of Birth'); ?></dt>
		<dd>
			<?php echo h($processedRegistration['ProcessedRegistration']['father_place_of_birth']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Father Race'); ?></dt>
		<dd>
			<?php echo h($processedRegistration['ProcessedRegistration']['father_race']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Father Job'); ?></dt>
		<dd>
			<?php echo h($processedRegistration['ProcessedRegistration']['father_job']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Mother Full Name'); ?></dt>
		<dd>
			<?php echo h($processedRegistration['ProcessedRegistration']['mother_full_name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Mother Date Of Birth'); ?></dt>
		<dd>
			<?php echo h($processedRegistration['ProcessedRegistration']['mother_date_of_birth']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Mother Place Of Birth'); ?></dt>
		<dd>
			<?php echo h($processedRegistration['ProcessedRegistration']['mother_place_of_birth']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Mother Race'); ?></dt>
		<dd>
			<?php echo h($processedRegistration['ProcessedRegistration']['mother_race']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Mother Age'); ?></dt>
		<dd>
			<?php echo h($processedRegistration['ProcessedRegistration']['mother_age']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Parent Married'); ?></dt>
		<dd>
			<?php echo h($processedRegistration['ProcessedRegistration']['parent_married']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Grandfather Full Name'); ?></dt>
		<dd>
			<?php echo h($processedRegistration['ProcessedRegistration']['grandfather_full_name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Grandfather Date Of Birth'); ?></dt>
		<dd>
			<?php echo h($processedRegistration['ProcessedRegistration']['grandfather_date_of_birth']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Grandfather Place Of Birth'); ?></dt>
		<dd>
			<?php echo h($processedRegistration['ProcessedRegistration']['grandfather_place_of_birth']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Informant Full Name'); ?></dt>
		<dd>
			<?php echo h($processedRegistration['ProcessedRegistration']['informant_full_name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Informant Street No'); ?></dt>
		<dd>
			<?php echo h($processedRegistration['ProcessedRegistration']['informant_street_no']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Informant Street'); ?></dt>
		<dd>
			<?php echo h($processedRegistration['ProcessedRegistration']['informant_street']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Informant City'); ?></dt>
		<dd>
			<?php echo h($processedRegistration['ProcessedRegistration']['Informant_city']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Informant Designation'); ?></dt>
		<dd>
			<?php echo h($processedRegistration['ProcessedRegistration']['informant_designation']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Date Of Registration'); ?></dt>
		<dd>
			<?php echo h($processedRegistration['ProcessedRegistration']['date_of_registration']); ?>
			&nbsp;
		</dd>
	</dl>
	<?php else:?>
	<?php echo 'No Such Record Found.';?>
	<?php  endif;?>

	<table>
		<tr>
		<td>
			<?php echo $this->Html->link(__('Process & SendMail'), array('controller' => 'Applications','action' => 'process',$submitDetials['Pendingapplication']['application_Id']),array('class'=>'greenbutton')); ?></td><td>
			<?php echo $this->Html->link(__('Reject & Send Mail'), array('controller' => 'Applications','action' => 'sendMail',$submitDetials['Pendingapplication']['application_Id']),array('class'=>'redbutton')); ?></td>
			</tr>
	</table>
</div>