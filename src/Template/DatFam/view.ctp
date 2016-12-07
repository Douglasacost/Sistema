<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Dat Fam'), ['action' => 'edit', $datFam->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Dat Fam'), ['action' => 'delete', $datFam->id], ['confirm' => __('Are you sure you want to delete # {0}?', $datFam->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Dat Fam'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Dat Fam'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="datFam view large-9 medium-8 columns content">
    <h3><?= h($datFam->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Cedulaf') ?></th>
            <td><?= h($datFam->Cedulaf) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Ape Nomf') ?></th>
            <td><?= h($datFam->Ape_Nomf) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Fec Nac') ?></th>
            <td><?= h($datFam->Fec_nac) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Sexo') ?></th>
            <td><?= h($datFam->Sexo) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Vivo') ?></th>
            <td><?= h($datFam->vivo) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($datFam->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('CED') ?></th>
            <td><?= $this->Number->format($datFam->CED) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Parentesco') ?></th>
            <td><?= $this->Number->format($datFam->Parentesco) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Discapacidad') ?></th>
            <td><?= $this->Number->format($datFam->discapacidad) ?></td>
        </tr>
    </table>
</div>
