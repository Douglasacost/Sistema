<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $trMedio->c_medio],
                ['confirm' => __('Are you sure you want to delete # {0}?', $trMedio->c_medio)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Tr Medio'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="trMedio form large-9 medium-8 columns content">
    <?= $this->Form->create($trMedio) ?>
    <fieldset>
        <legend><?= __('Edit Tr Medio') ?></legend>
        <?php
            echo $this->Form->input('desmedio');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
