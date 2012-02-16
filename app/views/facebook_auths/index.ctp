<div class="facebookAuths index">
	<h2><?php __('Facebook Auths');?></h2>
	<table class="table">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('client_service_id');?></th>
			<th><?php echo $this->Paginator->sort('service_number');?></th>
			<th><?php echo $this->Paginator->sort('auth_token');?></th>
			<th><?php echo $this->Paginator->sort('name');?></th>
			<th><?php echo $this->Paginator->sort('created');?></th>
			<th><?php echo $this->Paginator->sort('modified');?></th>
			<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($facebookAuths as $facebookAuth):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
		<td><?php echo $facebookAuth['FacebookAuth']['id']; ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($facebookAuth['ClientService']['id'], array('controller' => 'client_services', 'action' => 'view', $facebookAuth['ClientService']['id'])); ?>
		</td>
		<td><?php echo $facebookAuth['FacebookAuth']['service_number']; ?>&nbsp;</td>
		<td><?php echo $facebookAuth['FacebookAuth']['auth_token']; ?>&nbsp;</td>
		<td><?php echo $facebookAuth['FacebookAuth']['name']; ?>&nbsp;</td>
		<td><?php echo $facebookAuth['FacebookAuth']['created']; ?>&nbsp;</td>
		<td><?php echo $facebookAuth['FacebookAuth']['modified']; ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View', true), array('action' => 'view', $facebookAuth['FacebookAuth']['id'])); ?>
			<?php echo $this->Html->link(__('Edit', true), array('action' => 'edit', $facebookAuth['FacebookAuth']['id'])); ?>
			<?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $facebookAuth['FacebookAuth']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $facebookAuth['FacebookAuth']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Facebook Auth', true), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Client Services', true), array('controller' => 'client_services', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Client Service', true), array('controller' => 'client_services', 'action' => 'add')); ?> </li>
	</ul>
</div>
