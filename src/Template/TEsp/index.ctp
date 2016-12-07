<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New T Esp'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="tEsp index large-9 medium-8 columns content">
    <h3><?= __('T Esp') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('cod_Tit') ?></th>
                <th scope="col"><?= $this->Paginator->sort('cod_Ar') ?></th>
                <th scope="col"><?= $this->Paginator->sort('cod_Esp') ?></th>
                <th scope="col"><?= $this->Paginator->sort('nombre_Esp') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($tEsp as $tEsp): ?>
            <tr>
                <td><?= $this->Number->format($tEsp->id) ?></td>
                <td><?= $this->Number->format($tEsp->cod_Tit) ?></td>
                <td><?= $this->Number->format($tEsp->cod_Ar) ?></td>
                <td><?= $this->Number->format($tEsp->cod_Esp) ?></td>
                <td><?= h($tEsp->nombre_Esp) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $tEsp->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $tEsp->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $tEsp->id], ['confirm' => __('Are you sure you want to delete # {0}?', $tEsp->id)]) ?>
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
