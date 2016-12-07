<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $tSexo->Sexo],
                ['confirm' => __('Are you sure you want to delete # {0}?', $tSexo->Sexo)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List T Sexo'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="tSexo form large-9 medium-8 columns content">
    <?= $this->Form->create($tSexo) ?>
    <fieldset>
        <legend><?= __('Edit T Sexo') ?></legend>
        <?php
            echo $this->Form->input('Nombre');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
