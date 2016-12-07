<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Ma Dpto'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="maDpto index large-9 medium-8 columns content">
    <h3><?= __('Ma Dpto') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('C_MA_DPT') ?></th>
                <th scope="col"><?= $this->Paginator->sort('C_EFED') ?></th>
                <th scope="col"><?= $this->Paginator->sort('N_MUAUDP') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($maDpto as $maDpto): ?>
            <tr>
                <td><?= $this->Number->format($maDpto->id) ?></td>
                <td><?= h($maDpto->C_MA_DPT) ?></td>
                <td><?= h($maDpto->C_EFED) ?></td>
                <td><?= h($maDpto->N_MUAUDP) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $maDpto->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $maDpto->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $maDpto->id], ['confirm' => __('Are you sure you want to delete # {0}?', $maDpto->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
        </ul>
        <p><?= $this->Paginator->counter() ?></p>
    </div>
</div>
