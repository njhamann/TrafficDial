<div class="coupons index">
	<h2><?php __('Coupons');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('message_id');?></th>
			<th><?php echo $this->Paginator->sort('headline');?></th>
			<th><?php echo $this->Paginator->sort('deal');?></th>
			<th><?php echo $this->Paginator->sort('description');?></th>
			<th><?php echo $this->Paginator->sort('address_1');?></th>
			<th><?php echo $this->Paginator->sort('address_2');?></th>
			<th><?php echo $this->Paginator->sort('city');?></th>
			<th><?php echo $this->Paginator->sort('state');?></th>
			<th><?php echo $this->Paginator->sort('zip');?></th>
			<th><?php echo $this->Paginator->sort('start');?></th>
			<th><?php echo $this->Paginator->sort('expiration');?></th>
			<th><?php echo $this->Paginator->sort('created');?></th>
			<th><?php echo $this->Paginator->sort('modified');?></th>
			<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($coupons as $coupon):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
		<td><?php echo $coupon['Coupon']['id']; ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($coupon['Message']['id'], array('controller' => 'messages', 'action' => 'view', $coupon['Message']['id'])); ?>
		</td>
		<td><?php echo $coupon['Coupon']['headline']; ?>&nbsp;</td>
		<td><?php echo $coupon['Coupon']['deal']; ?>&nbsp;</td>
		<td><?php echo $coupon['Coupon']['description']; ?>&nbsp;</td>
		<td><?php echo $coupon['Coupon']['address_1']; ?>&nbsp;</td>
		<td><?php echo $coupon['Coupon']['address_2']; ?>&nbsp;</td>
		<td><?php echo $coupon['Coupon']['city']; ?>&nbsp;</td>
		<td><?php echo $coupon['Coupon']['state']; ?>&nbsp;</td>
		<td><?php echo $coupon['Coupon']['zip']; ?>&nbsp;</td>
		<td><?php echo $coupon['Coupon']['start']; ?>&nbsp;</td>
		<td><?php echo $coupon['Coupon']['expiration']; ?>&nbsp;</td>
		<td><?php echo $coupon['Coupon']['created']; ?>&nbsp;</td>
		<td><?php echo $coupon['Coupon']['modified']; ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View', true), array('action' => 'view', $coupon['Coupon']['id'])); ?>
			<?php echo $this->Html->link(__('Edit', true), array('action' => 'edit', $coupon['Coupon']['id'])); ?>
			<?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $coupon['Coupon']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $coupon['Coupon']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Coupon', true), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Messages', true), array('controller' => 'messages', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Message', true), array('controller' => 'messages', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Coupon Visit Counts', true), array('controller' => 'coupon_visit_counts', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Coupon Visit Count', true), array('controller' => 'coupon_visit_counts', 'action' => 'add')); ?> </li>
	</ul>
</div>