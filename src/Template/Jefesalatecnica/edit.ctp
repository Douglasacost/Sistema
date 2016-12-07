<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $jefesalatecnica->Nombre],
                ['confirm' => __('Are you sure you want to delete # {0}?', $jefesalatecnica->Nombre)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Jefesalatecnica'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="jefesalatecnica form large-9 medium-8 columns content">
    <?= $this->Form->create($jefesalatecnica) ?>
    <fieldset>
        <legend><?= __('Edit Jefesalatecnica') ?></legend>
        <?php
            echo $this->Form->input('Iniciales');
            echo $this->Form->input('estatus');
            echo $this->Form->input('Cargo');
            echo $this->Form->input('usuario');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
