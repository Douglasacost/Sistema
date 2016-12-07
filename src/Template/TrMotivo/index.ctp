<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Tr Motivo'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="trMotivo index large-9 medium-8 columns content">
    <h3><?= __('Tr Motivo') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('c_motiv') ?></th>
                <th scope="col"><?= $this->Paginator->sort('des_motiv') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($trMotivo as $trMotivo): ?>
            <tr>
                <td><?= $this->Number->format($trMotivo->c_motiv) ?></td>
                <td><?= h($trMotivo->des_motiv) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $trMotivo->c_motiv]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $trMotivo->c_motiv]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $trMotivo->c_motiv], ['confirm' => __('Are you sure you want to delete # {0}?', $trMotivo->c_motiv)]) ?>
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
