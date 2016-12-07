<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Jefepersonal'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="jefepersonal index large-9 medium-8 columns content">
    <h3><?= __('Jefepersonal') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Nombre') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Iniciales') ?></th>
                <th scope="col"><?= $this->Paginator->sort('estatus') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Cargo') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($jefepersonal as $jefepersonal): ?>
            <tr>
                <td><?= $this->Number->format($jefepersonal->id) ?></td>
                <td><?= h($jefepersonal->Nombre) ?></td>
                <td><?= h($jefepersonal->Iniciales) ?></td>
                <td><?= h($jefepersonal->estatus) ?></td>
                <td><?= h($jefepersonal->Cargo) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $jefepersonal->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $jefepersonal->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $jefepersonal->id], ['confirm' => __('Are you sure you want to delete # {0}?', $jefepersonal->id)]) ?>
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
