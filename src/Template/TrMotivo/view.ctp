<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Tr Motivo'), ['action' => 'edit', $trMotivo->c_motiv]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Tr Motivo'), ['action' => 'delete', $trMotivo->c_motiv], ['confirm' => __('Are you sure you want to delete # {0}?', $trMotivo->c_motiv)]) ?> </li>
        <li><?= $this->Html->link(__('List Tr Motivo'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Tr Motivo'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="trMotivo view large-9 medium-8 columns content">
    <h3><?= h($trMotivo->c_motiv) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Des Motiv') ?></th>
            <td><?= h($trMotivo->des_motiv) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('C Motiv') ?></th>
            <td><?= $this->Number->format($trMotivo->c_motiv) ?></td>
        </tr>
    </table>
</div>
