<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Tr Ente'), ['action' => 'edit', $trEnte->c_ente]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Tr Ente'), ['action' => 'delete', $trEnte->c_ente], ['confirm' => __('Are you sure you want to delete # {0}?', $trEnte->c_ente)]) ?> </li>
        <li><?= $this->Html->link(__('List Tr Entes'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Tr Ente'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="trEntes view large-9 medium-8 columns content">
    <h3><?= h($trEnte->c_ente) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Des Ente') ?></th>
            <td><?= h($trEnte->des_ente) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('C Ente') ?></th>
            <td><?= $this->Number->format($trEnte->c_ente) ?></td>
        </tr>
    </table>
</div>
