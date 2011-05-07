<div class="eventsTags form">
<?php echo $this->Form->create('EventsTag');?>
	<fieldset>
		<legend><?php __('Edit Events Tag'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('tag_id');
		echo $this->Form->input('event_id');
		echo $this->Form->input('agenda');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $this->Form->value('EventsTag.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $this->Form->value('EventsTag.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Events Tags', true), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Tags', true), array('controller' => 'tags', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Tag', true), array('controller' => 'tags', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Events', true), array('controller' => 'events', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Event', true), array('controller' => 'events', 'action' => 'add')); ?> </li>
	</ul>
</div>