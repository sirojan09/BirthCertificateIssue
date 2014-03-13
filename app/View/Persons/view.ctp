<div class="people view">
<h2><?php echo __('Person'); ?></h2>
	<dl>
		<dt><?php echo __('Birth Certificate Id'); ?></dt>
		<dd>
			<?php echo h($person['Person']['birth_certificate_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Mother Birth Certificate Id'); ?></dt>
		<dd>
			<?php echo h($person['Person']['mother_birth_certificate_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Father Birth Certificate Id'); ?></dt>
		<dd>
			<?php echo h($person['Person']['father_birth_certificate_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Parent Married'); ?></dt>
		<dd>
			<?php echo h($person['Person']['parent_married']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($person['Person']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Date Of Birth'); ?></dt>
		<dd>
			<?php echo h($person['Person']['date_of_birth']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Place Of Birth'); ?></dt>
		<dd>
			<?php echo h($person['Person']['place_of_birth']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Sex'); ?></dt>
		<dd>
			<?php echo h($person['Person']['sex']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Father Race'); ?></dt>
		<dd>
			<?php echo h($person['Person']['father_race']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Mother Race'); ?></dt>
		<dd>
			<?php echo h($person['Person']['mother_race']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Mother Age'); ?></dt>
		<dd>
			<?php echo h($person['Person']['mother_age']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Father Job'); ?></dt>
		<dd>
			<?php echo h($person['Person']['father_job']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Date Of Registration'); ?></dt>
		<dd>
			<?php echo h($person['Person']['date_of_registration']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Registrar Id'); ?></dt>
		<dd>
			<?php echo h($person['Person']['registrar_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Informer Id'); ?></dt>
		<dd>
			<?php echo h($person['Person']['informer_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Status'); ?></dt>
		<dd>
			<?php echo h($person['Person']['status']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Person'), array('action' => 'edit', $person['Person']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Person'), array('action' => 'delete', $person['Person']['id']), null, __('Are you sure you want to delete # %s?', $person['Person']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List People'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Person'), array('action' => 'add')); ?> </li>
	</ul>
</div>
