<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $trCargo->C_cargo],
                ['confirm' => __('Are you sure you want to delete # {0}?', $trCargo->C_cargo)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Tr Cargo'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="trCargo form large-9 medium-8 columns content">
    <?= $this->Form->create($trCargo) ?>
    <fieldset>
        <legend><?= __('Edit Tr Cargo') ?></legend>
        <?php
            echo $this->Form->input('Activo');
            echo $this->Form->input('Personal');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
