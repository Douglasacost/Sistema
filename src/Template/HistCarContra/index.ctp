<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Hist Car Contra'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="histCarContra index large-9 medium-8 columns content">
    <h3><?= __('Hist Car Contra') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('cedula') ?></th>
                <th scope="col"><?= $this->Paginator->sort('C_cargo') ?></th>
                <th scope="col"><?= $this->Paginator->sort('c_ubic') ?></th>
                <th scope="col"><?= $this->Paginator->sort('C_PLT') ?></th>
                <th scope="col"><?= $this->Paginator->sort('c_medio') ?></th>
                <th scope="col"><?= $this->Paginator->sort('otra_ubi') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Desde') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Hasta') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Años') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Meses') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Dias') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Cancelo') ?></th>
                <th scope="col"><?= $this->Paginator->sort('tipo') ?></th>
                <th scope="col"><?= $this->Paginator->sort('orden') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Periodo') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($histCarContra as $histCarContra): ?>
            <tr>
                <td><?= $this->Number->format($histCarContra->id) ?></td>
                <td><?= h($histCarContra->cedula) ?></td>
                <td><?= $this->Number->format($histCarContra->C_cargo) ?></td>
                <td><?= $this->Number->format($histCarContra->c_ubic) ?></td>
                <td><?= h($histCarContra->C_PLT) ?></td>
                <td><?= $this->Number->format($histCarContra->c_medio) ?></td>
                <td><?= h($histCarContra->otra_ubi) ?></td>
                <td><?= h($histCarContra->Desde) ?></td>
                <td><?= h($histCarContra->Hasta) ?></td>
                <td><?= $this->Number->format($histCarContra->Años) ?></td>
                <td><?= $this->Number->format($histCarContra->Meses) ?></td>
                <td><?= $this->Number->format($histCarContra->Dias) ?></td>
                <td><?= $this->Number->format($histCarContra->Cancelo) ?></td>
                <td><?= $this->Number->format($histCarContra->tipo) ?></td>
                <td><?= $this->Number->format($histCarContra->orden) ?></td>
                <td><?= h($histCarContra->Periodo) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $histCarContra->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $histCarContra->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $histCarContra->id], ['confirm' => __('Are you sure you want to delete # {0}?', $histCarContra->id)]) ?>
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
