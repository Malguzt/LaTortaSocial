<div class="spreadsheetModels form">
<?php echo $this->Form->create('SpreadsheetModel'); ?>
	<fieldset>
		<legend><?php echo __('Add Spreadsheet Model'); ?></legend>
	<?php
		echo $this->Form->input('atrributes');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Spreadsheet Models'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Parties'), array('controller' => 'parties', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Party'), array('controller' => 'parties', 'action' => 'add')); ?> </li>
	</ul>
</div>
