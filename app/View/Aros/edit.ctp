<div class="aros form">
  <?php echo $this->Form->create('Aro'); ?>
  <fieldset>
    <legend><?php echo __('Edit Aro'); ?></legend>
    <?php
    echo $this->Form->input('id');
    echo $this->Form->input('parent_id');
    echo $this->Form->input('model');
    echo $this->Form->input('foreign_key');
    echo $this->Form->input('alias');
    ?>
  </fieldset>
  <?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
  <h3><?php echo __('Actions'); ?></h3>
  <ul>

    <li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Aro.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Aro.id'))); ?></li>
    <li><?php echo $this->Html->link(__('List Aros'), array('action' => 'index')); ?></li>
    <li><?php echo $this->Html->link(__('List Acos'), array('controller' => 'acos', 'action' => 'index')); ?> </li>
    <li><?php echo $this->Html->link(__('New Aco'), array('controller' => 'acos', 'action' => 'add')); ?> </li>
  </ul>
</div>
