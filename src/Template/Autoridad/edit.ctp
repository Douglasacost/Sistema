<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $autoridad->Nombre],
                ['confirm' => __('Are you sure you want to delete # {0}?', $autoridad->Nombre)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Autoridad'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="autoridad form large-9 medium-8 columns content">
    <?= $this->Form->create($autoridad) ?>
    <fieldset>
        <legend><?= __('Edit Autoridad') ?></legend>
        <?php
            echo $this->Form->input('nombre');
            echo $this->Form->input('Cargo2');
            echo $this->Form->input('siglas');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
