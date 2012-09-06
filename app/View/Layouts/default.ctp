<html>
  <head>
    <title>fuente de múltiples elementos</title>
  </head>
  <body>
    <header>
      <section id="user">
        <?php // debug($this->Session->read()) ?>
        <?php if ($this->Session->read('Auth.User')): ?>
          <section>
            <?php echo $this->Html->link($this->Session->read('Auth.User.username'), array('controller' => 'Users', 'action' => 'view', $this->Session->read('Auth.User.id'))); ?><br />
            <?php echo $this->Html->link('Salir', '/Users/logout'); ?>
          </section>
        <?php endif; ?>
      </section>
    </header>
    <?php echo $this->Session->flash(); ?>

    <?php echo $this->fetch('content'); ?>
  </body>
</html>