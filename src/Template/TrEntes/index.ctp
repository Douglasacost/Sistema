<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Tr Ente'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="trEntes index large-9 medium-8 columns content">
    <h3><?= __('Tr Entes') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('c_ente') ?></th>
                <th scope="col"><?= $this->Paginator->sort('des_ente') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($trEntes as $trEnte): ?>
            <tr>
                <td><?= $this->Number->format($trEnte->c_ente) ?></td>
                <td><?= h($trEnte->des_ente) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $trEnte->c_ente]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $trEnte->c_ente]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $trEnte->c_ente], ['confirm' => __('Are you sure you want to delete # {0}?', $trEnte->c_ente)]) ?>
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
