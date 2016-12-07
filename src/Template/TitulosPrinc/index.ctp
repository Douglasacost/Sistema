<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Titulos Princ'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="titulosPrinc index large-9 medium-8 columns content">
    <h3><?= __('Titulos Princ') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('cod_titulo') ?></th>
                <th scope="col"><?= $this->Paginator->sort('nombre_titulo') ?></th>
                <th scope="col"><?= $this->Paginator->sort('nivel') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($titulosPrinc as $titulosPrinc): ?>
            <tr>
                <td><?= $this->Number->format($titulosPrinc->cod_titulo) ?></td>
                <td><?= h($titulosPrinc->nombre_titulo) ?></td>
                <td><?= $this->Number->format($titulosPrinc->nivel) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $titulosPrinc->cod_titulo]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $titulosPrinc->cod_titulo]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $titulosPrinc->cod_titulo], ['confirm' => __('Are you sure you want to delete # {0}?', $titulosPrinc->cod_titulo)]) ?>
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
