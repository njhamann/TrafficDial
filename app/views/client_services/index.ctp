<div class="clientServices index">
	<h2><?php __('Client Services');?></h2>
	<table class="table">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('user_id');?></th>
			<th><?php echo $this->Paginator->sort('type');?></th>
			<th><?php echo $this->Paginator->sort('created');?></th>
			<th><?php echo $this->Paginator->sort('modified');?></th>
			<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($clientServices as $clientService):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
		<td><?php echo $clientService['ClientService']['id']; ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($clientService['User']['id'], array('controller' => 'users', 'action' => 'view', $clientService['User']['id'])); ?>
		</td>
		<td><?php echo $clientService['ClientService']['type']; ?>&nbsp;</td>
		<td><?php echo $clientService['ClientService']['created']; ?>&nbsp;</td>
		<td><?php echo $clientService['ClientService']['modified']; ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View', true), array('action' => 'view', $clientService['ClientService']['id'])); ?>
			<?php echo $this->Html->link(__('Edit', true), array('action' => 'edit', $clientService['ClientService']['id'])); ?>
			<?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $clientService['ClientService']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $clientService['ClientService']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Client Service', true), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Users', true), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User', true), array('controller' => 'users', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Facebook Auths', true), array('controller' => 'facebook_auths', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Facebook Auth', true), array('controller' => 'facebook_auths', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Twitter Auths', true), array('controller' => 'twitter_auths', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Twitter Auth', true), array('controller' => 'twitter_auths', 'action' => 'add')); ?> </li>
	</ul>
</div>
