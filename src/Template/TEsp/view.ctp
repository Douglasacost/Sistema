<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit T Esp'), ['action' => 'edit', $tEsp->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete T Esp'), ['action' => 'delete', $tEsp->id], ['confirm' => __('Are you sure you want to delete # {0}?', $tEsp->id)]) ?> </li>
        <li><?= $this->Html->link(__('List T Esp'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New T Esp'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="tEsp view large-9 medium-8 columns content">
    <h3><?= h($tEsp->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Nombre Esp') ?></th>
            <td><?= h($tEsp->nombre_Esp) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($tEsp->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Cod Tit') ?></th>
            <td><?= $this->Number->format($tEsp->cod_Tit) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Cod Ar') ?></th>
            <td><?= $this->Number->format($tEsp->cod_Ar) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Cod Esp') ?></th>
            <td><?= $this->Number->format($tEsp->cod_Esp) ?></td>
        </tr>
    </table>
</div>
