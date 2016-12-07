<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Edocivil'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="edocivil index large-9 medium-8 columns content">
    <h3><?= __('Edocivil') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('c_edociv') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Estadoc') ?></th>
                <th scope="col"><?= $this->Paginator->sort('SIG') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($edocivil as $edocivil): ?>
            <tr>
                <td><?= h($edocivil->c_edociv) ?></td>
                <td><?= h($edocivil->Estadoc) ?></td>
                <td><?= h($edocivil->SIG) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $edocivil->c_edociv]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $edocivil->c_edociv]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $edocivil->c_edociv], ['confirm' => __('Are you sure you want to delete # {0}?', $edocivil->c_edociv)]) ?>
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
