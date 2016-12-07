<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Tr Institu'), ['action' => 'edit', $trInstitu->c_inst]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Tr Institu'), ['action' => 'delete', $trInstitu->c_inst], ['confirm' => __('Are you sure you want to delete # {0}?', $trInstitu->c_inst)]) ?> </li>
        <li><?= $this->Html->link(__('List Tr Institu'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Tr Institu'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="trInstitu view large-9 medium-8 columns content">
    <h3><?= h($trInstitu->c_inst) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Des Inst') ?></th>
            <td><?= h($trInstitu->Des_inst) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('C Inst') ?></th>
            <td><?= $this->Number->format($trInstitu->c_inst) ?></td>
        </tr>
    </table>
</div>
