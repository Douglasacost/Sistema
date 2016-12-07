<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Dat Car'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="datCar index large-9 medium-8 columns content">
    <h3><?= __('Dat Car') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('cedula') ?></th>
                <th scope="col"><?= $this->Paginator->sort('C_cargo') ?></th>
                <th scope="col"><?= $this->Paginator->sort('C_PLT') ?></th>
                <th scope="col"><?= $this->Paginator->sort('F_ING') ?></th>
                <th scope="col"><?= $this->Paginator->sort('c_moda') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Clasifi') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Cjerarquia') ?></th>
                <th scope="col"><?= $this->Paginator->sort('c_medio') ?></th>
                <th scope="col"><?= $this->Paginator->sort('C_SIP_ESP') ?></th>
                <th scope="col"><?= $this->Paginator->sort('tipo') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Periodo') ?></th>
                <th scope="col"><?= $this->Paginator->sort('comision') ?></th>
                <th scope="col"><?= $this->Paginator->sort('lugar') ?></th>
                <th scope="col"><?= $this->Paginator->sort('desde') ?></th>
                <th scope="col"><?= $this->Paginator->sort('hasta') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($datCar as $datCar): ?>
            <tr>
                <td><?= $this->Number->format($datCar->id) ?></td>
                <td><?= h($datCar->cedula) ?></td>
                <td><?= $this->Number->format($datCar->C_cargo) ?></td>
                <td><?= h($datCar->C_PLT) ?></td>
                <td><?= h($datCar->F_ING) ?></td>
                <td><?= h($datCar->c_moda) ?></td>
                <td><?= h($datCar->Clasifi) ?></td>
                <td><?= h($datCar->Cjerarquia) ?></td>
                <td><?= $this->Number->format($datCar->c_medio) ?></td>
                <td><?= $this->Number->format($datCar->C_SIP_ESP) ?></td>
                <td><?= $this->Number->format($datCar->tipo) ?></td>
                <td><?= h($datCar->Periodo) ?></td>
                <td><?= h($datCar->comision) ?></td>
                <td><?= h($datCar->lugar) ?></td>
                <td><?= h($datCar->desde) ?></td>
                <td><?= h($datCar->hasta) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $datCar->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $datCar->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $datCar->id], ['confirm' => __('Are you sure you want to delete # {0}?', $datCar->id)]) ?>
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
