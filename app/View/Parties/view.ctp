<div class="parties view">
  <h2><?php echo h($party['Party']['title']); ?></h2>
  <dl>
    <dt><?php echo __('Descripción'); ?></dt>
    <dd>
      <?php echo h($party['Party']['description']); ?>
      &nbsp;
    </dd>
    <dt><?php echo __('Creada'); ?></dt>
    <dd>
      <?php echo h($party['Party']['created']); ?>
      &nbsp;
    </dd>
    <dt><?php echo __('Modelo de planilla'); ?></dt>
    <dd>
      <?php echo $this->Html->link($party['SpreadsheetModel']['id'], array('controller' => 'spreadsheet_models', 'action' => 'view', $party['SpreadsheetModel']['id'])); ?>
      &nbsp;
    </dd>
    <dt><?php echo __('El forro del master'); ?></dt>
    <dd>
      <?php echo $this->Html->link($party['User']['username'], array('controller' => 'users', 'action' => 'view', $party['User']['id'])); ?>
      &nbsp;
    </dd>
  </dl>
</div>
<nav>
  <ul>
    <li><?php echo $this->Html->link(__('Editar partida'), array('action' => 'edit', $party['Party']['id'])); ?> </li>
    <li><?php echo $this->Form->postLink(__('Borrar partida'), array('action' => 'delete', $party['Party']['id']), null, __('¿Estas seguro de borrar %s? No seas gil, no hay vuelta atras.', $party['Party']['title'])); ?> </li>
    <li><?php echo $this->Html->link(__('Partidas'), array('action' => 'index')); ?> </li>
    <li><?php echo $this->Html->link(__('Hacer otra partida'), array('action' => 'add')); ?> </li>
    <li><?php echo $this->Html->link(__('Modelo de planilla'), array('controller' => 'spreadsheet_models', 'action' => 'add')); ?> </li>
    <li><?php echo $this->Html->link(__('Escenas'), array('controller' => 'scenes', 'action' => 'index')); ?> </li>
    <li><?php echo $this->Html->link(__('Nueva escena'), array('controller' => 'scenes', 'action' => 'add')); ?> </li>
  </ul>
</nav>
<div class="related">
  <h3><?php echo __('Personajes'); ?></h3>
  <?php if (!empty($party['Character'])): ?>
    <table cellpadding = "0" cellspacing = "0">
      <tr>
        <th><?php echo __('Nombre'); ?></th>
        <th><?php echo __('Jugador'); ?></th>
      </tr>
      <?php
      $i = 0;
      foreach ($party['Character'] as $character):
        ?>
        <tr>
          <td><?php echo $this->Html->link($character['name'], array('controller' => 'characters', 'action' => 'view', $character['id'])); ?></td>
          <td><?php echo $character['user_id']; ?></td>
        </tr>
      <?php endforeach; ?>
    </table>
  <?php endif; ?>

  <div class="actions">
    <ul>
      <li><?php echo $this->Html->link(__('Nuevo personaje'), array('controller' => 'characters', 'action' => 'add')); ?> </li>
    </ul>
  </div>
</div>
<div class="related">
  <h3><?php echo __('Escenas'); ?></h3>
  <?php if (!empty($party['Scene'])): ?>
    <table cellpadding = "0" cellspacing = "0">
      <tr>
        <th><?php echo __('Titulo'); ?></th>
        <th><?php echo __('Description'); ?></th>
        <th class="actions"><?php echo __('Actions'); ?></th>
      </tr>
      <?php
      $i = 0;
      foreach ($party['Scene'] as $scene):
        ?>
        <h4><?php echo $this->Html->link($scene['title'], array('controller' => 'scenes', 'action' => 'view', $scene['id'])); ?></h4>
        <dl>
          <dt><?php echo __('Descripción'); ?></dt>
          <dd>
            <?php echo h($scene['description']); ?>
            &nbsp;
          </dd>
        </dl>
      <?php endforeach; ?>
    </table>
  <?php endif; ?>

  <div class="actions">
    <ul>
      <li><?php echo $this->Html->link(__('Nueva escena'), array('controller' => 'scenes', 'action' => 'add')); ?> </li>
    </ul>
  </div>
</div>
