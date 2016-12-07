<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Dependen'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="dependen index large-9 medium-8 columns content">
    <h3><?= __('Dependen') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('C_DEPEN') ?></th>
                <th scope="col"><?= $this->Paginator->sort('N_DEPEN') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($dependen as $dependen): ?>
            <tr>
                <td><?= $this->Number->format($dependen->C_DEPEN) ?></td>
                <td><?= h($dependen->N_DEPEN) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $dependen->C_DEPEN]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $dependen->C_DEPEN]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $dependen->C_DEPEN], ['confirm' => __('Are you sure you want to delete # {0}?', $dependen->C_DEPEN)]) ?>
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
