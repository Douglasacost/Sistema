<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Tr Parentesco'), ['action' => 'edit', $trParentesco->C_paren]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Tr Parentesco'), ['action' => 'delete', $trParentesco->C_paren], ['confirm' => __('Are you sure you want to delete # {0}?', $trParentesco->C_paren)]) ?> </li>
        <li><?= $this->Html->link(__('List Tr Parentesco'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Tr Parentesco'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="trParentesco view large-9 medium-8 columns content">
    <h3><?= h($trParentesco->C_paren) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Desparen') ?></th>
            <td><?= h($trParentesco->desparen) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('C Paren') ?></th>
            <td><?= $this->Number->format($trParentesco->C_paren) ?></td>
        </tr>
    </table>
</div>
