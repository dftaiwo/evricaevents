<div class="oauths form">
<?php echo $this->Form->create('Oauth');?>
	<fieldset>
		<legend><?php __('Edit Oauth'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('user_id');
		echo $this->Form->input('oauth_provider');
		echo $this->Form->input('oauth_uid');
		echo $this->Form->input('oauth_token');
		echo $this->Form->input('oauth_secret');
		echo $this->Form->input('username');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $this->Form->value('Oauth.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $this->Form->value('Oauth.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Oauths', true), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Users', true), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User', true), array('controller' => 'users', 'action' => 'add')); ?> </li>
	</ul>
</div>