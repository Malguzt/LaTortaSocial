<div class="scenes form">
  <?php echo $this->Form->create('Scene'); ?>
  <fieldset>
    <legend><?php echo __('Edit Scene'); ?></legend>
    <?php
    echo $this->Form->input('id');
    echo $this->Form->input('title', array('label' => 'Titulo'));
    echo $this->Form->input('description', array('label' => 'Descripción'));
    echo $this->Form->input('Character', array('label' => 'Personajes'));
    ?>
  </fieldset>
  <?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
  <h3><?php echo __('Actions'); ?></h3>
  <ul>
    <li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Scene.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Scene.id'))); ?></li>
    <li><?php echo $this->Html->link(__('List Scenes'), array('action' => 'index')); ?></li>
    <li><?php echo $this->Html->link(__('List Parties'), array('controller' => 'parties', 'action' => 'index')); ?> </li>
    <li><?php echo $this->Html->link(__('New Party'), array('controller' => 'parties', 'action' => 'add')); ?> </li>
    <li><?php echo $this->Html->link(__('List Posts'), array('controller' => 'posts', 'action' => 'index')); ?> </li>
    <li><?php echo $this->Html->link(__('New Post'), array('controller' => 'posts', 'action' => 'add')); ?> </li>
    <li><?php echo $this->Html->link(__('List Characters'), array('controller' => 'characters', 'action' => 'index')); ?> </li>
    <li><?php echo $this->Html->link(__('New Character'), array('controller' => 'characters', 'action' => 'add')); ?> </li>
  </ul>
</div>
