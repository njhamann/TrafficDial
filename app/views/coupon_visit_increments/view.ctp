<div class="couponVisitIncrements view">
<h2><?php  __('Coupon Visit Increment');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $couponVisitIncrement['CouponVisitIncrement']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Coupon Visit Count'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $this->Html->link($couponVisitIncrement['CouponVisitCount']['id'], array('controller' => 'coupon_visit_counts', 'action' => 'view', $couponVisitIncrement['CouponVisitCount']['id'])); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Count'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $couponVisitIncrement['CouponVisitIncrement']['count']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Created'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $couponVisitIncrement['CouponVisitIncrement']['created']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Modified'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $couponVisitIncrement['CouponVisitIncrement']['modified']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Coupon Visit Increment', true), array('action' => 'edit', $couponVisitIncrement['CouponVisitIncrement']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Delete Coupon Visit Increment', true), array('action' => 'delete', $couponVisitIncrement['CouponVisitIncrement']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $couponVisitIncrement['CouponVisitIncrement']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Coupon Visit Increments', true), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Coupon Visit Increment', true), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Coupon Visit Counts', true), array('controller' => 'coupon_visit_counts', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Coupon Visit Count', true), array('controller' => 'coupon_visit_counts', 'action' => 'add')); ?> </li>
	</ul>
</div>
