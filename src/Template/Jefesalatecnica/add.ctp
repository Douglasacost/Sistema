<div class="row">
    <div class="col-md-6 col-md-offset-3">
    	<div class="page-header">
    		<h2>Agregar nuevo Jefe Sala Tecnica</h2>
    	</div>
    <?= $this->Form->create($jefesalatecnica) ?>
    <fieldset>
        <legend><?= __('Añadir Jefesalatecnica') ?></legend>
        <?php
            echo $this->Form->input('Iniciales');
            echo $this->Form->input('estatus');
            echo $this->Form->input('Cargo');
          ?>
    </fieldset>
    <?= $this->Form->button(__('Guardar')) ?>
    <?= $this->Form->end() ?>
</div>
