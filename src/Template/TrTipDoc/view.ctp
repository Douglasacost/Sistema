<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Tr Tip Doc'), ['action' => 'edit', $trTipDoc->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Tr Tip Doc'), ['action' => 'delete', $trTipDoc->id], ['confirm' => __('Are you sure you want to delete # {0}?', $trTipDoc->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Tr Tip Doc'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Tr Tip Doc'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="trTipDoc view large-9 medium-8 columns content">
    <h3><?= h($trTipDoc->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Desc Doc') ?></th>
            <td><?= h($trTipDoc->desc_doc) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($trTipDoc->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('C Catdoc') ?></th>
            <td><?= $this->Number->format($trTipDoc->c_catdoc) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('C Doc') ?></th>
            <td><?= $this->Number->format($trTipDoc->c_doc) ?></td>
        </tr>
    </table>
</div>
