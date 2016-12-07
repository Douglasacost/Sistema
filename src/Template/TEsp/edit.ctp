<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $tEsp->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $tEsp->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List T Esp'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="tEsp form large-9 medium-8 columns content">
    <?= $this->Form->create($tEsp) ?>
    <fieldset>
        <legend><?= __('Edit T Esp') ?></legend>
        <?php
            echo $this->Form->input('cod_Tit');
            echo $this->Form->input('cod_Ar');
            echo $this->Form->input('cod_Esp');
            echo $this->Form->input('nombre_Esp');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
