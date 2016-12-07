<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $nivelTitulo->NIVEL],
                ['confirm' => __('Are you sure you want to delete # {0}?', $nivelTitulo->NIVEL)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Nivel Titulo'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="nivelTitulo form large-9 medium-8 columns content">
    <?= $this->Form->create($nivelTitulo) ?>
    <fieldset>
        <legend><?= __('Edit Nivel Titulo') ?></legend>
        <?php
            echo $this->Form->input('DESC');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
