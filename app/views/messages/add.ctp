<div class="messages form">
<?php echo $this->Form->create('Message');?>
	<fieldset>
		<legend><?php __('Add Message'); ?></legend>
	<?php
		echo $this->Form->input('client_service_id');
		echo $this->Form->input('message');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Messages', true), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Client Services', true), array('controller' => 'client_services', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Client Service', true), array('controller' => 'client_services', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Coupons', true), array('controller' => 'coupons', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Coupon', true), array('controller' => 'coupons', 'action' => 'add')); ?> </li>
	</ul>
</div>