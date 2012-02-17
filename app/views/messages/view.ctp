<div class="messages view">
<h2><?php  __('Message');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $message['Message']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Client Service'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $this->Html->link($message['ClientService']['id'], array('controller' => 'client_services', 'action' => 'view', $message['ClientService']['id'])); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Message'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $message['Message']['message']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Created'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $message['Message']['created']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Modified'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $message['Message']['modified']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Message', true), array('action' => 'edit', $message['Message']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Delete Message', true), array('action' => 'delete', $message['Message']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $message['Message']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Messages', true), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Message', true), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Client Services', true), array('controller' => 'client_services', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Client Service', true), array('controller' => 'client_services', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Coupons', true), array('controller' => 'coupons', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Coupon', true), array('controller' => 'coupons', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php __('Related Coupons');?></h3>
	<?php if (!empty($message['Coupon'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Id'); ?></th>
		<th><?php __('Message Id'); ?></th>
		<th><?php __('Headline'); ?></th>
		<th><?php __('Deal'); ?></th>
		<th><?php __('Description'); ?></th>
		<th><?php __('Address 1'); ?></th>
		<th><?php __('Address 2'); ?></th>
		<th><?php __('City'); ?></th>
		<th><?php __('State'); ?></th>
		<th><?php __('Zip'); ?></th>
		<th><?php __('Start'); ?></th>
		<th><?php __('Expiration'); ?></th>
		<th><?php __('Created'); ?></th>
		<th><?php __('Modified'); ?></th>
		<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($message['Coupon'] as $coupon):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $coupon['id'];?></td>
			<td><?php echo $coupon['message_id'];?></td>
			<td><?php echo $coupon['headline'];?></td>
			<td><?php echo $coupon['deal'];?></td>
			<td><?php echo $coupon['description'];?></td>
			<td><?php echo $coupon['address_1'];?></td>
			<td><?php echo $coupon['address_2'];?></td>
			<td><?php echo $coupon['city'];?></td>
			<td><?php echo $coupon['state'];?></td>
			<td><?php echo $coupon['zip'];?></td>
			<td><?php echo $coupon['start'];?></td>
			<td><?php echo $coupon['expiration'];?></td>
			<td><?php echo $coupon['created'];?></td>
			<td><?php echo $coupon['modified'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View', true), array('controller' => 'coupons', 'action' => 'view', $coupon['id'])); ?>
				<?php echo $this->Html->link(__('Edit', true), array('controller' => 'coupons', 'action' => 'edit', $coupon['id'])); ?>
				<?php echo $this->Html->link(__('Delete', true), array('controller' => 'coupons', 'action' => 'delete', $coupon['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $coupon['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Coupon', true), array('controller' => 'coupons', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
