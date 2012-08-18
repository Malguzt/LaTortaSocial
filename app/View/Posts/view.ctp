<div class="posts view">
<h2><?php  echo __('Post'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($post['Post']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Narration'); ?></dt>
		<dd>
			<?php echo h($post['Post']['narration']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Notes'); ?></dt>
		<dd>
			<?php echo h($post['Post']['notes']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Dice'); ?></dt>
		<dd>
			<?php echo h($post['Post']['dice']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Scene'); ?></dt>
		<dd>
			<?php echo $this->Html->link($post['Scene']['title'], array('controller' => 'scenes', 'action' => 'view', $post['Scene']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Character'); ?></dt>
		<dd>
			<?php echo $this->Html->link($post['Character']['name'], array('controller' => 'characters', 'action' => 'view', $post['Character']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Post'), array('action' => 'edit', $post['Post']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Post'), array('action' => 'delete', $post['Post']['id']), null, __('Are you sure you want to delete # %s?', $post['Post']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Posts'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Post'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Scenes'), array('controller' => 'scenes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Scene'), array('controller' => 'scenes', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Characters'), array('controller' => 'characters', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Character'), array('controller' => 'characters', 'action' => 'add')); ?> </li>
	</ul>
</div>
