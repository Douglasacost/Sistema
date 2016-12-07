<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Tr Medio'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="trMedio form large-9 medium-8 columns content">
    <?= $this->Form->create($trMedio) ?>
    <fieldset>
        <legend><?= __('Add Tr Medio') ?></legend>
        <?php
            echo $this->Form->input('desmedio');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
