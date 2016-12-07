<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New T Sexo'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="tSexo index large-9 medium-8 columns content">
    <h3><?= __('T Sexo') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('Sexo') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Nombre') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($tSexo as $tSexo): ?>
            <tr>
                <td><?= h($tSexo->Sexo) ?></td>
                <td><?= h($tSexo->Nombre) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $tSexo->Sexo]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $tSexo->Sexo]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $tSexo->Sexo], ['confirm' => __('Are you sure you want to delete # {0}?', $tSexo->Sexo)]) ?>
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
