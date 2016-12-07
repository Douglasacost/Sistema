<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $histCarContra->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $histCarContra->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Hist Car Contra'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="histCarContra form large-9 medium-8 columns content">
    <?= $this->Form->create($histCarContra) ?>
    <fieldset>
        <legend><?= __('Edit Hist Car Contra') ?></legend>
        <?php
            echo $this->Form->input('cedula');
            echo $this->Form->input('C_cargo');
            echo $this->Form->input('c_ubic');
            echo $this->Form->input('C_PLT');
            echo $this->Form->input('c_medio');
            echo $this->Form->input('otra_ubi');
            echo $this->Form->input('Desde', ['empty' => true]);
            echo $this->Form->input('Hasta', ['empty' => true]);
            echo $this->Form->input('Años');
            echo $this->Form->input('Meses');
            echo $this->Form->input('Dias');
            echo $this->Form->input('Cancelo');
            echo $this->Form->input('tipo');
            echo $this->Form->input('orden');
            echo $this->Form->input('Periodo');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
