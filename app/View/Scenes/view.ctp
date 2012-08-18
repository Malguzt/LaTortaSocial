<div class="scenes view">
<h2><?php  echo __('Scene'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($scene['Scene']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Party'); ?></dt>
		<dd>
			<?php echo $this->Html->link($scene['Party']['title'], array('controller' => 'parties', 'action' => 'view', $scene['Party']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Title'); ?></dt>
		<dd>
			<?php echo h($scene['Scene']['title']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Description'); ?></dt>
		<dd>
			<?php echo h($scene['Scene']['description']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Scene'), array('action' => 'edit', $scene['Scene']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Scene'), array('action' => 'delete', $scene['Scene']['id']), null, __('Are you sure you want to delete # %s?', $scene['Scene']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Scenes'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Scene'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Parties'), array('controller' => 'parties', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Party'), array('controller' => 'parties', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Posts'), array('controller' => 'posts', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Post'), array('controller' => 'posts', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Characters'), array('controller' => 'characters', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Character'), array('controller' => 'characters', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Posts'); ?></h3>
	<?php if (!empty($scene['Post'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Narration'); ?></th>
		<th><?php echo __('Notes'); ?></th>
		<th><?php echo __('Dice'); ?></th>
		<th><?php echo __('Scene Id'); ?></th>
		<th><?php echo __('Character Id'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($scene['Post'] as $post): ?>
		<tr>
			<td><?php echo $post['id']; ?></td>
			<td><?php echo $post['narration']; ?></td>
			<td><?php echo $post['notes']; ?></td>
			<td><?php echo $post['dice']; ?></td>
			<td><?php echo $post['scene_id']; ?></td>
			<td><?php echo $post['character_id']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'posts', 'action' => 'view', $post['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'posts', 'action' => 'edit', $post['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'posts', 'action' => 'delete', $post['id']), null, __('Are you sure you want to delete # %s?', $post['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Post'), array('controller' => 'posts', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Characters'); ?></h3>
	<?php if (!empty($scene['Character'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Name'); ?></th>
		<th><?php echo __('History'); ?></th>
		<th><?php echo __('Attributes'); ?></th>
		<th><?php echo __('Party Id'); ?></th>
		<th><?php echo __('User Id'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($scene['Character'] as $character): ?>
		<tr>
			<td><?php echo $character['id']; ?></td>
			<td><?php echo $character['name']; ?></td>
			<td><?php echo $character['history']; ?></td>
			<td><?php echo $character['attributes']; ?></td>
			<td><?php echo $character['party_id']; ?></td>
			<td><?php echo $character['user_id']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'characters', 'action' => 'view', $character['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'characters', 'action' => 'edit', $character['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'characters', 'action' => 'delete', $character['id']), null, __('Are you sure you want to delete # %s?', $character['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Character'), array('controller' => 'characters', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
