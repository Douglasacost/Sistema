<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Autoridad'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="autoridad index large-9 medium-8 columns content">
    <h3><?= __('Autoridad') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('nombre') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Cargo2') ?></th>
                <th scope="col"><?= $this->Paginator->sort('siglas') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($autoridad as $autoridad): ?>
            <tr>
                <td><?= h($autoridad->nombre) ?></td>
                <td><?= h($autoridad->Cargo2) ?></td>
                <td><?= h($autoridad->siglas) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $autoridad->Nombre]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $autoridad->Nombre]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $autoridad->Nombre], ['confirm' => __('Are you sure you want to delete # {0}?', $autoridad->Nombre)]) ?>
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
