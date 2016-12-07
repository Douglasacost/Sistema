<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Dependen'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="dependen form large-9 medium-8 columns content">
    <?= $this->Form->create($dependen) ?>
    <fieldset>
        <legend><?= __('Add Dependen') ?></legend>
        <?php
            echo $this->Form->input('N_DEPEN');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
