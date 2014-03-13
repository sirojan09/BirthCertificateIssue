<div class="applications view">
<h2><?php echo __('Application'); ?></h2>
	<dl>
		<dt><?php echo __('Application Id'); ?></dt>
		<dd>
			<?php echo h($application['Application']['application_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Applicant Name'); ?></dt>
		<dd>
			<?php echo h($application['Application']['applicant_name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Father Name'); ?></dt>
		<dd>
			<?php echo h($application['Application']['father_name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Mother Name'); ?></dt>
		<dd>
			<?php echo h($application['Application']['mother_name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Grand Father Name'); ?></dt>
		<dd>
			<?php echo h($application['Application']['grand_father_name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Date Of Birth'); ?></dt>
		<dd>
			<?php echo h($application['Application']['date_of_birth']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Division'); ?></dt>
		<dd>
			<?php echo h($application['Application']['division']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('District'); ?></dt>
		<dd>
			<?php echo h($application['Application']['district']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Birth Certificate Id'); ?></dt>
		<dd>
			<?php echo h($application['Application']['birth_certificate_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Email'); ?></dt>
		<dd>
			<?php echo h($application['Application']['email']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Status'); ?></dt>
		<dd>
			<?php echo h($application['Application']['status']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Application'), array('action' => 'edit', $application['Application']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Application'), array('action' => 'delete', $application['Application']['id']), null, __('Are you sure you want to delete # %s?', $application['Application']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Applications'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Application'), array('action' => 'add')); ?> </li>
	</ul>
</div>
