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
        <?php endif; ?>
      </section>
    </header>
    <?php echo $this->Session->flash(); ?>

    <?php echo $this->fetch('content'); ?>
  </body>
</html>