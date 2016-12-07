<div class="row">
    <div class="col-md-6 col-md-offset-3">
    	<div class="page-header">
    		<h2>Crear Departamento</h2>
    	</div>
    <?= $this->Form->create($departamento) ?>
    <fieldset>
        <legend><?= __('Agregar Departamento') ?></legend>
        <?php
            echo $this->Form->input('Departamento');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
