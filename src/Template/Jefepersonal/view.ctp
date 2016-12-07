<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Jefepersonal'), ['action' => 'edit', $jefepersonal->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Jefepersonal'), ['action' => 'delete', $jefepersonal->id], ['confirm' => __('Are you sure you want to delete # {0}?', $jefepersonal->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Jefepersonal'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Jefepersonal'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="jefepersonal view large-9 medium-8 columns content">
    <h3><?= h($jefepersonal->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Nombre') ?></th>
            <td><?= h($jefepersonal->Nombre) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Iniciales') ?></th>
            <td><?= h($jefepersonal->Iniciales) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Estatus') ?></th>
            <td><?= h($jefepersonal->estatus) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Cargo') ?></th>
            <td><?= h($jefepersonal->Cargo) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($jefepersonal->id) ?></td>
        </tr>
    </table>
</div>
