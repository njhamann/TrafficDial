<div class="clientServices view">
<h2><?php  __('Client Service');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $clientService['ClientService']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('User'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $this->Html->link($clientService['User']['id'], array('controller' => 'users', 'action' => 'view', $clientService['User']['id'])); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Type'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $clientService['ClientService']['type']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Created'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $clientService['ClientService']['created']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Modified'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $clientService['ClientService']['modified']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Client Service', true), array('action' => 'edit', $clientService['ClientService']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Delete Client Service', true), array('action' => 'delete', $clientService['ClientService']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $clientService['ClientService']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Client Services', true), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Client Service', true), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users', true), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User', true), array('controller' => 'users', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Facebook Auths', true), array('controller' => 'facebook_auths', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Facebook Auth', true), array('controller' => 'facebook_auths', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Twitter Auths', true), array('controller' => 'twitter_auths', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Twitter Auth', true), array('controller' => 'twitter_auths', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php __('Related Facebook Auths');?></h3>
	<?php if (!empty($clientService['FacebookAuth'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Id'); ?></th>
		<th><?php __('Client Service Id'); ?></th>
		<th><?php __('Service Identifier'); ?></th>
		<th><?php __('Auth Token'); ?></th>
		<th><?php __('Name'); ?></th>
		<th><?php __('Created'); ?></th>
		<th><?php __('Modified'); ?></th>
		<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($clientService['FacebookAuth'] as $facebookAuth):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $facebookAuth['id'];?></td>
			<td><?php echo $facebookAuth['client_service_id'];?></td>
			<td><?php echo $facebookAuth['service_identifier'];?></td>
			<td><?php echo $facebookAuth['auth_token'];?></td>
			<td><?php echo $facebookAuth['name'];?></td>
			<td><?php echo $facebookAuth['created'];?></td>
			<td><?php echo $facebookAuth['modified'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View', true), array('controller' => 'facebook_auths', 'action' => 'view', $facebookAuth['id'])); ?>
				<?php echo $this->Html->link(__('Edit', true), array('controller' => 'facebook_auths', 'action' => 'edit', $facebookAuth['id'])); ?>
				<?php echo $this->Html->link(__('Delete', true), array('controller' => 'facebook_auths', 'action' => 'delete', $facebookAuth['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $facebookAuth['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Facebook Auth', true), array('controller' => 'facebook_auths', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php __('Related Twitter Auths');?></h3>
	<?php if (!empty($clientService['TwitterAuth'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Id'); ?></th>
		<th><?php __('Client Service Id'); ?></th>
		<th><?php __('Service Identifier'); ?></th>
		<th><?php __('Auth Token'); ?></th>
		<th><?php __('Name'); ?></th>
		<th><?php __('Created'); ?></th>
		<th><?php __('Modified'); ?></th>
		<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($clientService['TwitterAuth'] as $twitterAuth):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $twitterAuth['id'];?></td>
			<td><?php echo $twitterAuth['client_service_id'];?></td>
			<td><?php echo $twitterAuth['service_identifier'];?></td>
			<td><?php echo $twitterAuth['auth_token'];?></td>
			<td><?php echo $twitterAuth['name'];?></td>
			<td><?php echo $twitterAuth['created'];?></td>
			<td><?php echo $twitterAuth['modified'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View', true), array('controller' => 'twitter_auths', 'action' => 'view', $twitterAuth['id'])); ?>
				<?php echo $this->Html->link(__('Edit', true), array('controller' => 'twitter_auths', 'action' => 'edit', $twitterAuth['id'])); ?>
				<?php echo $this->Html->link(__('Delete', true), array('controller' => 'twitter_auths', 'action' => 'delete', $twitterAuth['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $twitterAuth['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Twitter Auth', true), array('controller' => 'twitter_auths', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
