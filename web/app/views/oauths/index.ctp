<div class="oauths index">
	<h2><?php __('Oauths');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('user_id');?></th>
			<th><?php echo $this->Paginator->sort('oauth_provider');?></th>
			<th><?php echo $this->Paginator->sort('oauth_uid');?></th>
			<th><?php echo $this->Paginator->sort('oauth_token');?></th>
			<th><?php echo $this->Paginator->sort('oauth_secret');?></th>
			<th><?php echo $this->Paginator->sort('username');?></th>
			<th><?php echo $this->Paginator->sort('created');?></th>
			<th><?php echo $this->Paginator->sort('modified');?></th>
			<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($oauths as $oauth):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
		<td><?php echo $oauth['Oauth']['id']; ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($oauth['User']['id'], array('controller' => 'users', 'action' => 'view', $oauth['User']['id'])); ?>
		</td>
		<td><?php echo $oauth['Oauth']['oauth_provider']; ?>&nbsp;</td>
		<td><?php echo $oauth['Oauth']['oauth_uid']; ?>&nbsp;</td>
		<td><?php echo $oauth['Oauth']['oauth_token']; ?>&nbsp;</td>
		<td><?php echo $oauth['Oauth']['oauth_secret']; ?>&nbsp;</td>
		<td><?php echo $oauth['Oauth']['username']; ?>&nbsp;</td>
		<td><?php echo $oauth['Oauth']['created']; ?>&nbsp;</td>
		<td><?php echo $oauth['Oauth']['modified']; ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View', true), array('action' => 'view', $oauth['Oauth']['id'])); ?>
			<?php echo $this->Html->link(__('Edit', true), array('action' => 'edit', $oauth['Oauth']['id'])); ?>
			<?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $oauth['Oauth']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $oauth['Oauth']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Oauth', true), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Users', true), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User', true), array('controller' => 'users', 'action' => 'add')); ?> </li>
	</ul>
</div>