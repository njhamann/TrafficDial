<div class="twitterAuths form">
<?php echo $this->Form->create('TwitterAuth');?>
	<fieldset>
		<legend><?php __('Edit Twitter Auth'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('client_service_id');
		echo $this->Form->input('service_number');
		echo $this->Form->input('auth_key');
		echo $this->Form->input('auth_secret');
		echo $this->Form->input('name');
		echo $this->Form->input('link');
		echo $this->Form->input('username');
		echo $this->Form->input('user_json');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $this->Form->value('TwitterAuth.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $this->Form->value('TwitterAuth.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Twitter Auths', true), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Client Services', true), array('controller' => 'client_services', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Client Service', true), array('controller' => 'client_services', 'action' => 'add')); ?> </li>
	</ul>
</div>