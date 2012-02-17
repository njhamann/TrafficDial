<div class="accounts view">
<h2><?php  __('Account');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $account['Account']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Created'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $account['Account']['created']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Modified'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $account['Account']['modified']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Account', true), array('action' => 'edit', $account['Account']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Delete Account', true), array('action' => 'delete', $account['Account']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $account['Account']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Accounts', true), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Account', true), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Payment Methods', true), array('controller' => 'payment_methods', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Payment Method', true), array('controller' => 'payment_methods', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php __('Related Payment Methods');?></h3>
	<?php if (!empty($account['PaymentMethod'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Id'); ?></th>
		<th><?php __('Account Id'); ?></th>
		<th><?php __('Service'); ?></th>
		<th><?php __('Payment Number'); ?></th>
		<th><?php __('Created'); ?></th>
		<th><?php __('Modified'); ?></th>
		<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($account['PaymentMethod'] as $paymentMethod):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $paymentMethod['id'];?></td>
			<td><?php echo $paymentMethod['account_id'];?></td>
			<td><?php echo $paymentMethod['service'];?></td>
			<td><?php echo $paymentMethod['payment_number'];?></td>
			<td><?php echo $paymentMethod['created'];?></td>
			<td><?php echo $paymentMethod['modified'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View', true), array('controller' => 'payment_methods', 'action' => 'view', $paymentMethod['id'])); ?>
				<?php echo $this->Html->link(__('Edit', true), array('controller' => 'payment_methods', 'action' => 'edit', $paymentMethod['id'])); ?>
				<?php echo $this->Html->link(__('Delete', true), array('controller' => 'payment_methods', 'action' => 'delete', $paymentMethod['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $paymentMethod['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Payment Method', true), array('controller' => 'payment_methods', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
