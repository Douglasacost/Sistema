<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Estatus'), ['action' => 'edit', $estatus->Codigo]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Estatus'), ['action' => 'delete', $estatus->Codigo], ['confirm' => __('Are you sure you want to delete # {0}?', $estatus->Codigo)]) ?> </li>
        <li><?= $this->Html->link(__('List Estatus'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Estatus'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="estatus view large-9 medium-8 columns content">
    <h3><?= h($estatus->Codigo) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Estatus') ?></th>
            <td><?= h($estatus->Estatus) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Codigo') ?></th>
            <td><?= $this->Number->format($estatus->Codigo) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Cedula') ?></th>
            <td><?= $this->Number->format($estatus->Cedula) ?></td>
        </tr>
    </table>
</div>
