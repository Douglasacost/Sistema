<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Tr Entes'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="trEntes form large-9 medium-8 columns content">
    <?= $this->Form->create($trEnte) ?>
    <fieldset>
        <legend><?= __('Add Tr Ente') ?></legend>
        <?php
            echo $this->Form->input('des_ente');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
