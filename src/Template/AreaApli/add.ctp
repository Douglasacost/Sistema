<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Area Apli'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="areaApli form large-9 medium-8 columns content">
    <?= $this->Form->create($areaApli) ?>
    <fieldset>
        <legend><?= __('Add Area Apli') ?></legend>
        <?php
            echo $this->Form->input('cod_Tit');
            echo $this->Form->input('cod_Area');
            echo $this->Form->input('nombre_Area');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
