<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Cond Especial'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="condEspecial form large-9 medium-8 columns content">
    <?= $this->Form->create($condEspecial) ?>
    <fieldset>
        <legend><?= __('Add Cond Especial') ?></legend>
        <?php
            echo $this->Form->input('cedula');
            echo $this->Form->input('c_cond');
            echo $this->Form->input('Descripcion');
            echo $this->Form->input('c_cargo');
            echo $this->Form->input('feci_cargo');
            echo $this->Form->input('fecf_cargo');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
