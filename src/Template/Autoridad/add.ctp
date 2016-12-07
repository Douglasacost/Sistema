<div class="row">
    <div class="col-md-6 col-md-offset-3">
    	<div class="page-header">
    		<h2>Agregar nueva autoridad</h2>
    	</div>
    <?= $this->Form->create($autoridad) ?>
    <fieldset>
        <legend><?= __('Agregar Autoridad') ?></legend>
        <?php
            echo $this->Form->input('nombre');
            echo $this->Form->input('Cargo2');
            echo $this->Form->input('siglas');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Guardar')) ?>
    <?= $this->Form->end() ?>
</div>
