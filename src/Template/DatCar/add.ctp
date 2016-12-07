<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Dat Car'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="datCar form large-9 medium-8 columns content">
    <?= $this->Form->create($datCar) ?>
    <fieldset>
        <legend><?= __('Add Dat Car') ?></legend>
        <?php
            echo $this->Form->input('cedula');
            echo $this->Form->input('C_cargo');
            echo $this->Form->input('C_PLT');
            echo $this->Form->input('F_ING', ['empty' => true]);
            echo $this->Form->input('c_moda');
            echo $this->Form->input('Clasifi');
            echo $this->Form->input('Cjerarquia');
            echo $this->Form->input('c_medio');
            echo $this->Form->input('C_SIP_ESP');
            echo $this->Form->input('tipo');
            echo $this->Form->input('Periodo');
            echo $this->Form->input('comision');
            echo $this->Form->input('lugar');
            echo $this->Form->input('desde', ['empty' => true]);
            echo $this->Form->input('hasta', ['empty' => true]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
