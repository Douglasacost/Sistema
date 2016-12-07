<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Edocivil'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="edocivil form large-9 medium-8 columns content">
    <?= $this->Form->create($edocivil) ?>
    <fieldset>
        <legend><?= __('Add Edocivil') ?></legend>
        <?php
            echo $this->Form->input('Estadoc');
            echo $this->Form->input('SIG');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
