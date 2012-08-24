<div class="parties form">
<?php echo $this->Form->create('Party'); ?>
	<fieldset>
		<legend><?php echo __('Edit Party'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('title');
		echo $this->Form->input('description');
		echo $this->Form->input('spreadsheet_model_id');
		echo $this->Form->input('user_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Party.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Party.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Parties'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Spreadsheet Models'), array('controller' => 'spreadsheet_models', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Spreadsheet Model'), array('controller' => 'spreadsheet_models', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Characters'), array('controller' => 'characters', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Character'), array('controller' => 'characters', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Scenes'), array('controller' => 'scenes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Scene'), array('controller' => 'scenes', 'action' => 'add')); ?> </li>
	</ul>
</div>
