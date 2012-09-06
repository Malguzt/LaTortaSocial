<div class="characters form">
<?php echo $this->Form->create('Character'); ?>
	<fieldset>
		<legend><?php echo __('Edit Character'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('name');
		echo $this->Form->input('history');
		echo $this->Form->input('attributes');
		echo $this->Form->input('party_id');
		echo $this->Form->input('user_id');
		echo $this->Form->input('Scene');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Character.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Character.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Characters'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Parties'), array('controller' => 'parties', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Party'), array('controller' => 'parties', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Posts'), array('controller' => 'posts', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Post'), array('controller' => 'posts', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Scenes'), array('controller' => 'scenes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Scene'), array('controller' => 'scenes', 'action' => 'add')); ?> </li>
	</ul>
</div>
