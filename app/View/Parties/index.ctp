<div class="parties index">
  <h2><?php echo __('Parties'); ?></h2>
  <table cellpadding="0" cellspacing="0">
    <tr>
      <th><?php echo $this->Paginator->sort('title', 'Titulo'); ?></th>
      <th><?php echo $this->Paginator->sort('created', 'Creada'); ?></th>
      <th><?php echo $this->Paginator->sort('user_id', 'Master'); ?></th>
    </tr>
    <?php foreach ($parties as $party): ?>
      <tr>
        <td><?php echo $this->Html->link($party['Party']['title'], array('action' => 'view', $party['Party']['id'])); ?></td>
        <td><?php echo h($party['Party']['created']); ?>&nbsp;</td>
        <td>
          <?php echo $this->Html->link($party['User']['username'], array('controller' => 'users', 'action' => 'view', $party['User']['id'])); ?>
        </td>
      </tr>
    <?php endforeach; ?>
  </table>
  <p>
    <?php
    echo $this->Paginator->counter(array(
        'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
    ));
    ?>	</p>

  <div class="paging">
    <?php
    echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
    echo $this->Paginator->numbers(array('separator' => ''));
    echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
    ?>
  </div>
</div>
<nav>
  <ul>
    <li><?php echo $this->Html->link(__('Nueva partida'), array('action' => 'add')); ?></li>
    <li><?php echo $this->Html->link(__('Inicio'), '/'); ?></li>
  </ul>
</nav>
