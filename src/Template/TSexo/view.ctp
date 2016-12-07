<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit T Sexo'), ['action' => 'edit', $tSexo->Sexo]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete T Sexo'), ['action' => 'delete', $tSexo->Sexo], ['confirm' => __('Are you sure you want to delete # {0}?', $tSexo->Sexo)]) ?> </li>
        <li><?= $this->Html->link(__('List T Sexo'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New T Sexo'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="tSexo view large-9 medium-8 columns content">
    <h3><?= h($tSexo->Sexo) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Sexo') ?></th>
            <td><?= h($tSexo->Sexo) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Nombre') ?></th>
            <td><?= h($tSexo->Nombre) ?></td>
        </tr>
    </table>
</div>
