<div class="spreadsheetModels index">
	<h2><?php echo __('Spreadsheet Models'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('modified'); ?></th>
			<th><?php echo $this->Paginator->sort('atrributes'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
	foreach ($spreadsheetModels as $spreadsheetModel): ?>
	<tr>
		<td><?php echo h($spreadsheetModel['SpreadsheetModel']['id']); ?>&nbsp;</td>
		<td><?php echo h($spreadsheetModel['SpreadsheetModel']['created']); ?>&nbsp;</td>
		<td><?php echo h($spreadsheetModel['SpreadsheetModel']['modified']); ?>&nbsp;</td>
		<td><?php echo h($spreadsheetModel['SpreadsheetModel']['atrributes']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $spreadsheetModel['SpreadsheetModel']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $spreadsheetModel['SpreadsheetModel']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $spreadsheetModel['SpreadsheetModel']['id']), null, __('Are you sure you want to delete # %s?', $spreadsheetModel['SpreadsheetModel']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>

	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Spreadsheet Model'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Parties'), array('controller' => 'parties', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Party'), array('controller' => 'parties', 'action' => 'add')); ?> </li>
	</ul>
</div>
