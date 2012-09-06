<div class="characters view">
<h2><?php  echo __('Character'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($character['Character']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($character['Character']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('History'); ?></dt>
		<dd>
			<?php echo h($character['Character']['history']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Attributes'); ?></dt>
		<dd>
			<?php echo h($character['Character']['attributes']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Party'); ?></dt>
		<dd>
			<?php echo $this->Html->link($character['Party']['title'], array('controller' => 'parties', 'action' => 'view', $character['Party']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('User'); ?></dt>
		<dd>
			<?php echo $this->Html->link($character['User']['username'], array('controller' => 'users', 'action' => 'view', $character['User']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Character'), array('action' => 'edit', $character['Character']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Character'), array('action' => 'delete', $character['Character']['id']), null, __('Are you sure you want to delete # %s?', $character['Character']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Characters'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Character'), array('action' => 'add')); ?> </li>
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
<div class="related">
	<h3><?php echo __('Related Posts'); ?></h3>
	<?php if (!empty($character['Post'])): ?>
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
		foreach ($character['Post'] as $post): ?>
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
	<h3><?php echo __('Related Scenes'); ?></h3>
	<?php if (!empty($character['Scene'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Party Id'); ?></th>
		<th><?php echo __('Title'); ?></th>
		<th><?php echo __('Description'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($character['Scene'] as $scene): ?>
		<tr>
			<td><?php echo $scene['id']; ?></td>
			<td><?php echo $scene['party_id']; ?></td>
			<td><?php echo $scene['title']; ?></td>
			<td><?php echo $scene['description']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'scenes', 'action' => 'view', $scene['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'scenes', 'action' => 'edit', $scene['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'scenes', 'action' => 'delete', $scene['id']), null, __('Are you sure you want to delete # %s?', $scene['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Scene'), array('controller' => 'scenes', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
