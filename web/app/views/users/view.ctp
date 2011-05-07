<div class="users view">
<h2><?php  __('User');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $user['User']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Username'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $user['User']['username']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Email'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $user['User']['email']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Passwd'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $user['User']['passwd']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('First Name'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $user['User']['first_name']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Last Name'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $user['User']['last_name']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Active'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $user['User']['active']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Created'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $user['User']['created']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Modified'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $user['User']['modified']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit User', true), array('action' => 'edit', $user['User']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Delete User', true), array('action' => 'delete', $user['User']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $user['User']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Users', true), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User', true), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Events', true), array('controller' => 'events', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Event', true), array('controller' => 'events', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Oauths', true), array('controller' => 'oauths', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Oauth', true), array('controller' => 'oauths', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Participants', true), array('controller' => 'participants', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Participant', true), array('controller' => 'participants', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php __('Related Events');?></h3>
	<?php if (!empty($user['Event'])):?>
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
		foreach ($user['Event'] as $event):
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
<div class="related">
	<h3><?php __('Related Oauths');?></h3>
	<?php if (!empty($user['Oauth'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Id'); ?></th>
		<th><?php __('User Id'); ?></th>
		<th><?php __('Oauth Provider'); ?></th>
		<th><?php __('Oauth Uid'); ?></th>
		<th><?php __('Oauth Token'); ?></th>
		<th><?php __('Oauth Secret'); ?></th>
		<th><?php __('Username'); ?></th>
		<th><?php __('Created'); ?></th>
		<th><?php __('Modified'); ?></th>
		<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($user['Oauth'] as $oauth):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $oauth['id'];?></td>
			<td><?php echo $oauth['user_id'];?></td>
			<td><?php echo $oauth['oauth_provider'];?></td>
			<td><?php echo $oauth['oauth_uid'];?></td>
			<td><?php echo $oauth['oauth_token'];?></td>
			<td><?php echo $oauth['oauth_secret'];?></td>
			<td><?php echo $oauth['username'];?></td>
			<td><?php echo $oauth['created'];?></td>
			<td><?php echo $oauth['modified'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View', true), array('controller' => 'oauths', 'action' => 'view', $oauth['id'])); ?>
				<?php echo $this->Html->link(__('Edit', true), array('controller' => 'oauths', 'action' => 'edit', $oauth['id'])); ?>
				<?php echo $this->Html->link(__('Delete', true), array('controller' => 'oauths', 'action' => 'delete', $oauth['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $oauth['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Oauth', true), array('controller' => 'oauths', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php __('Related Participants');?></h3>
	<?php if (!empty($user['Participant'])):?>
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
		foreach ($user['Participant'] as $participant):
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
