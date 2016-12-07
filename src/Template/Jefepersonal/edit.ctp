<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $jefepersonal->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $jefepersonal->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Jefepersonal'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="jefepersonal form large-9 medium-8 columns content">
    <?= $this->Form->create($jefepersonal) ?>
    <fieldset>
        <legend><?= __('Edit Jefepersonal') ?></legend>
        <?php
            echo $this->Form->input('Nombre');
            echo $this->Form->input('Iniciales');
            echo $this->Form->input('estatus');
            echo $this->Form->input('Cargo');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
