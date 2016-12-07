<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Nacionali'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="nacionali form large-9 medium-8 columns content">
    <?= $this->Form->create($nacionali) ?>
    <fieldset>
        <legend><?= __('Add Nacionali') ?></legend>
        <?php
            echo $this->Form->input('Nacionalidad');
            echo $this->Form->input('Inicial');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
