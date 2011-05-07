<div class="eventDates index">
	<h2><?php __('Event Dates');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('event_id');?></th>
			<th><?php echo $this->Paginator->sort('start_date');?></th>
			<th><?php echo $this->Paginator->sort('end_date');?></th>
			<th><?php echo $this->Paginator->sort('agenda');?></th>
			<th><?php echo $this->Paginator->sort('created');?></th>
			<th><?php echo $this->Paginator->sort('modified');?></th>
			<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($eventDates as $eventDate):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
		<td><?php echo $eventDate['EventDate']['id']; ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($eventDate['Event']['name'], array('controller' => 'events', 'action' => 'view', $eventDate['Event']['id'])); ?>
		</td>
		<td><?php echo $eventDate['EventDate']['start_date']; ?>&nbsp;</td>
		<td><?php echo $eventDate['EventDate']['end_date']; ?>&nbsp;</td>
		<td><?php echo $eventDate['EventDate']['agenda']; ?>&nbsp;</td>
		<td><?php echo $eventDate['EventDate']['created']; ?>&nbsp;</td>
		<td><?php echo $eventDate['EventDate']['modified']; ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View', true), array('action' => 'view', $eventDate['EventDate']['id'])); ?>
			<?php echo $this->Html->link(__('Edit', true), array('action' => 'edit', $eventDate['EventDate']['id'])); ?>
			<?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $eventDate['EventDate']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $eventDate['EventDate']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Event Date', true), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Events', true), array('controller' => 'events', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Event', true), array('controller' => 'events', 'action' => 'add')); ?> </li>
	</ul>
</div>