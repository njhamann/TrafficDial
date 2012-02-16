<div class="clientServices form">
<?php echo $this->Form->create('ClientService');?>
	<fieldset>
		<legend><?php __('Edit Client Service'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('user_id');
		echo $this->Form->input('type');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $this->Form->value('ClientService.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $this->Form->value('ClientService.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Client Services', true), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Users', true), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User', true), array('controller' => 'users', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Facebook Auths', true), array('controller' => 'facebook_auths', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Facebook Auth', true), array('controller' => 'facebook_auths', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Twitter Auths', true), array('controller' => 'twitter_auths', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Twitter Auth', true), array('controller' => 'twitter_auths', 'action' => 'add')); ?> </li>
	</ul>
</div>