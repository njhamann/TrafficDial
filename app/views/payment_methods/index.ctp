<div class="paymentMethods index">
	<h2><?php __('Payment Methods');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('account_id');?></th>
			<th><?php echo $this->Paginator->sort('service');?></th>
			<th><?php echo $this->Paginator->sort('payment_number');?></th>
			<th><?php echo $this->Paginator->sort('created');?></th>
			<th><?php echo $this->Paginator->sort('modified');?></th>
			<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($paymentMethods as $paymentMethod):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
		<td><?php echo $paymentMethod['PaymentMethod']['id']; ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($paymentMethod['Account']['id'], array('controller' => 'accounts', 'action' => 'view', $paymentMethod['Account']['id'])); ?>
		</td>
		<td><?php echo $paymentMethod['PaymentMethod']['service']; ?>&nbsp;</td>
		<td><?php echo $paymentMethod['PaymentMethod']['payment_number']; ?>&nbsp;</td>
		<td><?php echo $paymentMethod['PaymentMethod']['created']; ?>&nbsp;</td>
		<td><?php echo $paymentMethod['PaymentMethod']['modified']; ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View', true), array('action' => 'view', $paymentMethod['PaymentMethod']['id'])); ?>
			<?php echo $this->Html->link(__('Edit', true), array('action' => 'edit', $paymentMethod['PaymentMethod']['id'])); ?>
			<?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $paymentMethod['PaymentMethod']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $paymentMethod['PaymentMethod']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page %page% of %pages%, showing %current% records out of %count% total, starting on record %start%, ending on %end%', true)
	));
	?>	</p>

	<div class="paging">
		<?php echo $this->Paginator->prev('<< ' . __('previous', true), array(), null, array('class'=>'disabled'));?>
	 | 	<?php echo $this->Paginator->numbers();?>
 |
		<?php echo $this->Paginator->next(__('next', true) . ' >>', array(), null, array('class' => 'disabled'));?>
	</div>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Payment Method', true), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Accounts', true), array('controller' => 'accounts', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Account', true), array('controller' => 'accounts', 'action' => 'add')); ?> </li>
	</ul>
</div>