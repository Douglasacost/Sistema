<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Tr Cargo'), ['action' => 'edit', $trCargo->C_cargo]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Tr Cargo'), ['action' => 'delete', $trCargo->C_cargo], ['confirm' => __('Are you sure you want to delete # {0}?', $trCargo->C_cargo)]) ?> </li>
        <li><?= $this->Html->link(__('List Tr Cargo'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Tr Cargo'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="trCargo view large-9 medium-8 columns content">
    <h3><?= h($trCargo->C_cargo) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Cargo') ?></th>
            <td><?= h($trCargo->Cargo) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Personal') ?></th>
            <td><?= h($trCargo->Personal) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('C Cargo') ?></th>
            <td><?= $this->Number->format($trCargo->C_cargo) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Activo') ?></th>
            <td><?= $this->Number->format($trCargo->Activo) ?></td>
        </tr>
    </table>
</div>
