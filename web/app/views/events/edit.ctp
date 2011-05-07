<div class="events form">
<?php echo $this->Form->create('Event');?>
	<fieldset>
		<legend><?php __('Edit Event'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('state_id');
		echo $this->Form->input('user_id');
		echo $this->Form->input('name');
		echo $this->Form->input('event_slug');
		echo $this->Form->input('description');
		echo $this->Form->input('is_free');
		echo $this->Form->input('is_private');
		echo $this->Form->input('total_seats');
		echo $this->Form->input('address');
		echo $this->Form->input('gps_coords');
		echo $this->Form->input('event_url');
		echo $this->Form->input('event_logo_url');
		echo $this->Form->input('event_company');
		echo $this->Form->input('active');
		echo $this->Form->input('event_company_info');
		echo $this->Form->input('theme_title');
		echo $this->Form->input('theme_background');
		echo $this->Form->input('theme_body');
		echo $this->Form->input('theme_links');
		echo $this->Form->input('Category');
		echo $this->Form->input('Tag');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $this->Form->value('Event.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $this->Form->value('Event.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Events', true), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List States', true), array('controller' => 'states', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New State', true), array('controller' => 'states', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users', true), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User', true), array('controller' => 'users', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Event Dates', true), array('controller' => 'event_dates', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Event Date', true), array('controller' => 'event_dates', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Event Images', true), array('controller' => 'event_images', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Event Image', true), array('controller' => 'event_images', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Event Seats', true), array('controller' => 'event_seats', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Event Seat', true), array('controller' => 'event_seats', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Event Speakers', true), array('controller' => 'event_speakers', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Event Speaker', true), array('controller' => 'event_speakers', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Participants', true), array('controller' => 'participants', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Participant', true), array('controller' => 'participants', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Categories', true), array('controller' => 'categories', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Category', true), array('controller' => 'categories', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Tags', true), array('controller' => 'tags', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Tag', true), array('controller' => 'tags', 'action' => 'add')); ?> </li>
	</ul>
</div>