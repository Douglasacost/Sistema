<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Area Apli'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="areaApli index large-9 medium-8 columns content">
    <h3><?= __('Area Apli') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('cod_Tit') ?></th>
                <th scope="col"><?= $this->Paginator->sort('cod_Area') ?></th>
                <th scope="col"><?= $this->Paginator->sort('nombre_Area') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($areaApli as $areaApli): ?>
            <tr>
                <td><?= $this->Number->format($areaApli->id) ?></td>
                <td><?= $this->Number->format($areaApli->cod_Tit) ?></td>
                <td><?= $this->Number->format($areaApli->cod_Area) ?></td>
                <td><?= h($areaApli->nombre_Area) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $areaApli->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $areaApli->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $areaApli->id], ['confirm' => __('Are you sure you want to delete # {0}?', $areaApli->id)]) ?>
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
