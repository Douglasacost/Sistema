<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Tr Especiale'), ['action' => 'edit', $trEspeciale->C_SIT_ESP]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Tr Especiale'), ['action' => 'delete', $trEspeciale->C_SIT_ESP], ['confirm' => __('Are you sure you want to delete # {0}?', $trEspeciale->C_SIT_ESP)]) ?> </li>
        <li><?= $this->Html->link(__('List Tr Especiales'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Tr Especiale'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="trEspeciales view large-9 medium-8 columns content">
    <h3><?= h($trEspeciale->C_SIT_ESP) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('N SIT ESP') ?></th>
            <td><?= h($trEspeciale->N_SIT_ESP) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('N INI ESP') ?></th>
            <td><?= h($trEspeciale->N_INI_ESP) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('C SIT ESP') ?></th>
            <td><?= $this->Number->format($trEspeciale->C_SIT_ESP) ?></td>
        </tr>
    </table>
</div>
