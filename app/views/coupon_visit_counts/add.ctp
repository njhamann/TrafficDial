<div class="couponVisitCounts form">
<?php echo $this->Form->create('CouponVisitCount');?>
	<fieldset>
		<legend><?php __('Add Coupon Visit Count'); ?></legend>
	<?php
		echo $this->Form->input('coupon_id');
		echo $this->Form->input('count');
		echo $this->Form->input('count_previous');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Coupon Visit Counts', true), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Coupons', true), array('controller' => 'coupons', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Coupon', true), array('controller' => 'coupons', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Coupon Visit Increments', true), array('controller' => 'coupon_visit_increments', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Coupon Visit Increment', true), array('controller' => 'coupon_visit_increments', 'action' => 'add')); ?> </li>
	</ul>
</div>