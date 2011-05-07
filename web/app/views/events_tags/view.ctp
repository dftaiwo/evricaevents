<div class="eventsTags view">
<h2><?php  __('Events Tag');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $eventsTag['EventsTag']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Tag'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $this->Html->link($eventsTag['Tag']['name'], array('controller' => 'tags', 'action' => 'view', $eventsTag['Tag']['id'])); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Event'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $this->Html->link($eventsTag['Event']['name'], array('controller' => 'events', 'action' => 'view', $eventsTag['Event']['id'])); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Agenda'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $eventsTag['EventsTag']['agenda']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Events Tag', true), array('action' => 'edit', $eventsTag['EventsTag']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Delete Events Tag', true), array('action' => 'delete', $eventsTag['EventsTag']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $eventsTag['EventsTag']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Events Tags', true), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Events Tag', true), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Tags', true), array('controller' => 'tags', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Tag', true), array('controller' => 'tags', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Events', true), array('controller' => 'events', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Event', true), array('controller' => 'events', 'action' => 'add')); ?> </li>
	</ul>
</div>
