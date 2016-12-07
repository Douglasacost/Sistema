<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Planteles2'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="planteles2 index large-9 medium-8 columns content">
    <h3><?= __('Planteles2') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('C_PLT') ?></th>
                <th scope="col"><?= $this->Paginator->sort('C_DEPEN') ?></th>
                <th scope="col"><?= $this->Paginator->sort('C_EFED') ?></th>
                <th scope="col"><?= $this->Paginator->sort('C_MUFOPQ') ?></th>
                <th scope="col"><?= $this->Paginator->sort('C_MA_DPT') ?></th>
                <th scope="col"><?= $this->Paginator->sort('N_PLT') ?></th>
                <th scope="col"><?= $this->Paginator->sort('DIRECC') ?></th>
                <th scope="col"><?= $this->Paginator->sort('RURALIDAD') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($planteles2 as $planteles2): ?>
            <tr>
                <td><?= h($planteles2->C_PLT) ?></td>
                <td><?= h($planteles2->C_DEPEN) ?></td>
                <td><?= h($planteles2->C_EFED) ?></td>
                <td><?= h($planteles2->C_MUFOPQ) ?></td>
                <td><?= h($planteles2->C_MA_DPT) ?></td>
                <td><?= h($planteles2->N_PLT) ?></td>
                <td><?= h($planteles2->DIRECC) ?></td>
                <td><?= h($planteles2->RURALIDAD) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $planteles2->C_PLT]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $planteles2->C_PLT]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $planteles2->C_PLT], ['confirm' => __('Are you sure you want to delete # {0}?', $planteles2->C_PLT)]) ?>
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
