<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Tr Jerarquia'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="trJerarquia form large-9 medium-8 columns content">
    <?= $this->Form->create($trJerarquium) ?>
    <fieldset>
        <legend><?= __('Add Tr Jerarquium') ?></legend>
        <?php
            echo $this->Form->input('Desjera');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
