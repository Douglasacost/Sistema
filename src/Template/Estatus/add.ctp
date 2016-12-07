<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Estatus'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="estatus form large-9 medium-8 columns content">
    <?= $this->Form->create($estatus) ?>
    <fieldset>
        <legend><?= __('Add Estatus') ?></legend>
        <?php
            echo $this->Form->input('Estatus');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
