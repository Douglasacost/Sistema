<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Entidad'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="entidad index large-9 medium-8 columns content">
    <h3><?= __('Entidad') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('C_EFED') ?></th>
                <th scope="col"><?= $this->Paginator->sort('N_EFED') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($entidad as $entidad): ?>
            <tr>
                <td><?= h($entidad->C_EFED) ?></td>
                <td><?= h($entidad->N_EFED) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $entidad->C_EFED]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $entidad->C_EFED]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $entidad->C_EFED], ['confirm' => __('Are you sure you want to delete # {0}?', $entidad->C_EFED)]) ?>
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
