<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $trInstitu->c_inst],
                ['confirm' => __('Are you sure you want to delete # {0}?', $trInstitu->c_inst)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Tr Institu'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="trInstitu form large-9 medium-8 columns content">
    <?= $this->Form->create($trInstitu) ?>
    <fieldset>
        <legend><?= __('Edit Tr Institu') ?></legend>
        <?php
            echo $this->Form->input('Des_inst');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
