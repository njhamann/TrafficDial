<div class="twitterAuths view">
<h2><?php  __('Twitter Auth');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $twitterAuth['TwitterAuth']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Client Service'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $this->Html->link($twitterAuth['ClientService']['id'], array('controller' => 'client_services', 'action' => 'view', $twitterAuth['ClientService']['id'])); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Service Number'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $twitterAuth['TwitterAuth']['service_number']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Auth Token'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $twitterAuth['TwitterAuth']['auth_token']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Name'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $twitterAuth['TwitterAuth']['name']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Created'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $twitterAuth['TwitterAuth']['created']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Modified'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $twitterAuth['TwitterAuth']['modified']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Twitter Auth', true), array('action' => 'edit', $twitterAuth['TwitterAuth']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Delete Twitter Auth', true), array('action' => 'delete', $twitterAuth['TwitterAuth']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $twitterAuth['TwitterAuth']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Twitter Auths', true), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Twitter Auth', true), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Client Services', true), array('controller' => 'client_services', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Client Service', true), array('controller' => 'client_services', 'action' => 'add')); ?> </li>
	</ul>
</div>
