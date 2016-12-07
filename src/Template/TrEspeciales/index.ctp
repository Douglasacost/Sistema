<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Tr Especiale'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="trEspeciales index large-9 medium-8 columns content">
    <h3><?= __('Tr Especiales') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('C_SIT_ESP') ?></th>
                <th scope="col"><?= $this->Paginator->sort('N_SIT_ESP') ?></th>
                <th scope="col"><?= $this->Paginator->sort('N_INI_ESP') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($trEspeciales as $trEspeciale): ?>
            <tr>
                <td><?= $this->Number->format($trEspeciale->C_SIT_ESP) ?></td>
                <td><?= h($trEspeciale->N_SIT_ESP) ?></td>
                <td><?= h($trEspeciale->N_INI_ESP) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $trEspeciale->C_SIT_ESP]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $trEspeciale->C_SIT_ESP]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $trEspeciale->C_SIT_ESP], ['confirm' => __('Are you sure you want to delete # {0}?', $trEspeciale->C_SIT_ESP)]) ?>
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
