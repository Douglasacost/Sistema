<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Mf Pquium'), ['action' => 'edit', $mfPquium->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Mf Pquium'), ['action' => 'delete', $mfPquium->id], ['confirm' => __('Are you sure you want to delete # {0}?', $mfPquium->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Mf Pquia'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Mf Pquium'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="mfPquia view large-9 medium-8 columns content">
    <h3><?= h($mfPquium->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('COD ENTIDAD') ?></th>
            <td><?= h($mfPquium->COD_ENTIDAD) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('C MA DPT') ?></th>
            <td><?= h($mfPquium->C_MA_DPT) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('C MUFOPQ') ?></th>
            <td><?= h($mfPquium->C_MUFOPQ) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('N MUFOPQ') ?></th>
            <td><?= h($mfPquium->N_MUFOPQ) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($mfPquium->id) ?></td>
        </tr>
    </table>
</div>
