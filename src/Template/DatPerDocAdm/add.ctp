<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Dat Per Doc Adm'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="datPerDocAdm form large-9 medium-8 columns content">
    <?= $this->Form->create($datPerDocAdm) ?>
    <fieldset>
        <legend><?= __('Add Dat Per Doc Adm') ?></legend>
        <?php
            echo $this->Form->input('Ape_nom');
            echo $this->Form->input('Nacio');
            echo $this->Form->input('Sexo');
            echo $this->Form->input('Fec_nac', ['empty' => true]);
            echo $this->Form->input('Lugar_nac');
            echo $this->Form->input('Pais');
            echo $this->Form->input('Edo_civ');
            echo $this->Form->input('c_enti');
            echo $this->Form->input('Tip_tra');
            echo $this->Form->input('Dir_hab');
            echo $this->Form->input('Telf');
            echo $this->Form->input('Telf2');
            echo $this->Form->input('C_MA_DPT');
            echo $this->Form->input('C_MUFOPQ');
            echo $this->Form->input('Cond');
            echo $this->Form->input('T_TIPO');
            echo $this->Form->input('actualizado');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
