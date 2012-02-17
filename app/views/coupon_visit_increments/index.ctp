<div class="couponVisitIncrements index">
	<h2><?php __('Coupon Visit Increments');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('coupon_visit_count_id');?></th>
			<th><?php echo $this->Paginator->sort('count');?></th>
			<th><?php echo $this->Paginator->sort('created');?></th>
			<th><?php echo $this->Paginator->sort('modified');?></th>
			<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($couponVisitIncrements as $couponVisitIncrement):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
		<td><?php echo $couponVisitIncrement['CouponVisitIncrement']['id']; ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($couponVisitIncrement['CouponVisitCount']['id'], array('controller' => 'coupon_visit_counts', 'action' => 'view', $couponVisitIncrement['CouponVisitCount']['id'])); ?>
		</td>
		<td><?php echo $couponVisitIncrement['CouponVisitIncrement']['count']; ?>&nbsp;</td>
		<td><?php echo $couponVisitIncrement['CouponVisitIncrement']['created']; ?>&nbsp;</td>
		<td><?php echo $couponVisitIncrement['CouponVisitIncrement']['modified']; ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View', true), array('action' => 'view', $couponVisitIncrement['CouponVisitIncrement']['id'])); ?>
			<?php echo $this->Html->link(__('Edit', true), array('action' => 'edit', $couponVisitIncrement['CouponVisitIncrement']['id'])); ?>
			<?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $couponVisitIncrement['CouponVisitIncrement']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $couponVisitIncrement['CouponVisitIncrement']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Coupon Visit Increment', true), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Coupon Visit Counts', true), array('controller' => 'coupon_visit_counts', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Coupon Visit Count', true), array('controller' => 'coupon_visit_counts', 'action' => 'add')); ?> </li>
	</ul>
</div>