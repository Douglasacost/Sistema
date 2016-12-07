<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Dat Fam'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="datFam index large-9 medium-8 columns content">
    <h3><?= __('Dat Fam') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('CED') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Cedulaf') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Ape_Nomf') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Fec_nac') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Sexo') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Parentesco') ?></th>
                <th scope="col"><?= $this->Paginator->sort('vivo') ?></th>
                <th scope="col"><?= $this->Paginator->sort('discapacidad') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($datFam as $datFam): ?>
            <tr>
                <td><?= $this->Number->format($datFam->id) ?></td>
                <td><?= $this->Number->format($datFam->CED) ?></td>
                <td><?= h($datFam->Cedulaf) ?></td>
                <td><?= h($datFam->Ape_Nomf) ?></td>
                <td><?= h($datFam->Fec_nac) ?></td>
                <td><?= h($datFam->Sexo) ?></td>
                <td><?= $this->Number->format($datFam->Parentesco) ?></td>
                <td><?= h($datFam->vivo) ?></td>
                <td><?= $this->Number->format($datFam->discapacidad) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $datFam->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $datFam->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $datFam->id], ['confirm' => __('Are you sure you want to delete # {0}?', $datFam->id)]) ?>
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
