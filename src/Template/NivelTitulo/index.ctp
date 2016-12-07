<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Nivel Titulo'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="nivelTitulo index large-9 medium-8 columns content">
    <h3><?= __('Nivel Titulo') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('NIVEL') ?></th>
                <th scope="col"><?= $this->Paginator->sort('DESC') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($nivelTitulo as $nivelTitulo): ?>
            <tr>
                <td><?= $this->Number->format($nivelTitulo->NIVEL) ?></td>
                <td><?= h($nivelTitulo->DESC) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $nivelTitulo->NIVEL]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $nivelTitulo->NIVEL]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $nivelTitulo->NIVEL], ['confirm' => __('Are you sure you want to delete # {0}?', $nivelTitulo->NIVEL)]) ?>
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
