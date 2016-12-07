<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Tr Tipclasi'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="trTipclasi index large-9 medium-8 columns content">
    <h3><?= __('Tr Tipclasi') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('c_clasi') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Desc_clas') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($trTipclasi as $trTipclasi): ?>
            <tr>
                <td><?= h($trTipclasi->c_clasi) ?></td>
                <td><?= h($trTipclasi->Desc_clas) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $trTipclasi->c_clasi]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $trTipclasi->c_clasi]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $trTipclasi->c_clasi], ['confirm' => __('Are you sure you want to delete # {0}?', $trTipclasi->c_clasi)]) ?>
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
