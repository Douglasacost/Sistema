<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Tr Modalida'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="trModalida form large-9 medium-8 columns content">
    <?= $this->Form->create($trModalida) ?>
    <fieldset>
        <legend><?= __('Add Tr Modalida') ?></legend>
        <?php
            echo $this->Form->input('des_modali');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
