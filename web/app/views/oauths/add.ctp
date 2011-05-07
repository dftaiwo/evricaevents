<div class="oauths form">
<?php echo $this->Form->create('Oauth');?>
	<fieldset>
		<legend><?php __('Add Oauth'); ?></legend>
	<?php
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

		<li><?php echo $this->Html->link(__('List Oauths', true), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Users', true), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User', true), array('controller' => 'users', 'action' => 'add')); ?> </li>
	</ul>
</div>