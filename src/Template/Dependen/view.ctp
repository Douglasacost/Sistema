<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Dependen'), ['action' => 'edit', $dependen->C_DEPEN]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Dependen'), ['action' => 'delete', $dependen->C_DEPEN], ['confirm' => __('Are you sure you want to delete # {0}?', $dependen->C_DEPEN)]) ?> </li>
        <li><?= $this->Html->link(__('List Dependen'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Dependen'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="dependen view large-9 medium-8 columns content">
    <h3><?= h($dependen->C_DEPEN) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('N DEPEN') ?></th>
            <td><?= h($dependen->N_DEPEN) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('C DEPEN') ?></th>
            <td><?= $this->Number->format($dependen->C_DEPEN) ?></td>
        </tr>
    </table>
</div>
