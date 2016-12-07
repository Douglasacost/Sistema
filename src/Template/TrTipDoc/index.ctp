<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Tr Tip Doc'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="trTipDoc index large-9 medium-8 columns content">
    <h3><?= __('Tr Tip Doc') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('c_catdoc') ?></th>
                <th scope="col"><?= $this->Paginator->sort('c_doc') ?></th>
                <th scope="col"><?= $this->Paginator->sort('desc_doc') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($trTipDoc as $trTipDoc): ?>
            <tr>
                <td><?= $this->Number->format($trTipDoc->id) ?></td>
                <td><?= $this->Number->format($trTipDoc->c_catdoc) ?></td>
                <td><?= $this->Number->format($trTipDoc->c_doc) ?></td>
                <td><?= h($trTipDoc->desc_doc) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $trTipDoc->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $trTipDoc->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $trTipDoc->id], ['confirm' => __('Are you sure you want to delete # {0}?', $trTipDoc->id)]) ?>
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
