<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Ma Dpto'), ['action' => 'edit', $maDpto->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Ma Dpto'), ['action' => 'delete', $maDpto->id], ['confirm' => __('Are you sure you want to delete # {0}?', $maDpto->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Ma Dpto'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Ma Dpto'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="maDpto view large-9 medium-8 columns content">
    <h3><?= h($maDpto->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('C MA DPT') ?></th>
            <td><?= h($maDpto->C_MA_DPT) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('C EFED') ?></th>
            <td><?= h($maDpto->C_EFED) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('N MUAUDP') ?></th>
            <td><?= h($maDpto->N_MUAUDP) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($maDpto->id) ?></td>
        </tr>
    </table>
</div>
