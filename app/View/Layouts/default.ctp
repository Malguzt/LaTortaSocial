<html>
  <head>
    <title>fuente de múltiples elementos</title>
  </head>
  <body>
    <header>
      <section id="user">
        <?php // debug($this->Session->read()) ?>
        <?php if ($this->Session->read('Auth.User')): ?>
          <?php echo $this->Html->link('Salir', '/Users/logout'); ?>
        <?php else: ?>
          <section class="users form">
            <?php echo $this->Session->flash('auth'); ?>
            <?php echo $this->Form->create('User'); ?>
            <fieldset>
              <legend><?php echo __('Please enter your username and password'); ?></legend>
              <?php
              echo $this->Form->input('username');
              echo $this->Form->input('password');
              ?>
            </fieldset>
            <?php echo $this->Form->end(__('Login')); ?>
          </section>
        <?php endif; ?>
      </section>
    </header>
    <?php echo $this->Session->flash(); ?>

    <?php echo $this->fetch('content'); ?>
  </body>
</html>