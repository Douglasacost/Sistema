<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $departamento->Cod],
                ['confirm' => __('Are you sure you want to delete # {0}?', $departamento->Cod)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Departamentos'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="departamentos form large-9 medium-8 columns content">
    <?= $this->Form->create($departamento) ?>
    <fieldset>
        <legend><?= __('Edit Departamento') ?></legend>
        <?php
            echo $this->Form->input('Departamento');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
