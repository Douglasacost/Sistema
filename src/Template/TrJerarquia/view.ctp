<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Tr Jerarquium'), ['action' => 'edit', $trJerarquium->Cjerarquia]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Tr Jerarquium'), ['action' => 'delete', $trJerarquium->Cjerarquia], ['confirm' => __('Are you sure you want to delete # {0}?', $trJerarquium->Cjerarquia)]) ?> </li>
        <li><?= $this->Html->link(__('List Tr Jerarquia'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Tr Jerarquium'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="trJerarquia view large-9 medium-8 columns content">
    <h3><?= h($trJerarquium->Cjerarquia) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Cjerarquia') ?></th>
            <td><?= h($trJerarquium->Cjerarquia) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Desjera') ?></th>
            <td><?= h($trJerarquium->Desjera) ?></td>
        </tr>
    </table>
</div>
