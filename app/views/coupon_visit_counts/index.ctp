<div class="couponVisitCounts index">
	<h2><?php __('Coupon Visit Counts');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('coupon_id');?></th>
			<th><?php echo $this->Paginator->sort('count');?></th>
			<th><?php echo $this->Paginator->sort('count_previous');?></th>
			<th><?php echo $this->Paginator->sort('created');?></th>
			<th><?php echo $this->Paginator->sort('modified');?></th>
			<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($couponVisitCounts as $couponVisitCount):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
		<td><?php echo $couponVisitCount['CouponVisitCount']['id']; ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($couponVisitCount['Coupon']['id'], array('controller' => 'coupons', 'action' => 'view', $couponVisitCount['Coupon']['id'])); ?>
		</td>
		<td><?php echo $couponVisitCount['CouponVisitCount']['count']; ?>&nbsp;</td>
		<td><?php echo $couponVisitCount['CouponVisitCount']['count_previous']; ?>&nbsp;</td>
		<td><?php echo $couponVisitCount['CouponVisitCount']['created']; ?>&nbsp;</td>
		<td><?php echo $couponVisitCount['CouponVisitCount']['modified']; ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View', true), array('action' => 'view', $couponVisitCount['CouponVisitCount']['id'])); ?>
			<?php echo $this->Html->link(__('Edit', true), array('action' => 'edit', $couponVisitCount['CouponVisitCount']['id'])); ?>
			<?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $couponVisitCount['CouponVisitCount']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $couponVisitCount['CouponVisitCount']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Coupon Visit Count', true), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Coupons', true), array('controller' => 'coupons', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Coupon', true), array('controller' => 'coupons', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Coupon Visit Increments', true), array('controller' => 'coupon_visit_increments', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Coupon Visit Increment', true), array('controller' => 'coupon_visit_increments', 'action' => 'add')); ?> </li>
	</ul>
</div>