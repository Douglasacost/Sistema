<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Tiptrab'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="tiptrab index large-9 medium-8 columns content">
    <h3><?= __('Tiptrab') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('Tip_tra') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Descri') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($tiptrab as $tiptrab): ?>
            <tr>
                <td><?= h($tiptrab->Tip_tra) ?></td>
                <td><?= h($tiptrab->Descri) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $tiptrab->Tip_tra]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $tiptrab->Tip_tra]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $tiptrab->Tip_tra], ['confirm' => __('Are you sure you want to delete # {0}?', $tiptrab->Tip_tra)]) ?>
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
