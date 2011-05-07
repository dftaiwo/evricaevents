<div class="participants form">
<?php echo $this->Form->create('Participant');?>
	<fieldset>
		<legend><?php __('Edit Participant'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('event_seat_id');
		echo $this->Form->input('event_id');
		echo $this->Form->input('user_id');
		echo $this->Form->input('confirmed');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $this->Form->value('Participant.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $this->Form->value('Participant.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Participants', true), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Event Seats', true), array('controller' => 'event_seats', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Event Seat', true), array('controller' => 'event_seats', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Events', true), array('controller' => 'events', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Event', true), array('controller' => 'events', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users', true), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User', true), array('controller' => 'users', 'action' => 'add')); ?> </li>
	</ul>
</div>