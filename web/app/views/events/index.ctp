<div class="events index">
	<h2><?php __('Events');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('state_id');?></th>
			<th><?php echo $this->Paginator->sort('user_id');?></th>
			<th><?php echo $this->Paginator->sort('name');?></th>
			<th><?php echo $this->Paginator->sort('event_slug');?></th>
			<th><?php echo $this->Paginator->sort('description');?></th>
			<th><?php echo $this->Paginator->sort('is_free');?></th>
			<th><?php echo $this->Paginator->sort('is_private');?></th>
			<th><?php echo $this->Paginator->sort('total_seats');?></th>
			<th><?php echo $this->Paginator->sort('address');?></th>
			<th><?php echo $this->Paginator->sort('gps_coords');?></th>
			<th><?php echo $this->Paginator->sort('event_url');?></th>
			<th><?php echo $this->Paginator->sort('event_logo_url');?></th>
			<th><?php echo $this->Paginator->sort('event_company');?></th>
			<th><?php echo $this->Paginator->sort('active');?></th>
			<th><?php echo $this->Paginator->sort('event_company_info');?></th>
			<th><?php echo $this->Paginator->sort('theme_title');?></th>
			<th><?php echo $this->Paginator->sort('theme_background');?></th>
			<th><?php echo $this->Paginator->sort('theme_body');?></th>
			<th><?php echo $this->Paginator->sort('theme_links');?></th>
			<th><?php echo $this->Paginator->sort('created');?></th>
			<th><?php echo $this->Paginator->sort('modified');?></th>
			<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($events as $event):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
		<td><?php echo $event['Event']['id']; ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($event['State']['name'], array('controller' => 'states', 'action' => 'view', $event['State']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($event['User']['id'], array('controller' => 'users', 'action' => 'view', $event['User']['id'])); ?>
		</td>
		<td><?php echo $event['Event']['name']; ?>&nbsp;</td>
		<td><?php echo $event['Event']['event_slug']; ?>&nbsp;</td>
		<td><?php echo $event['Event']['description']; ?>&nbsp;</td>
		<td><?php echo $event['Event']['is_free']; ?>&nbsp;</td>
		<td><?php echo $event['Event']['is_private']; ?>&nbsp;</td>
		<td><?php echo $event['Event']['total_seats']; ?>&nbsp;</td>
		<td><?php echo $event['Event']['address']; ?>&nbsp;</td>
		<td><?php echo $event['Event']['gps_coords']; ?>&nbsp;</td>
		<td><?php echo $event['Event']['event_url']; ?>&nbsp;</td>
		<td><?php echo $event['Event']['event_logo_url']; ?>&nbsp;</td>
		<td><?php echo $event['Event']['event_company']; ?>&nbsp;</td>
		<td><?php echo $event['Event']['active']; ?>&nbsp;</td>
		<td><?php echo $event['Event']['event_company_info']; ?>&nbsp;</td>
		<td><?php echo $event['Event']['theme_title']; ?>&nbsp;</td>
		<td><?php echo $event['Event']['theme_background']; ?>&nbsp;</td>
		<td><?php echo $event['Event']['theme_body']; ?>&nbsp;</td>
		<td><?php echo $event['Event']['theme_links']; ?>&nbsp;</td>
		<td><?php echo $event['Event']['created']; ?>&nbsp;</td>
		<td><?php echo $event['Event']['modified']; ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View', true), array('action' => 'view', $event['Event']['id'])); ?>
			<?php echo $this->Html->link(__('Edit', true), array('action' => 'edit', $event['Event']['id'])); ?>
			<?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $event['Event']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $event['Event']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Event', true), array('action' => 'add')); ?></li>
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