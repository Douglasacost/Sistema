<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Tr Medio'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="trMedio index large-9 medium-8 columns content">
    <h3><?= __('Tr Medio') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('c_medio') ?></th>
                <th scope="col"><?= $this->Paginator->sort('desmedio') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($trMedio as $trMedio): ?>
            <tr>
                <td><?= $this->Number->format($trMedio->c_medio) ?></td>
                <td><?= h($trMedio->desmedio) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $trMedio->c_medio]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $trMedio->c_medio]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $trMedio->c_medio], ['confirm' => __('Are you sure you want to delete # {0}?', $trMedio->c_medio)]) ?>
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
