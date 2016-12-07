<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Dat Fam'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="datFam form large-9 medium-8 columns content">
    <?= $this->Form->create($datFam) ?>
    <fieldset>
        <legend><?= __('Add Dat Fam') ?></legend>
        <?php
            echo $this->Form->input('CED');
            echo $this->Form->input('Cedulaf');
            echo $this->Form->input('Ape_Nomf');
            echo $this->Form->input('Fec_nac');
            echo $this->Form->input('Sexo');
            echo $this->Form->input('Parentesco');
            echo $this->Form->input('vivo');
            echo $this->Form->input('discapacidad');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
