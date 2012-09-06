<section class="users form">
  <?php echo $this->Session->flash('auth'); ?>
  <?php echo $this->Form->create('User'); ?>
  <fieldset>
    <legend><?php echo __('Entra, yo se que te va a gustar.'); ?></legend>
    <?php
    echo $this->Form->input('username');
    echo $this->Form->input('password');
    ?>
  </fieldset>
  <?php echo $this->Form->end(__('Entrar')); ?>
  <?php echo $this->Html->link(__('Unete a la resistencia'), array('controller' => 'Users', 'action' => 'add')); ?>
</section>