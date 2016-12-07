<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Mf Pquium'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="mfPquia index large-9 medium-8 columns content">
    <h3><?= __('Mf Pquia') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('COD_ENTIDAD') ?></th>
                <th scope="col"><?= $this->Paginator->sort('C_MA_DPT') ?></th>
                <th scope="col"><?= $this->Paginator->sort('C_MUFOPQ') ?></th>
                <th scope="col"><?= $this->Paginator->sort('N_MUFOPQ') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($mfPquia as $mfPquium): ?>
            <tr>
                <td><?= $this->Number->format($mfPquium->id) ?></td>
                <td><?= h($mfPquium->COD_ENTIDAD) ?></td>
                <td><?= h($mfPquium->C_MA_DPT) ?></td>
                <td><?= h($mfPquium->C_MUFOPQ) ?></td>
                <td><?= h($mfPquium->N_MUFOPQ) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $mfPquium->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $mfPquium->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $mfPquium->id], ['confirm' => __('Are you sure you want to delete # {0}?', $mfPquium->id)]) ?>
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
