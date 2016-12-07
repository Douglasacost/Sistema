<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Tr Medio'), ['action' => 'edit', $trMedio->c_medio]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Tr Medio'), ['action' => 'delete', $trMedio->c_medio], ['confirm' => __('Are you sure you want to delete # {0}?', $trMedio->c_medio)]) ?> </li>
        <li><?= $this->Html->link(__('List Tr Medio'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Tr Medio'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="trMedio view large-9 medium-8 columns content">
    <h3><?= h($trMedio->c_medio) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Desmedio') ?></th>
            <td><?= h($trMedio->desmedio) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('C Medio') ?></th>
            <td><?= $this->Number->format($trMedio->c_medio) ?></td>
        </tr>
    </table>
</div>
