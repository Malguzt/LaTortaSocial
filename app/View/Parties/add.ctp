<div class="parties form">
  <?php echo $this->Form->create('Party'); ?>
  <fieldset>
    <legend><?php echo __('Nueva partida'); ?></legend>
    <?php
    echo $this->Form->input('title', array('label' => 'Titulo'));
    echo $this->Form->input('description', array('label' => 'Descripción'));
    echo $this->Form->input('user_id', array('type' => 'hidden', 'value' => $this->Session->read('Auth.User.id')));
    ?>
  </fieldset>
  <?php echo $this->Form->end(__('Submit')); ?>
</div>
<nav>
  <ul>
    <li><?php echo $this->Html->link(__('Partidas'), array('action' => 'index')); ?></li>
  </ul>
</nav>
