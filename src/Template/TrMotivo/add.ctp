<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Tr Motivo'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="trMotivo form large-9 medium-8 columns content">
    <?= $this->Form->create($trMotivo) ?>
    <fieldset>
        <legend><?= __('Add Tr Motivo') ?></legend>
        <?php
            echo $this->Form->input('des_motiv');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
