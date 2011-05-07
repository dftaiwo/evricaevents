<div class="eventImages index">
	<h2><?php __('Event Images');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('event_id');?></th>
			<th><?php echo $this->Paginator->sort('name');?></th>
			<th><?php echo $this->Paginator->sort('description');?></th>
			<th><?php echo $this->Paginator->sort('sort_order');?></th>
			<th><?php echo $this->Paginator->sort('photo_url');?></th>
			<th><?php echo $this->Paginator->sort('active');?></th>
			<th><?php echo $this->Paginator->sort('created');?></th>
			<th><?php echo $this->Paginator->sort('modified');?></th>
			<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($eventImages as $eventImage):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
		<td><?php echo $eventImage['EventImage']['id']; ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($eventImage['Event']['name'], array('controller' => 'events', 'action' => 'view', $eventImage['Event']['id'])); ?>
		</td>
		<td><?php echo $eventImage['EventImage']['name']; ?>&nbsp;</td>
		<td><?php echo $eventImage['EventImage']['description']; ?>&nbsp;</td>
		<td><?php echo $eventImage['EventImage']['sort_order']; ?>&nbsp;</td>
		<td><?php echo $eventImage['EventImage']['photo_url']; ?>&nbsp;</td>
		<td><?php echo $eventImage['EventImage']['active']; ?>&nbsp;</td>
		<td><?php echo $eventImage['EventImage']['created']; ?>&nbsp;</td>
		<td><?php echo $eventImage['EventImage']['modified']; ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View', true), array('action' => 'view', $eventImage['EventImage']['id'])); ?>
			<?php echo $this->Html->link(__('Edit', true), array('action' => 'edit', $eventImage['EventImage']['id'])); ?>
			<?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $eventImage['EventImage']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $eventImage['EventImage']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Event Image', true), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Events', true), array('controller' => 'events', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Event', true), array('controller' => 'events', 'action' => 'add')); ?> </li>
	</ul>
</div>