<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $trEspeciale->C_SIT_ESP],
                ['confirm' => __('Are you sure you want to delete # {0}?', $trEspeciale->C_SIT_ESP)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Tr Especiales'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="trEspeciales form large-9 medium-8 columns content">
    <?= $this->Form->create($trEspeciale) ?>
    <fieldset>
        <legend><?= __('Edit Tr Especiale') ?></legend>
        <?php
            echo $this->Form->input('N_SIT_ESP');
            echo $this->Form->input('N_INI_ESP');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
