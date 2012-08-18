<div class="aros view">
<h2><?php  echo __('Aro'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($aro['Aro']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Parent Id'); ?></dt>
		<dd>
			<?php echo h($aro['Aro']['parent_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Model'); ?></dt>
		<dd>
			<?php echo h($aro['Aro']['model']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Foreign Key'); ?></dt>
		<dd>
			<?php echo h($aro['Aro']['foreign_key']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Alias'); ?></dt>
		<dd>
			<?php echo h($aro['Aro']['alias']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Lft'); ?></dt>
		<dd>
			<?php echo h($aro['Aro']['lft']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Rght'); ?></dt>
		<dd>
			<?php echo h($aro['Aro']['rght']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Aro'), array('action' => 'edit', $aro['Aro']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Aro'), array('action' => 'delete', $aro['Aro']['id']), null, __('Are you sure you want to delete # %s?', $aro['Aro']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Aros'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Aro'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Acos'), array('controller' => 'acos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Aco'), array('controller' => 'acos', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Acos'); ?></h3>
	<?php if (!empty($aro['Aco'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Parent Id'); ?></th>
		<th><?php echo __('Model'); ?></th>
		<th><?php echo __('Foreign Key'); ?></th>
		<th><?php echo __('Alias'); ?></th>
		<th><?php echo __('Lft'); ?></th>
		<th><?php echo __('Rght'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($aro['Aco'] as $aco): ?>
		<tr>
			<td><?php echo $aco['id']; ?></td>
			<td><?php echo $aco['parent_id']; ?></td>
			<td><?php echo $aco['model']; ?></td>
			<td><?php echo $aco['foreign_key']; ?></td>
			<td><?php echo $aco['alias']; ?></td>
			<td><?php echo $aco['lft']; ?></td>
			<td><?php echo $aco['rght']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'acos', 'action' => 'view', $aco['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'acos', 'action' => 'edit', $aco['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'acos', 'action' => 'delete', $aco['id']), null, __('Are you sure you want to delete # %s?', $aco['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Aco'), array('controller' => 'acos', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
