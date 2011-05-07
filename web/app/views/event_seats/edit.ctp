<div class="eventSeats form">
<?php echo $this->Form->create('EventSeat');?>
	<fieldset>
		<legend><?php __('Edit Event Seat'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('event_id');
		echo $this->Form->input('name');
		echo $this->Form->input('description');
		echo $this->Form->input('total_seats');
		echo $this->Form->input('fee');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $this->Form->value('EventSeat.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $this->Form->value('EventSeat.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Event Seats', true), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Events', true), array('controller' => 'events', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Event', true), array('controller' => 'events', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Participants', true), array('controller' => 'participants', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Participant', true), array('controller' => 'participants', 'action' => 'add')); ?> </li>
	</ul>
</div>