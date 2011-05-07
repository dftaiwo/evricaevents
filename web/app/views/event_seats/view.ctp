<div class="eventSeats view">
<h2><?php  __('Event Seat');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $eventSeat['EventSeat']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Event'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $this->Html->link($eventSeat['Event']['name'], array('controller' => 'events', 'action' => 'view', $eventSeat['Event']['id'])); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Name'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $eventSeat['EventSeat']['name']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Description'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $eventSeat['EventSeat']['description']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Total Seats'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $eventSeat['EventSeat']['total_seats']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Fee'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $eventSeat['EventSeat']['fee']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Event Seat', true), array('action' => 'edit', $eventSeat['EventSeat']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Delete Event Seat', true), array('action' => 'delete', $eventSeat['EventSeat']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $eventSeat['EventSeat']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Event Seats', true), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Event Seat', true), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Events', true), array('controller' => 'events', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Event', true), array('controller' => 'events', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Participants', true), array('controller' => 'participants', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Participant', true), array('controller' => 'participants', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php __('Related Participants');?></h3>
	<?php if (!empty($eventSeat['Participant'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Id'); ?></th>
		<th><?php __('Event Seat Id'); ?></th>
		<th><?php __('Event Id'); ?></th>
		<th><?php __('User Id'); ?></th>
		<th><?php __('Confirmed'); ?></th>
		<th><?php __('Created'); ?></th>
		<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($eventSeat['Participant'] as $participant):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $participant['id'];?></td>
			<td><?php echo $participant['event_seat_id'];?></td>
			<td><?php echo $participant['event_id'];?></td>
			<td><?php echo $participant['user_id'];?></td>
			<td><?php echo $participant['confirmed'];?></td>
			<td><?php echo $participant['created'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View', true), array('controller' => 'participants', 'action' => 'view', $participant['id'])); ?>
				<?php echo $this->Html->link(__('Edit', true), array('controller' => 'participants', 'action' => 'edit', $participant['id'])); ?>
				<?php echo $this->Html->link(__('Delete', true), array('controller' => 'participants', 'action' => 'delete', $participant['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $participant['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Participant', true), array('controller' => 'participants', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
