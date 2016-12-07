<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $trPai->c_pais],
                ['confirm' => __('Are you sure you want to delete # {0}?', $trPai->c_pais)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Tr Pais'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="trPais form large-9 medium-8 columns content">
    <?= $this->Form->create($trPai) ?>
    <fieldset>
        <legend><?= __('Edit Tr Pai') ?></legend>
        <?php
            echo $this->Form->input('despais');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
