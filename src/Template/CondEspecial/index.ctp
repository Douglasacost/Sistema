<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Cond Especial'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="condEspecial index large-9 medium-8 columns content">
    <h3><?= __('Cond Especial') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('cedula') ?></th>
                <th scope="col"><?= $this->Paginator->sort('c_cond') ?></th>
                <th scope="col"><?= $this->Paginator->sort('c_cargo') ?></th>
                <th scope="col"><?= $this->Paginator->sort('feci_cargo') ?></th>
                <th scope="col"><?= $this->Paginator->sort('fecf_cargo') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($condEspecial as $condEspecial): ?>
            <tr>
                <td><?= $this->Number->format($condEspecial->id) ?></td>
                <td><?= $this->Number->format($condEspecial->cedula) ?></td>
                <td><?= $this->Number->format($condEspecial->c_cond) ?></td>
                <td><?= $this->Number->format($condEspecial->c_cargo) ?></td>
                <td><?= h($condEspecial->feci_cargo) ?></td>
                <td><?= h($condEspecial->fecf_cargo) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $condEspecial->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $condEspecial->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $condEspecial->id], ['confirm' => __('Are you sure you want to delete # {0}?', $condEspecial->id)]) ?>
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
