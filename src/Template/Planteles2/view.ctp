<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Planteles2'), ['action' => 'edit', $planteles2->C_PLT]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Planteles2'), ['action' => 'delete', $planteles2->C_PLT], ['confirm' => __('Are you sure you want to delete # {0}?', $planteles2->C_PLT)]) ?> </li>
        <li><?= $this->Html->link(__('List Planteles2'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Planteles2'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="planteles2 view large-9 medium-8 columns content">
    <h3><?= h($planteles2->C_PLT) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('C PLT') ?></th>
            <td><?= h($planteles2->C_PLT) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('C DEPEN') ?></th>
            <td><?= h($planteles2->C_DEPEN) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('C EFED') ?></th>
            <td><?= h($planteles2->C_EFED) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('C MUFOPQ') ?></th>
            <td><?= h($planteles2->C_MUFOPQ) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('C MA DPT') ?></th>
            <td><?= h($planteles2->C_MA_DPT) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('N PLT') ?></th>
            <td><?= h($planteles2->N_PLT) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('DIRECC') ?></th>
            <td><?= h($planteles2->DIRECC) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('RURALIDAD') ?></th>
            <td><?= h($planteles2->RURALIDAD) ?></td>
        </tr>
    </table>
</div>
