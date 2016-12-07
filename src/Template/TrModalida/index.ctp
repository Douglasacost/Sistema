<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Tr Modalida'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="trModalida index large-9 medium-8 columns content">
    <h3><?= __('Tr Modalida') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('C_moda') ?></th>
                <th scope="col"><?= $this->Paginator->sort('des_modali') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($trModalida as $trModalida): ?>
            <tr>
                <td><?= h($trModalida->C_moda) ?></td>
                <td><?= h($trModalida->des_modali) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $trModalida->C_moda]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $trModalida->C_moda]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $trModalida->C_moda], ['confirm' => __('Are you sure you want to delete # {0}?', $trModalida->C_moda)]) ?>
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
