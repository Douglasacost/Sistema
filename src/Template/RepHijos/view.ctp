<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Rep Hijo'), ['action' => 'edit', $repHijo->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Rep Hijo'), ['action' => 'delete', $repHijo->id], ['confirm' => __('Are you sure you want to delete # {0}?', $repHijo->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Rep Hijos'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Rep Hijo'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="repHijos view large-9 medium-8 columns content">
    <h3><?= h($repHijo->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('NOMBRE') ?></th>
            <td><?= h($repHijo->NOMBRE) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('CEDF') ?></th>
            <td><?= h($repHijo->CEDF) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('NOMBREF') ?></th>
            <td><?= h($repHijo->NOMBREF) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('FEC NAC') ?></th>
            <td><?= h($repHijo->FEC_NAC) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($repHijo->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('CED') ?></th>
            <td><?= $this->Number->format($repHijo->CED) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('EDAD') ?></th>
            <td><?= $this->Number->format($repHijo->EDAD) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Tipo') ?></th>
            <td><?= $this->Number->format($repHijo->tipo) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Cond') ?></th>
            <td><?= $this->Number->format($repHijo->cond) ?></td>
        </tr>
    </table>
</div>
