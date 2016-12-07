<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Jefesalatecnica'), ['action' => 'edit', $jefesalatecnica->Nombre]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Jefesalatecnica'), ['action' => 'delete', $jefesalatecnica->Nombre], ['confirm' => __('Are you sure you want to delete # {0}?', $jefesalatecnica->Nombre)]) ?> </li>
        <li><?= $this->Html->link(__('List Jefesalatecnica'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Jefesalatecnica'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="jefesalatecnica view large-9 medium-8 columns content">
    <h3><?= h($jefesalatecnica->Nombre) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Nombre') ?></th>
            <td><?= h($jefesalatecnica->Nombre) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Iniciales') ?></th>
            <td><?= h($jefesalatecnica->Iniciales) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Estatus') ?></th>
            <td><?= h($jefesalatecnica->estatus) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Cargo') ?></th>
            <td><?= h($jefesalatecnica->Cargo) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Usuario') ?></th>
            <td><?= h($jefesalatecnica->usuario) ?></td>
        </tr>
    </table>
</div>
