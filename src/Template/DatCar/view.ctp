<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Dat Car'), ['action' => 'edit', $datCar->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Dat Car'), ['action' => 'delete', $datCar->id], ['confirm' => __('Are you sure you want to delete # {0}?', $datCar->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Dat Car'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Dat Car'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="datCar view large-9 medium-8 columns content">
    <h3><?= h($datCar->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Cedula') ?></th>
            <td><?= h($datCar->cedula) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('C PLT') ?></th>
            <td><?= h($datCar->C_PLT) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('C Moda') ?></th>
            <td><?= h($datCar->c_moda) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Clasifi') ?></th>
            <td><?= h($datCar->Clasifi) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Cjerarquia') ?></th>
            <td><?= h($datCar->Cjerarquia) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Periodo') ?></th>
            <td><?= h($datCar->Periodo) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Comision') ?></th>
            <td><?= h($datCar->comision) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Lugar') ?></th>
            <td><?= h($datCar->lugar) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($datCar->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('C Cargo') ?></th>
            <td><?= $this->Number->format($datCar->C_cargo) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('C Medio') ?></th>
            <td><?= $this->Number->format($datCar->c_medio) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('C SIP ESP') ?></th>
            <td><?= $this->Number->format($datCar->C_SIP_ESP) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Tipo') ?></th>
            <td><?= $this->Number->format($datCar->tipo) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('F ING') ?></th>
            <td><?= h($datCar->F_ING) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Desde') ?></th>
            <td><?= h($datCar->desde) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Hasta') ?></th>
            <td><?= h($datCar->hasta) ?></td>
        </tr>
    </table>
</div>
