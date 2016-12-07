<div class="row">
    <div class="col-md-6 col-md-offset-3">
    	<div class="page-header">
    		<h2>Agregar nueva Parroquia</h2>
    	</div>
    <?= $this->Form->create($mfPquium) ?>
    <fieldset>
        <legend><?= __('Añadir Nueva Paroquia') ?></legend>
        <?php
            echo $this->Form->input('Nombre de la Paroquia');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
