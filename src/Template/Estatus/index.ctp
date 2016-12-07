<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Estatus'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="estatus index large-9 medium-8 columns content">
    <h3><?= __('Estatus') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('Codigo') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Cedula') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Estatus') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($estatus as $estatus): ?>
            <tr>
                <td><?= $this->Number->format($estatus->Codigo) ?></td>
                <td><?= $this->Number->format($estatus->Cedula) ?></td>
                <td><?= h($estatus->Estatus) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $estatus->Codigo]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $estatus->Codigo]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $estatus->Codigo], ['confirm' => __('Are you sure you want to delete # {0}?', $estatus->Codigo)]) ?>
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
