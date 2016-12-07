<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Titulos Princ'), ['action' => 'edit', $titulosPrinc->cod_titulo]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Titulos Princ'), ['action' => 'delete', $titulosPrinc->cod_titulo], ['confirm' => __('Are you sure you want to delete # {0}?', $titulosPrinc->cod_titulo)]) ?> </li>
        <li><?= $this->Html->link(__('List Titulos Princ'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Titulos Princ'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="titulosPrinc view large-9 medium-8 columns content">
    <h3><?= h($titulosPrinc->cod_titulo) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Nombre Titulo') ?></th>
            <td><?= h($titulosPrinc->nombre_titulo) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Cod Titulo') ?></th>
            <td><?= $this->Number->format($titulosPrinc->cod_titulo) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Nivel') ?></th>
            <td><?= $this->Number->format($titulosPrinc->nivel) ?></td>
        </tr>
    </table>
</div>
