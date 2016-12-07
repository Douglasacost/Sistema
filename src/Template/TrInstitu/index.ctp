<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Tr Institu'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="trInstitu index large-9 medium-8 columns content">
    <h3><?= __('Tr Institu') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('c_inst') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Des_inst') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($trInstitu as $trInstitu): ?>
            <tr>
                <td><?= $this->Number->format($trInstitu->c_inst) ?></td>
                <td><?= h($trInstitu->Des_inst) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $trInstitu->c_inst]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $trInstitu->c_inst]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $trInstitu->c_inst], ['confirm' => __('Are you sure you want to delete # {0}?', $trInstitu->c_inst)]) ?>
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
