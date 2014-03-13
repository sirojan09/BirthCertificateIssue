<div class="pendingapplications view">
<h2><?php echo __('Pendingapplication'); ?></h2>
	<dl>
		<dt><?php echo __('Application Id'); ?></dt>
		<dd>
			<?php echo h($pendingapplication['Pendingapplication']['application_Id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Applicant Name'); ?></dt>
		<dd>
			<?php echo h($pendingapplication['Pendingapplication']['applicant_name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Father Full Name'); ?></dt>
		<dd>
			<?php echo h($pendingapplication['Pendingapplication']['father_full_name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Mother Full Name'); ?></dt>
		<dd>
			<?php echo h($pendingapplication['Pendingapplication']['mother_full_name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Date Of Birth'); ?></dt>
		<dd>
			<?php echo h($pendingapplication['Pendingapplication']['date_of_birth']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Division'); ?></dt>
		<dd>
			<?php echo h($pendingapplication['Pendingapplication']['division']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('District'); ?></dt>
		<dd>
			<?php echo h($pendingapplication['Pendingapplication']['district']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Birth Certificate Id'); ?></dt>
		<dd>
			<?php echo h($pendingapplication['Pendingapplication']['birth_certificate_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Email'); ?></dt>
		<dd>
			<?php echo h($pendingapplication['Pendingapplication']['email']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Pendingapplication'), array('action' => 'edit', $pendingapplication['Pendingapplication']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Pendingapplication'), array('action' => 'delete', $pendingapplication['Pendingapplication']['id']), null, __('Are you sure you want to delete # %s?', $pendingapplication['Pendingapplication']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Pendingapplications'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Pendingapplication'), array('action' => 'add')); ?> </li>
	</ul>
</div>
