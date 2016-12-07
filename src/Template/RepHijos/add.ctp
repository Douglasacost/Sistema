<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Rep Hijos'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="repHijos form large-9 medium-8 columns content">
    <?= $this->Form->create($repHijo) ?>
    <fieldset>
        <legend><?= __('Add Rep Hijo') ?></legend>
        <?php
            echo $this->Form->input('CED');
            echo $this->Form->input('NOMBRE');
            echo $this->Form->input('CEDF');
            echo $this->Form->input('NOMBREF');
            echo $this->Form->input('FEC_NAC');
            echo $this->Form->input('EDAD');
            echo $this->Form->input('tipo');
            echo $this->Form->input('cond');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
