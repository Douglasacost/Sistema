<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $planteles2->C_PLT],
                ['confirm' => __('Are you sure you want to delete # {0}?', $planteles2->C_PLT)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Planteles2'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="planteles2 form large-9 medium-8 columns content">
    <?= $this->Form->create($planteles2) ?>
    <fieldset>
        <legend><?= __('Edit Planteles2') ?></legend>
        <?php
            echo $this->Form->input('C_DEPEN');
            echo $this->Form->input('C_EFED');
            echo $this->Form->input('C_MUFOPQ');
            echo $this->Form->input('C_MA_DPT');
            echo $this->Form->input('N_PLT');
            echo $this->Form->input('DIRECC');
            echo $this->Form->input('RURALIDAD');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
