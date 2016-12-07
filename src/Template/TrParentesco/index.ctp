<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Tr Parentesco'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="trParentesco index large-9 medium-8 columns content">
    <h3><?= __('Tr Parentesco') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('C_paren') ?></th>
                <th scope="col"><?= $this->Paginator->sort('desparen') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($trParentesco as $trParentesco): ?>
            <tr>
                <td><?= $this->Number->format($trParentesco->C_paren) ?></td>
                <td><?= h($trParentesco->desparen) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $trParentesco->C_paren]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $trParentesco->C_paren]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $trParentesco->C_paren], ['confirm' => __('Are you sure you want to delete # {0}?', $trParentesco->C_paren)]) ?>
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
