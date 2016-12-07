<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Nivel Titulo'), ['action' => 'edit', $nivelTitulo->NIVEL]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Nivel Titulo'), ['action' => 'delete', $nivelTitulo->NIVEL], ['confirm' => __('Are you sure you want to delete # {0}?', $nivelTitulo->NIVEL)]) ?> </li>
        <li><?= $this->Html->link(__('List Nivel Titulo'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Nivel Titulo'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="nivelTitulo view large-9 medium-8 columns content">
    <h3><?= h($nivelTitulo->NIVEL) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('DESC') ?></th>
            <td><?= h($nivelTitulo->DESC) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('NIVEL') ?></th>
            <td><?= $this->Number->format($nivelTitulo->NIVEL) ?></td>
        </tr>
    </table>
</div>
