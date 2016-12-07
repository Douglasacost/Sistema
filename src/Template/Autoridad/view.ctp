<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Autoridad'), ['action' => 'edit', $autoridad->Nombre]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Autoridad'), ['action' => 'delete', $autoridad->Nombre], ['confirm' => __('Are you sure you want to delete # {0}?', $autoridad->Nombre)]) ?> </li>
        <li><?= $this->Html->link(__('List Autoridad'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Autoridad'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="autoridad view large-9 medium-8 columns content">
    <h3><?= h($autoridad->Nombre) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Nombre') ?></th>
            <td><?= h($autoridad->nombre) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Cargo2') ?></th>
            <td><?= h($autoridad->Cargo2) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Siglas') ?></th>
            <td><?= h($autoridad->siglas) ?></td>
        </tr>
    </table>
</div>
