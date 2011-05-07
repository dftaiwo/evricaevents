<div class="states view">
<h2><?php  __('State');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $state['State']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Country'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $this->Html->link($state['Country']['name'], array('controller' => 'countries', 'action' => 'view', $state['Country']['id'])); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Name'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $state['State']['name']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit State', true), array('action' => 'edit', $state['State']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Delete State', true), array('action' => 'delete', $state['State']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $state['State']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List States', true), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New State', true), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Countries', true), array('controller' => 'countries', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Country', true), array('controller' => 'countries', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Events', true), array('controller' => 'events', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Event', true), array('controller' => 'events', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php __('Related Events');?></h3>
	<?php if (!empty($state['Event'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Id'); ?></th>
		<th><?php __('State Id'); ?></th>
		<th><?php __('User Id'); ?></th>
		<th><?php __('Name'); ?></th>
		<th><?php __('Event Slug'); ?></th>
		<th><?php __('Description'); ?></th>
		<th><?php __('Is Free'); ?></th>
		<th><?php __('Is Private'); ?></th>
		<th><?php __('Total Seats'); ?></th>
		<th><?php __('Address'); ?></th>
		<th><?php __('Gps Coords'); ?></th>
		<th><?php __('Event Url'); ?></th>
		<th><?php __('Event Logo Url'); ?></th>
		<th><?php __('Event Company'); ?></th>
		<th><?php __('Active'); ?></th>
		<th><?php __('Event Company Info'); ?></th>
		<th><?php __('Theme Title'); ?></th>
		<th><?php __('Theme Background'); ?></th>
		<th><?php __('Theme Body'); ?></th>
		<th><?php __('Theme Links'); ?></th>
		<th><?php __('Created'); ?></th>
		<th><?php __('Modified'); ?></th>
		<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($state['Event'] as $event):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $event['id'];?></td>
			<td><?php echo $event['state_id'];?></td>
			<td><?php echo $event['user_id'];?></td>
			<td><?php echo $event['name'];?></td>
			<td><?php echo $event['event_slug'];?></td>
			<td><?php echo $event['description'];?></td>
			<td><?php echo $event['is_free'];?></td>
			<td><?php echo $event['is_private'];?></td>
			<td><?php echo $event['total_seats'];?></td>
			<td><?php echo $event['address'];?></td>
			<td><?php echo $event['gps_coords'];?></td>
			<td><?php echo $event['event_url'];?></td>
			<td><?php echo $event['event_logo_url'];?></td>
			<td><?php echo $event['event_company'];?></td>
			<td><?php echo $event['active'];?></td>
			<td><?php echo $event['event_company_info'];?></td>
			<td><?php echo $event['theme_title'];?></td>
			<td><?php echo $event['theme_background'];?></td>
			<td><?php echo $event['theme_body'];?></td>
			<td><?php echo $event['theme_links'];?></td>
			<td><?php echo $event['created'];?></td>
			<td><?php echo $event['modified'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View', true), array('controller' => 'events', 'action' => 'view', $event['id'])); ?>
				<?php echo $this->Html->link(__('Edit', true), array('controller' => 'events', 'action' => 'edit', $event['id'])); ?>
				<?php echo $this->Html->link(__('Delete', true), array('controller' => 'events', 'action' => 'delete', $event['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $event['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Event', true), array('controller' => 'events', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
