<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Tr Parentesco'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="trParentesco form large-9 medium-8 columns content">
    <?= $this->Form->create($trParentesco) ?>
    <fieldset>
        <legend><?= __('Add Tr Parentesco') ?></legend>
        <?php
            echo $this->Form->input('desparen');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
