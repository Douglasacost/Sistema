<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Entidad'), ['action' => 'edit', $entidad->C_EFED]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Entidad'), ['action' => 'delete', $entidad->C_EFED], ['confirm' => __('Are you sure you want to delete # {0}?', $entidad->C_EFED)]) ?> </li>
        <li><?= $this->Html->link(__('List Entidad'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Entidad'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="entidad view large-9 medium-8 columns content">
    <h3><?= h($entidad->C_EFED) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('C EFED') ?></th>
            <td><?= h($entidad->C_EFED) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('N EFED') ?></th>
            <td><?= h($entidad->N_EFED) ?></td>
        </tr>
    </table>
</div>
