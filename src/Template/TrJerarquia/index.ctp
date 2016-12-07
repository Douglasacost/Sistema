<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Tr Jerarquium'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="trJerarquia index large-9 medium-8 columns content">
    <h3><?= __('Tr Jerarquia') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('Cjerarquia') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Desjera') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($trJerarquia as $trJerarquium): ?>
            <tr>
                <td><?= h($trJerarquium->Cjerarquia) ?></td>
                <td><?= h($trJerarquium->Desjera) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $trJerarquium->Cjerarquia]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $trJerarquium->Cjerarquia]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $trJerarquium->Cjerarquia], ['confirm' => __('Are you sure you want to delete # {0}?', $trJerarquium->Cjerarquia)]) ?>
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
