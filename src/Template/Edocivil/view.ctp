<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Edocivil'), ['action' => 'edit', $edocivil->c_edociv]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Edocivil'), ['action' => 'delete', $edocivil->c_edociv], ['confirm' => __('Are you sure you want to delete # {0}?', $edocivil->c_edociv)]) ?> </li>
        <li><?= $this->Html->link(__('List Edocivil'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Edocivil'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="edocivil view large-9 medium-8 columns content">
    <h3><?= h($edocivil->c_edociv) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('C Edociv') ?></th>
            <td><?= h($edocivil->c_edociv) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Estadoc') ?></th>
            <td><?= h($edocivil->Estadoc) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('SIG') ?></th>
            <td><?= h($edocivil->SIG) ?></td>
        </tr>
    </table>
</div>
