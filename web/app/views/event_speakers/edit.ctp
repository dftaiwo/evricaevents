<div class="eventSpeakers form">
<?php echo $this->Form->create('EventSpeaker');?>
	<fieldset>
		<legend><?php __('Edit Event Speaker'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('event_id');
		echo $this->Form->input('name');
		echo $this->Form->input('profile');
		echo $this->Form->input('sort_order');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $this->Form->value('EventSpeaker.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $this->Form->value('EventSpeaker.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Event Speakers', true), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Events', true), array('controller' => 'events', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Event', true), array('controller' => 'events', 'action' => 'add')); ?> </li>
	</ul>
</div>