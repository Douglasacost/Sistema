<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Tr Tip Doc'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="trTipDoc form large-9 medium-8 columns content">
    <?= $this->Form->create($trTipDoc) ?>
    <fieldset>
        <legend><?= __('Add Tr Tip Doc') ?></legend>
        <?php
            echo $this->Form->input('c_catdoc');
            echo $this->Form->input('c_doc');
            echo $this->Form->input('desc_doc');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
