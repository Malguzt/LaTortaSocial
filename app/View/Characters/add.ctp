<div class="characters form">
  <?php echo $this->Form->create('Character'); ?>
  <fieldset>
    <legend><?php echo __('Nuevo personaje'); ?></legend>
    <?php
    echo $this->Form->input('name', array('label' => 'Nombre'));
    echo $this->Form->input('history', array('label' => 'Historia'));
    echo $this->Form->input('attributes', array('label' => 'Atributos'));
    echo $this->Form->input('user_id', array('label' => 'Jugador'));
    echo $this->Form->input('Scene', array('label' => 'Escenas'));
    ?>
  </fieldset>
  <?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
  <h3><?php echo __('Acciones'); ?></h3>
  <ul>
    <li><?php echo $this->Html->link(__('List Parties'), array('controller' => 'parties', 'action' => 'index')); ?> </li>
    <li><?php echo $this->Html->link(__('Nueva partida'), array('controller' => 'parties', 'action' => 'add')); ?> </li>
    <li><?php echo $this->Html->link(__('Escenas'), array('controller' => 'scenes', 'action' => 'index')); ?> </li>
  </ul>
</div>
