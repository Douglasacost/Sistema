<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Cond Especial'), ['action' => 'edit', $condEspecial->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Cond Especial'), ['action' => 'delete', $condEspecial->id], ['confirm' => __('Are you sure you want to delete # {0}?', $condEspecial->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Cond Especial'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Cond Especial'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="condEspecial view large-9 medium-8 columns content">
    <h3><?= h($condEspecial->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Feci Cargo') ?></th>
            <td><?= h($condEspecial->feci_cargo) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Fecf Cargo') ?></th>
            <td><?= h($condEspecial->fecf_cargo) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($condEspecial->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Cedula') ?></th>
            <td><?= $this->Number->format($condEspecial->cedula) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('C Cond') ?></th>
            <td><?= $this->Number->format($condEspecial->c_cond) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('C Cargo') ?></th>
            <td><?= $this->Number->format($condEspecial->c_cargo) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Descripcion') ?></h4>
        <?= $this->Text->autoParagraph(h($condEspecial->Descripcion)); ?>
    </div>
</div>
