<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Hist Car Contra'), ['action' => 'edit', $histCarContra->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Hist Car Contra'), ['action' => 'delete', $histCarContra->id], ['confirm' => __('Are you sure you want to delete # {0}?', $histCarContra->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Hist Car Contra'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Hist Car Contra'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="histCarContra view large-9 medium-8 columns content">
    <h3><?= h($histCarContra->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Cedula') ?></th>
            <td><?= h($histCarContra->cedula) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('C PLT') ?></th>
            <td><?= h($histCarContra->C_PLT) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Otra Ubi') ?></th>
            <td><?= h($histCarContra->otra_ubi) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Periodo') ?></th>
            <td><?= h($histCarContra->Periodo) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($histCarContra->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('C Cargo') ?></th>
            <td><?= $this->Number->format($histCarContra->C_cargo) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('C Ubic') ?></th>
            <td><?= $this->Number->format($histCarContra->c_ubic) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('C Medio') ?></th>
            <td><?= $this->Number->format($histCarContra->c_medio) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Años') ?></th>
            <td><?= $this->Number->format($histCarContra->Años) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Meses') ?></th>
            <td><?= $this->Number->format($histCarContra->Meses) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Dias') ?></th>
            <td><?= $this->Number->format($histCarContra->Dias) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Cancelo') ?></th>
            <td><?= $this->Number->format($histCarContra->Cancelo) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Tipo') ?></th>
            <td><?= $this->Number->format($histCarContra->tipo) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Orden') ?></th>
            <td><?= $this->Number->format($histCarContra->orden) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Desde') ?></th>
            <td><?= h($histCarContra->Desde) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Hasta') ?></th>
            <td><?= h($histCarContra->Hasta) ?></td>
        </tr>
    </table>
</div>
