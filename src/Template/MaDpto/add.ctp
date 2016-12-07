<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Ma Dpto'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="maDpto form large-9 medium-8 columns content">
    <?= $this->Form->create($maDpto) ?>
    <fieldset>
        <legend><?= __('Add Ma Dpto') ?></legend>
        <?php
            echo $this->Form->input('C_MA_DPT');
            echo $this->Form->input('C_EFED');
            echo $this->Form->input('N_MUAUDP');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
