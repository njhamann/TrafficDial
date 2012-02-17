<div class="couponVisitIncrements form">
<?php echo $this->Form->create('CouponVisitIncrement');?>
	<fieldset>
		<legend><?php __('Edit Coupon Visit Increment'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('coupon_visit_count_id');
		echo $this->Form->input('count');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $this->Form->value('CouponVisitIncrement.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $this->Form->value('CouponVisitIncrement.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Coupon Visit Increments', true), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Coupon Visit Counts', true), array('controller' => 'coupon_visit_counts', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Coupon Visit Count', true), array('controller' => 'coupon_visit_counts', 'action' => 'add')); ?> </li>
	</ul>
</div>