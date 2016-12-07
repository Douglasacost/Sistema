<div class="row">
    <div class="col-md-6 col-md-offset-3">
    	<div class="page-header">
    		<h2>Agregar nuevo Pais</h2>
    	</div>
    <?= $this->Form->create($trPai) ?>
    <fieldset>
        <legend><?= __('Añadir Pais') ?></legend>
        <?php
            echo $this->Form->input('Nombre de Pais');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Guardar')) ?>
    <?= $this->Form->end() ?>
</div>
