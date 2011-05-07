<div class="participants index">
	<h2><?php __('Participants');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('event_seat_id');?></th>
			<th><?php echo $this->Paginator->sort('event_id');?></th>
			<th><?php echo $this->Paginator->sort('user_id');?></th>
			<th><?php echo $this->Paginator->sort('confirmed');?></th>
			<th><?php echo $this->Paginator->sort('created');?></th>
			<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($participants as $participant):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
		<td><?php echo $participant['Participant']['id']; ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($participant['EventSeat']['name'], array('controller' => 'event_seats', 'action' => 'view', $participant['EventSeat']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($participant['Event']['name'], array('controller' => 'events', 'action' => 'view', $participant['Event']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($participant['User']['id'], array('controller' => 'users', 'action' => 'view', $participant['User']['id'])); ?>
		</td>
		<td><?php echo $participant['Participant']['confirmed']; ?>&nbsp;</td>
		<td><?php echo $participant['Participant']['created']; ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View', true), array('action' => 'view', $participant['Participant']['id'])); ?>
			<?php echo $this->Html->link(__('Edit', true), array('action' => 'edit', $participant['Participant']['id'])); ?>
			<?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $participant['Participant']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $participant['Participant']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Participant', true), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Event Seats', true), array('controller' => 'event_seats', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Event Seat', true), array('controller' => 'event_seats', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Events', true), array('controller' => 'events', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Event', true), array('controller' => 'events', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users', true), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User', true), array('controller' => 'users', 'action' => 'add')); ?> </li>
	</ul>
</div>