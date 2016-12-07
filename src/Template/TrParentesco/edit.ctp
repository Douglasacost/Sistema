<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $trParentesco->C_paren],
                ['confirm' => __('Are you sure you want to delete # {0}?', $trParentesco->C_paren)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Tr Parentesco'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="trParentesco form large-9 medium-8 columns content">
    <?= $this->Form->create($trParentesco) ?>
    <fieldset>
        <legend><?= __('Edit Tr Parentesco') ?></legend>
        <?php
            echo $this->Form->input('desparen');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
