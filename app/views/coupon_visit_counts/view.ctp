<div class="couponVisitCounts view">
<h2><?php  __('Coupon Visit Count');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $couponVisitCount['CouponVisitCount']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Coupon'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $this->Html->link($couponVisitCount['Coupon']['id'], array('controller' => 'coupons', 'action' => 'view', $couponVisitCount['Coupon']['id'])); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Count'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $couponVisitCount['CouponVisitCount']['count']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Count Previous'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $couponVisitCount['CouponVisitCount']['count_previous']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Created'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $couponVisitCount['CouponVisitCount']['created']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Modified'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $couponVisitCount['CouponVisitCount']['modified']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Coupon Visit Count', true), array('action' => 'edit', $couponVisitCount['CouponVisitCount']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Delete Coupon Visit Count', true), array('action' => 'delete', $couponVisitCount['CouponVisitCount']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $couponVisitCount['CouponVisitCount']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Coupon Visit Counts', true), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Coupon Visit Count', true), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Coupons', true), array('controller' => 'coupons', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Coupon', true), array('controller' => 'coupons', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Coupon Visit Increments', true), array('controller' => 'coupon_visit_increments', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Coupon Visit Increment', true), array('controller' => 'coupon_visit_increments', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php __('Related Coupon Visit Increments');?></h3>
	<?php if (!empty($couponVisitCount['CouponVisitIncrement'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Id'); ?></th>
		<th><?php __('Coupon Visit Count Id'); ?></th>
		<th><?php __('Count'); ?></th>
		<th><?php __('Created'); ?></th>
		<th><?php __('Modified'); ?></th>
		<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($couponVisitCount['CouponVisitIncrement'] as $couponVisitIncrement):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $couponVisitIncrement['id'];?></td>
			<td><?php echo $couponVisitIncrement['coupon_visit_count_id'];?></td>
			<td><?php echo $couponVisitIncrement['count'];?></td>
			<td><?php echo $couponVisitIncrement['created'];?></td>
			<td><?php echo $couponVisitIncrement['modified'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View', true), array('controller' => 'coupon_visit_increments', 'action' => 'view', $couponVisitIncrement['id'])); ?>
				<?php echo $this->Html->link(__('Edit', true), array('controller' => 'coupon_visit_increments', 'action' => 'edit', $couponVisitIncrement['id'])); ?>
				<?php echo $this->Html->link(__('Delete', true), array('controller' => 'coupon_visit_increments', 'action' => 'delete', $couponVisitIncrement['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $couponVisitIncrement['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Coupon Visit Increment', true), array('controller' => 'coupon_visit_increments', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
