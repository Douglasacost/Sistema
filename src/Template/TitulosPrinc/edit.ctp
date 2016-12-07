<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $titulosPrinc->cod_titulo],
                ['confirm' => __('Are you sure you want to delete # {0}?', $titulosPrinc->cod_titulo)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Titulos Princ'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="titulosPrinc form large-9 medium-8 columns content">
    <?= $this->Form->create($titulosPrinc) ?>
    <fieldset>
        <legend><?= __('Edit Titulos Princ') ?></legend>
        <?php
            echo $this->Form->input('nombre_titulo');
            echo $this->Form->input('nivel');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
