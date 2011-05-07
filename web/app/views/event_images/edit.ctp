<div class="eventImages form">
<?php echo $this->Form->create('EventImage');?>
	<fieldset>
		<legend><?php __('Edit Event Image'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('event_id');
		echo $this->Form->input('name');
		echo $this->Form->input('description');
		echo $this->Form->input('sort_order');
		echo $this->Form->input('photo_url');
		echo $this->Form->input('active');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $this->Form->value('EventImage.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $this->Form->value('EventImage.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Event Images', true), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Events', true), array('controller' => 'events', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Event', true), array('controller' => 'events', 'action' => 'add')); ?> </li>
	</ul>
</div>