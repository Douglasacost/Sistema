<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Tr Modalida'), ['action' => 'edit', $trModalida->C_moda]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Tr Modalida'), ['action' => 'delete', $trModalida->C_moda], ['confirm' => __('Are you sure you want to delete # {0}?', $trModalida->C_moda)]) ?> </li>
        <li><?= $this->Html->link(__('List Tr Modalida'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Tr Modalida'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="trModalida view large-9 medium-8 columns content">
    <h3><?= h($trModalida->C_moda) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('C Moda') ?></th>
            <td><?= h($trModalida->C_moda) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Des Modali') ?></th>
            <td><?= h($trModalida->des_modali) ?></td>
        </tr>
    </table>
</div>
