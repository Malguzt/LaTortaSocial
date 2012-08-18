<div class="spreadsheetModels view">
<h2><?php  echo __('Spreadsheet Model'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($spreadsheetModel['SpreadsheetModel']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($spreadsheetModel['SpreadsheetModel']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($spreadsheetModel['SpreadsheetModel']['modified']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Atrributes'); ?></dt>
		<dd>
			<?php echo h($spreadsheetModel['SpreadsheetModel']['atrributes']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Spreadsheet Model'), array('action' => 'edit', $spreadsheetModel['SpreadsheetModel']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Spreadsheet Model'), array('action' => 'delete', $spreadsheetModel['SpreadsheetModel']['id']), null, __('Are you sure you want to delete # %s?', $spreadsheetModel['SpreadsheetModel']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Spreadsheet Models'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Spreadsheet Model'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Parties'), array('controller' => 'parties', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Party'), array('controller' => 'parties', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Parties'); ?></h3>
	<?php if (!empty($spreadsheetModel['Party'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Title'); ?></th>
		<th><?php echo __('Description'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th><?php echo __('Spreadsheet Model Id'); ?></th>
		<th><?php echo __('User Id'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($spreadsheetModel['Party'] as $party): ?>
		<tr>
			<td><?php echo $party['id']; ?></td>
			<td><?php echo $party['title']; ?></td>
			<td><?php echo $party['description']; ?></td>
			<td><?php echo $party['created']; ?></td>
			<td><?php echo $party['modified']; ?></td>
			<td><?php echo $party['spreadsheet_model_id']; ?></td>
			<td><?php echo $party['user_id']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'parties', 'action' => 'view', $party['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'parties', 'action' => 'edit', $party['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'parties', 'action' => 'delete', $party['id']), null, __('Are you sure you want to delete # %s?', $party['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Party'), array('controller' => 'parties', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
