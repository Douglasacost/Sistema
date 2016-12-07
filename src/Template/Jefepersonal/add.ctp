<div class="row">
    <div class="col-md-6 col-md-offset-3">
    	<div class="page-header">
    		<h2>Agregar nuevo Jefe Personal</h2>
    	</div>
    <?= $this->Form->create($jefepersonal) ?>
    <fieldset>
        <legend><?= __('Añadir Jefepersonal') ?></legend>
        <?php
            echo $this->Form->input('Nombre');
            echo $this->Form->input('Iniciales');
            echo $this->Form->input('estatus');
            echo $this->Form->input('Cargo');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Guardar')) ?>
    <?= $this->Form->end() ?>
</div>
