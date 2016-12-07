<div class="row">
    <div class="col-md-6 col-md-offset-3">
    	<div class="page-header">
    		<h2>Nueva Solicitud</h2>
    	</div>
              <div class="well">
    <?= $this->Form->create($controldeSolicitude) ?>
    <fieldset>
        <?php
            echo $this->Form->input('cedula_solicitante', ['label' => 'Cedula']);
            echo $this->Form->input('active',['label' => 'Activa  .','type' => 'Checkbox']);
            echo $this->Form->input('user_registro', ['label' => 'Ingresa aqui tu nombre Completo - Registro','placeholder'=> $current_user['first_name']]);
            echo $this->Form->input('observacion',['label' => 'Informacion de Solicitud']);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Guardar')) ?>
    <?= $this->Form->end() ?>
</div>
