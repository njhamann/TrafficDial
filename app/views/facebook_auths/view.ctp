<div class="facebookAuths view">
<h2><?php  __('Facebook Auth');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $facebookAuth['FacebookAuth']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Client Service'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $this->Html->link($facebookAuth['ClientService']['id'], array('controller' => 'client_services', 'action' => 'view', $facebookAuth['ClientService']['id'])); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Service Number'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $facebookAuth['FacebookAuth']['service_number']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Auth Token'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $facebookAuth['FacebookAuth']['auth_token']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Name'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $facebookAuth['FacebookAuth']['name']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Created'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $facebookAuth['FacebookAuth']['created']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Modified'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $facebookAuth['FacebookAuth']['modified']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Facebook Auth', true), array('action' => 'edit', $facebookAuth['FacebookAuth']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Delete Facebook Auth', true), array('action' => 'delete', $facebookAuth['FacebookAuth']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $facebookAuth['FacebookAuth']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Facebook Auths', true), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Facebook Auth', true), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Client Services', true), array('controller' => 'client_services', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Client Service', true), array('controller' => 'client_services', 'action' => 'add')); ?> </li>
	</ul>
</div>
