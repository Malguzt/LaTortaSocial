<div class="acos form">
  <?php echo $this->Form->create('Aco'); ?>
  <fieldset>
    <legend><?php echo __('Edit Aco'); ?></legend>
    <?php
    echo $this->Form->input('id');
    echo $this->Form->input('parent_id', array('options' => $parentAcos));
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

    <li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Aco.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Aco.id'))); ?></li>
    <li><?php echo $this->Html->link(__('List Acos'), array('action' => 'index')); ?></li>
    <li><?php echo $this->Html->link(__('List Acos'), array('controller' => 'acos', 'action' => 'index')); ?> </li>
    <li><?php echo $this->Html->link(__('New Parent Aco'), array('controller' => 'acos', 'action' => 'add')); ?> </li>
    <li><?php echo $this->Html->link(__('List Aros'), array('controller' => 'aros', 'action' => 'index')); ?> </li>
    <li><?php echo $this->Html->link(__('New Aro'), array('controller' => 'aros', 'action' => 'add')); ?> </li>
  </ul>
</div>
