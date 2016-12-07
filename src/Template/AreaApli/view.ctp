<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Area Apli'), ['action' => 'edit', $areaApli->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Area Apli'), ['action' => 'delete', $areaApli->id], ['confirm' => __('Are you sure you want to delete # {0}?', $areaApli->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Area Apli'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Area Apli'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="areaApli view large-9 medium-8 columns content">
    <h3><?= h($areaApli->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Nombre Area') ?></th>
            <td><?= h($areaApli->nombre_Area) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($areaApli->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Cod Tit') ?></th>
            <td><?= $this->Number->format($areaApli->cod_Tit) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Cod Area') ?></th>
            <td><?= $this->Number->format($areaApli->cod_Area) ?></td>
        </tr>
    </table>
</div>
