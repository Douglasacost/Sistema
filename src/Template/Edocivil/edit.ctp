<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $edocivil->c_edociv],
                ['confirm' => __('Are you sure you want to delete # {0}?', $edocivil->c_edociv)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Edocivil'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="edocivil form large-9 medium-8 columns content">
    <?= $this->Form->create($edocivil) ?>
    <fieldset>
        <legend><?= __('Edit Edocivil') ?></legend>
        <?php
            echo $this->Form->input('Estadoc');
            echo $this->Form->input('SIG');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
