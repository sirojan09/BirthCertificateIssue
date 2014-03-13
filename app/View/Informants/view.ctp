<div class="informants view">
<h2><?php echo __('Informant'); ?></h2>
	<dl>
		<dt><?php echo __('Informer Id'); ?></dt>
		<dd>
			<?php echo h($informant['Informant']['informer_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('First Name'); ?></dt>
		<dd>
			<?php echo h($informant['Informant']['first_name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Last Name'); ?></dt>
		<dd>
			<?php echo h($informant['Informant']['last_name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Street No'); ?></dt>
		<dd>
			<?php echo h($informant['Informant']['street_no']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Street Name'); ?></dt>
		<dd>
			<?php echo h($informant['Informant']['street_name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('City'); ?></dt>
		<dd>
			<?php echo h($informant['Informant']['city']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Designation'); ?></dt>
		<dd>
			<?php echo h($informant['Informant']['designation']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Informant'), array('action' => 'edit', $informant['Informant']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Informant'), array('action' => 'delete', $informant['Informant']['id']), null, __('Are you sure you want to delete # %s?', $informant['Informant']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Informants'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Informant'), array('action' => 'add')); ?> </li>
	</ul>
</div>
