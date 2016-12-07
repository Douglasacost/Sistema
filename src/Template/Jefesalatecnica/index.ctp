<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Jefesalatecnica'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="jefesalatecnica index large-9 medium-8 columns content">
    <h3><?= __('Jefesalatecnica') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('Nombre') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Iniciales') ?></th>
                <th scope="col"><?= $this->Paginator->sort('estatus') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Cargo') ?></th>
                <th scope="col"><?= $this->Paginator->sort('usuario') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($jefesalatecnica as $jefesalatecnica): ?>
            <tr>
                <td><?= h($jefesalatecnica->Nombre) ?></td>
                <td><?= h($jefesalatecnica->Iniciales) ?></td>
                <td><?= h($jefesalatecnica->estatus) ?></td>
                <td><?= h($jefesalatecnica->Cargo) ?></td>
                <td><?= h($jefesalatecnica->usuario) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $jefesalatecnica->Nombre]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $jefesalatecnica->Nombre]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $jefesalatecnica->Nombre], ['confirm' => __('Are you sure you want to delete # {0}?', $jefesalatecnica->Nombre)]) ?>
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
