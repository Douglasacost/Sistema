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
            echo $this->Form->input('fecha_sol_exp', ['empty' => true]);
            echo $this->Form->input('user_sol_analista',['label' => 'Ingresa tu Primer Nombre - Analista']);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Guardar')) ?>
    <?= $this->Form->end() ?>
</div>
