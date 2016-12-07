<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Rep Hijo'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="repHijos index large-9 medium-8 columns content">
    <h3><?= __('Rep Hijos') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('CED') ?></th>
                <th scope="col"><?= $this->Paginator->sort('NOMBRE') ?></th>
                <th scope="col"><?= $this->Paginator->sort('CEDF') ?></th>
                <th scope="col"><?= $this->Paginator->sort('NOMBREF') ?></th>
                <th scope="col"><?= $this->Paginator->sort('FEC_NAC') ?></th>
                <th scope="col"><?= $this->Paginator->sort('EDAD') ?></th>
                <th scope="col"><?= $this->Paginator->sort('tipo') ?></th>
                <th scope="col"><?= $this->Paginator->sort('cond') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($repHijos as $repHijo): ?>
            <tr>
                <td><?= $this->Number->format($repHijo->id) ?></td>
                <td><?= $this->Number->format($repHijo->CED) ?></td>
                <td><?= h($repHijo->NOMBRE) ?></td>
                <td><?= h($repHijo->CEDF) ?></td>
                <td><?= h($repHijo->NOMBREF) ?></td>
                <td><?= h($repHijo->FEC_NAC) ?></td>
                <td><?= $this->Number->format($repHijo->EDAD) ?></td>
                <td><?= $this->Number->format($repHijo->tipo) ?></td>
                <td><?= $this->Number->format($repHijo->cond) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $repHijo->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $repHijo->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $repHijo->id], ['confirm' => __('Are you sure you want to delete # {0}?', $repHijo->id)]) ?>
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
