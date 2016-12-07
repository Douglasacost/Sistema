<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $trJerarquium->Cjerarquia],
                ['confirm' => __('Are you sure you want to delete # {0}?', $trJerarquium->Cjerarquia)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Tr Jerarquia'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="trJerarquia form large-9 medium-8 columns content">
    <?= $this->Form->create($trJerarquium) ?>
    <fieldset>
        <legend><?= __('Edit Tr Jerarquium') ?></legend>
        <?php
            echo $this->Form->input('Desjera');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
