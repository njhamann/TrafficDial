<div class="applications form">
<?php echo $this->Form->create('Application');?>
	<fieldset>
		<legend><?php __('Edit Application'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('facebook_key');
		echo $this->Form->input('facebook_secret');
		echo $this->Form->input('twitter_consumer_key');
		echo $this->Form->input('twitter_consumer_secret');
		echo $this->Form->input('foursquare_consumer_key');
		echo $this->Form->input('foursquare_consumer_secret');
		echo $this->Form->input('google_consumer_key');
		echo $this->Form->input('google_consumer_secret');
		echo $this->Form->input('bitly_username');
		echo $this->Form->input('bitly_key');
		echo $this->Form->input('stripe_test_key');
		echo $this->Form->input('stripe_test_secret');
		echo $this->Form->input('stripe_live_key');
		echo $this->Form->input('stripe_live_secret');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $this->Form->value('Application.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $this->Form->value('Application.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Applications', true), array('action' => 'index'));?></li>
	</ul>
</div>