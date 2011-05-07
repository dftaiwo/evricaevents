<div class="eventsCategories view">
<h2><?php  __('Events Category');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $eventsCategory['EventsCategory']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Category'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $this->Html->link($eventsCategory['Category']['name'], array('controller' => 'categories', 'action' => 'view', $eventsCategory['Category']['id'])); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Event'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $this->Html->link($eventsCategory['Event']['name'], array('controller' => 'events', 'action' => 'view', $eventsCategory['Event']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Events Category', true), array('action' => 'edit', $eventsCategory['EventsCategory']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Delete Events Category', true), array('action' => 'delete', $eventsCategory['EventsCategory']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $eventsCategory['EventsCategory']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Events Categories', true), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Events Category', true), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Categories', true), array('controller' => 'categories', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Category', true), array('controller' => 'categories', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Events', true), array('controller' => 'events', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Event', true), array('controller' => 'events', 'action' => 'add')); ?> </li>
	</ul>
</div>
