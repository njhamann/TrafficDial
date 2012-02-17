<div class="coupons form">
<?php echo $this->Form->create('Coupon');?>
	<fieldset>
		<legend><?php __('Edit Coupon'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('message_id');
		echo $this->Form->input('headline');
		echo $this->Form->input('deal');
		echo $this->Form->input('description');
		echo $this->Form->input('address_1');
		echo $this->Form->input('address_2');
		echo $this->Form->input('city');
		echo $this->Form->input('state');
		echo $this->Form->input('zip');
		echo $this->Form->input('start');
		echo $this->Form->input('expiration');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $this->Form->value('Coupon.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $this->Form->value('Coupon.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Coupons', true), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Messages', true), array('controller' => 'messages', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Message', true), array('controller' => 'messages', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Coupon Visit Counts', true), array('controller' => 'coupon_visit_counts', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Coupon Visit Count', true), array('controller' => 'coupon_visit_counts', 'action' => 'add')); ?> </li>
	</ul>
</div>