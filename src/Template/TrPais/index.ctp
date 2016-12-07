<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Tr Pai'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="trPais index large-9 medium-8 columns content">
    <h3><?= __('Tr Pais') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('c_pais') ?></th>
                <th scope="col"><?= $this->Paginator->sort('despais') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($trPais as $trPai): ?>
            <tr>
                <td><?= h($trPai->c_pais) ?></td>
                <td><?= h($trPai->despais) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $trPai->c_pais]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $trPai->c_pais]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $trPai->c_pais], ['confirm' => __('Are you sure you want to delete # {0}?', $trPai->c_pais)]) ?>
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
