<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Tr Tipclasi'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="trTipclasi form large-9 medium-8 columns content">
    <?= $this->Form->create($trTipclasi) ?>
    <fieldset>
        <legend><?= __('Add Tr Tipclasi') ?></legend>
        <?php
            echo $this->Form->input('Desc_clas');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
