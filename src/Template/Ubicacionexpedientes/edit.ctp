<div class="row">
    <div class="col-md-6 col-md-offset-3">
    	<div class="page-header">
          		<h2>Ubicacion de Expediente</h2>
    	</div>
              <div class="well">
    <?= $this->Form->create($ubicacionexpediente) ?>
    <fieldset>
        <legend><?= __('Editar Ubicacion de expediente') ?></legend>
        <?php
            echo $this->Form->input('Cedula');
            echo $this->Form->input('area');
            echo $this->Form->input('archivo');
            echo $this->Form->input('puerta');
            echo $this->Form->input('entrepaño');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Guardar')) ?>
    <?= $this->Form->end() ?>
</div>
