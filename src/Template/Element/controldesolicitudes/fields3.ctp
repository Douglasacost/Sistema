<div class="row">
    <div class="col-md-6 col-md-offset-3">
    	<div class="page-header">
    		<h2>Nueva Solicitud</h2>
    	</div>
    <?= $this->Form->create($controldeSolicitude) ?>
    <fieldset>
      <?php
          echo $this->Form->input('cedula_solicitante', ['label' => 'Cedula']);
          echo $this->Form->input('active',['label' => 'Activa  .','type' => 'Checkbox']);
            echo $this->Form->input('fecha_entre_exp', ['empty' => true]);
            echo $this->Form->input('user_ent_analista',['label' => 'Ingresa aqui tu Primer Nombre - Analista']);
            echo $this->Form->input('observacion');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Guardar')) ?>
    <?= $this->Form->end() ?>
</div>
