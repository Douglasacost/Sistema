<div class="row">
    <div class="col-md-6 col-md-offset-3">
    	<div class="page-header">
    		<h2>Agregar nuevo Estado</h2>
    	</div>
    <fieldset>
        <legend><?= __('Añadir Estado') ?></legend>
        <?php
            echo $this->Form->input('Estado');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Guardar')) ?>
    <?= $this->Form->end() ?>
</div>
