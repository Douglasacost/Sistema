<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Tiptrab'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="tiptrab form large-9 medium-8 columns content">
    <?= $this->Form->create($tiptrab) ?>
    <fieldset>
        <legend><?= __('Add Tiptrab') ?></legend>
        <?php
            echo $this->Form->input('Descri');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
