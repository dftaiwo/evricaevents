<?php
/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

?>
<h2><?php  __('Event');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		 <dt<?php if ($i % 2 == 0) echo $class;?>><?php __('State'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $this->Html->link($eventInfo['State']['name'], array('controller' => 'states', 'action' => 'view', $eventInfo['State']['id'])); ?>
			&nbsp;
		</dd>
		 <dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Name'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $eventInfo['Event']['name']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Event Slug'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $eventInfo['Event']['event_slug']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Description'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $eventInfo['Event']['description']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Is Free'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo ($eventInfo['Event']['is_free'])? 'Yes':'Pay to Attend'; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Privacy'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo ($eventInfo['Event']['is_private'])? 'Hidden':'Not Private'; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Total Seats'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $eventInfo['Event']['total_seats']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Address'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $eventInfo['Event']['address']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Event Url'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $eventInfo['Event']['event_url']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Event Logo Url'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $eventInfo['Event']['event_logo_url']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Event Company'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $eventInfo['Event']['event_company']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Active'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo ($eventInfo['Event']['active'])? 'Yes':'No'; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Event Company Info'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $eventInfo['Event']['event_company_info']; ?>
			&nbsp;
		</dd>
		 
	</dl>
    <div class="actions">
        <ul>
            <li>
                <?php echo $this->Html->link('Edit Event',"editEvent/$eventId"); ?>
            </li>
        </ul>
    </div>
 
<div class="related">
	<h3><?php __('Related Event Dates');?></h3>
	<?php if (!empty($eventInfo['EventDate'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Id'); ?></th>
		<th><?php __('Event Id'); ?></th>
		<th><?php __('Start Date'); ?></th>
		<th><?php __('End Date'); ?></th>
		<th><?php __('Agenda'); ?></th>
		<th><?php __('Created'); ?></th>
		<th><?php __('Modified'); ?></th>
		<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($eventInfo['EventDate'] as $eventInfoDate):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $eventInfoDate['id'];?></td>
			<td><?php echo $eventInfoDate['event_id'];?></td>
			<td><?php echo $eventInfoDate['start_date'];?></td>
			<td><?php echo $eventInfoDate['end_date'];?></td>
			<td><?php echo $eventInfoDate['agenda'];?></td>
			<td><?php echo $eventInfoDate['created'];?></td>
			<td><?php echo $eventInfoDate['modified'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View', true), array('controller' => 'event_dates', 'action' => 'view', $eventInfoDate['id'])); ?>
				<?php echo $this->Html->link(__('Edit', true), array('controller' => 'event_dates', 'action' => 'edit', $eventInfoDate['id'])); ?>
				<?php echo $this->Html->link(__('Delete', true), array('controller' => 'event_dates', 'action' => 'delete', $eventInfoDate['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $eventInfoDate['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Event Date', true), array('controller' => 'event_dates', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php __('Related Event Images');?></h3>
	<?php if (!empty($eventInfo['EventImage'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Id'); ?></th>
		<th><?php __('Event Id'); ?></th>
		<th><?php __('Name'); ?></th>
		<th><?php __('Description'); ?></th>
		<th><?php __('Sort Order'); ?></th>
		<th><?php __('Photo Url'); ?></th>
		<th><?php __('Active'); ?></th>
		<th><?php __('Created'); ?></th>
		<th><?php __('Modified'); ?></th>
		<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($eventInfo['EventImage'] as $eventInfoImage):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $eventInfoImage['id'];?></td>
			<td><?php echo $eventInfoImage['event_id'];?></td>
			<td><?php echo $eventInfoImage['name'];?></td>
			<td><?php echo $eventInfoImage['description'];?></td>
			<td><?php echo $eventInfoImage['sort_order'];?></td>
			<td><?php echo $eventInfoImage['photo_url'];?></td>
			<td><?php echo $eventInfoImage['active'];?></td>
			<td><?php echo $eventInfoImage['created'];?></td>
			<td><?php echo $eventInfoImage['modified'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View', true), array('controller' => 'event_images', 'action' => 'view', $eventInfoImage['id'])); ?>
				<?php echo $this->Html->link(__('Edit', true), array('controller' => 'event_images', 'action' => 'edit', $eventInfoImage['id'])); ?>
				<?php echo $this->Html->link(__('Delete', true), array('controller' => 'event_images', 'action' => 'delete', $eventInfoImage['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $eventInfoImage['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Event Image', true), array('controller' => 'event_images', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php __('Related Event Seats');?></h3>
	<?php if (!empty($eventInfo['EventSeat'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Id'); ?></th>
		<th><?php __('Event Id'); ?></th>
		<th><?php __('Name'); ?></th>
		<th><?php __('Description'); ?></th>
		<th><?php __('Total Seats'); ?></th>
		<th><?php __('Fee'); ?></th>
		<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($eventInfo['EventSeat'] as $eventInfoSeat):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $eventInfoSeat['id'];?></td>
			<td><?php echo $eventInfoSeat['event_id'];?></td>
			<td><?php echo $eventInfoSeat['name'];?></td>
			<td><?php echo $eventInfoSeat['description'];?></td>
			<td><?php echo $eventInfoSeat['total_seats'];?></td>
			<td><?php echo $eventInfoSeat['fee'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View', true), array('controller' => 'event_seats', 'action' => 'view', $eventInfoSeat['id'])); ?>
				<?php echo $this->Html->link(__('Edit', true), array('controller' => 'event_seats', 'action' => 'edit', $eventInfoSeat['id'])); ?>
				<?php echo $this->Html->link(__('Delete', true), array('controller' => 'event_seats', 'action' => 'delete', $eventInfoSeat['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $eventInfoSeat['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Event Seat', true), array('controller' => 'event_seats', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php __('Related Event Speakers');?></h3>
	<?php if (!empty($eventInfo['EventSpeaker'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Id'); ?></th>
		<th><?php __('Event Id'); ?></th>
		<th><?php __('Name'); ?></th>
		<th><?php __('Profile'); ?></th>
		<th><?php __('Sort Order'); ?></th>
		<th><?php __('Created'); ?></th>
		<th><?php __('Modified'); ?></th>
		<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($eventInfo['EventSpeaker'] as $eventInfoSpeaker):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $eventInfoSpeaker['id'];?></td>
			<td><?php echo $eventInfoSpeaker['event_id'];?></td>
			<td><?php echo $eventInfoSpeaker['name'];?></td>
			<td><?php echo $eventInfoSpeaker['profile'];?></td>
			<td><?php echo $eventInfoSpeaker['sort_order'];?></td>
			<td><?php echo $eventInfoSpeaker['created'];?></td>
			<td><?php echo $eventInfoSpeaker['modified'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View', true), array('controller' => 'event_speakers', 'action' => 'view', $eventInfoSpeaker['id'])); ?>
				<?php echo $this->Html->link(__('Edit', true), array('controller' => 'event_speakers', 'action' => 'edit', $eventInfoSpeaker['id'])); ?>
				<?php echo $this->Html->link(__('Delete', true), array('controller' => 'event_speakers', 'action' => 'delete', $eventInfoSpeaker['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $eventInfoSpeaker['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Event Speaker', true), array('controller' => 'event_speakers', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>

<div class="related">
	<h3><?php __('Related Categories');?></h3>
	<?php if (!empty($eventInfo['Category'])):?>
		<?php
		$i = 0;
		foreach ($eventInfo['Category'] as $category):
			
		?>
			
			<?php echo $category['name'];?>,
	<?php endforeach; ?>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li>

                        </li>

		</ul>
	</div>
</div>
